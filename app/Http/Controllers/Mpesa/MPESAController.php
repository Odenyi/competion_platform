<?php

namespace App\Http\Controllers\Mpesa;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transactions;
use App\Models\UserAccounts;
use Illuminate\Support\Facades\Auth;

class MPESAController extends Controller
{
    //deposit amount from daraja to database
    public function depositAmount(Request $request)
    {
        
        $useraccount = UserAccounts::where('user_id',Auth::user()->id)->first();
        $user_id = Auth::user()->id;
        $Previous_balance = $useraccount->amount;
        $transaction_type = "deposit";
        $amountstring=$request->depositedamount; 
        $amount = (int)$amountstring;
        $transaction_info = "send money";
        $available_balance = $amount + $Previous_balance;

        $transaction = new Transactions();
        $transaction->user_id =  $user_id;
        $transaction->transaction_info = $transaction_info;
        $transaction->Previous_balance = $Previous_balance;
        $transaction->transaction_type = $transaction_type ; 
        $transaction->amount = $amount;
        $transaction->available_balance = $available_balance; 
        $transaction->save();

        $useraccount->amount = $available_balance;
        $useraccount->update();
          
    //     'user_id',
    // 'transaction_info',
    // 'Previous_balance',
    // 'transaction_type',
    // 'amount',
    // 'available_balance'  
    }
    //get access token
    public function getAccessToken()
    {
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        
        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        // return $response;
        return $response->access_token;
    }
    public function b2cRequest(Request $request)
    {
        $curl_post_data = array(
            'InitiatorName' => env('MPESA_B2C_INITIATOR'),
            'SecurityCredential' => env('MPESA_B2C_PASSOWRD'),
            'CommandID' => 'SalaryPayment',
            'Amount' => $request->amount,
            'PartyA' => env('MPESA_SHORTCODE'),
            'PartyB' => $request->phone,
            'Remarks' => $request->remarks,
            'QueueTimeOutURL' => env('MPESA_TEST_URL') . '/mpesaLaravel/api/b2ctimeout',
            'ResultURL' => env('MPESA_TEST_URL') . '/mpesaLaravel/api/b2ccallback',
            'Occasion' => $request->occasion
          );

        $res = $this->makeHttp('/b2c/v1/paymentrequest', $curl_post_data);

        return $res;
    }


    /**
     * Register URL
     */
    public function registerURLS()
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'ResponseType' => 'Completed',
            'ConfirmationURL' => env('MPESA_TEST_URL') . '/api/confirmation',
            'ValidationURL' => env('MPESA_TEST_URL') . '/api/validation'
        );

        $url = '/c2b/v1/registerurl';
        $response = $this->makeHttp($url, $body);

        return $response;
    }

    public function stkPush(Request $request)
    {
        $timestamp = date('YmdHis');
        $password = base64_encode( env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);
        // $user = User::where('user_id',Auth::user()->id)->first();
        $phoneNumber =254705588710;
        $amount = ceil($request->amount);

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' =>$amount,
            'PartyA' => $phoneNumber,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => env('MPESA_TEST_URL'). '/api/stkpush',
            'AccountReference' => "odenyi",
            'TransactionDesc' => "odenyi"
          );

        $url = '/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        return $response;
    }

    /**
     * Simulate Transaction
     */
    public function simulateTransaction(Request $request)
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'Msisdn' => '254708374149',
            'Amount' => $request->amount,
            'BillRefNumber' => $request->account,
            'CommandID' => 'CustomerPayBillOnline'
        );

        $url =  '/c2b/v1/simulate';
        $response = $this->makeHttp($url, $body);

        return $response;
    }

    /**
     * Transaction status API
     */
    public function transactionStatus(Request $request)
    {
        $body =  array(
            'Initiator' => env('MPESA_B2C_INITIATOR'),
            'SecurityCredential' => env('MPESA_B2C_PASSWORD'),
            'CommandID' => 'TransactionStatusQuery',
            'TransactionID' => $request->transactionid,
            'PartyA' => env('MPESA_SHORTCODE'),
            'IdentifierType' => '4',
            'ResultURL' => env('MPESA_TEST_URL'). '/api/transaction-status/result_url',
            'QueueTimeOutURL' => env('MPESA_TEST_URL'). '/api/transaction-status/timeout_url',
            'Remarks' => 'CheckTransaction',
            'Occasion' => 'VerifyTransaction'
          );

        $url =  'transactionstatus/v1/query';
        $response = $this->makeHttp($url, $body);

        return $response;
    }


    public function reverseTransaction(Request $request){
        $body = array(
            'Initiator' => env('MPESA_B2C_INITIATOR'),
            'SecurityCredential' => env('MPESA_B2C_PASSWORD'),
            'CommandID' => 'TransactionReversal',
            'TransactionID' => $request->transactionid,
            'Amount' => $request->amount,
            'ReceiverParty' => env('MPESA_SHORTCODE'),
            'RecieverIdentifierType' => '11',
            'ResultURL' => env('MPESA_TEST_URL') . '/api/reversal/result_url',
            'QueueTimeOutURL' => env('MPESA_TEST_URL') . '/api/reversal/timeout_url',
            'Remarks' => 'ReversalRequest',
            'Occasion' => 'ErroneousPayment'
          );

          $url =  'reversal/v1/request';
          $response = $this->makeHttp($url, $body);
  
          return $response;
    }


    public function makeHttp($url, $body)
    {
        // $url = 'https://mpesa-reflector.herokuapp.com' . $url;
        $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer '. $this->getAccessToken()),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => json_encode($body)
                )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }
}
