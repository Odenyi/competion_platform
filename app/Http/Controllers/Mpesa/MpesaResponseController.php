<?php

namespace App\Http\Controllers\Mpesa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mpesa\MPESAController;

class MpesaResponseController extends Controller
{
    protected $access_token;
    public function __construct(MPESAController $access_token)
    {
       $this->access_token = $access_token;
    }
    //GET ACCESS TOKENS
    
    public function validation(Request $request){
        Log::info('Validation endpoint hit');
        Log::info($request->all());

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function stkPushresponse($id){
        // $callbackJSONData=$request->file_get_contents('php://input');
        // $callbackData=json_decode($request->all());
        

        // return $response;
        $accesstokens =   $this->access_token->getAccessToken();

        $checkoutid = $id;
        
        
        $timestamp = date('YmdHis');
        $password = base64_encode( env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);
      
        $payload = array(
            "BusinessShortCode"  => env('MPESA_STK_SHORTCODE'),
            "Password" => $password,
            "Timestamp" => $timestamp,
           "CheckoutRequestID" => $checkoutid
        );

        $url = "https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query";
        

        $curl = curl_init();		
		curl_setopt_array($curl, 
			array(
				CURLOPT_URL => $url,
				CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer '.$accesstokens),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => json_encode($payload)
			)
		);
		$curl_response = curl_exec($curl);
		return $curl_response;
       
        // Log::info('STK Push endpoint hit');
        // Log::info($request->all());
        // $result= [
        //     "resultDesc"=>$request->ResultDesc,
        //     "resultCode"=>$request->ResultCode,
        //     "merchantRequestID"=>$request->MerchantRequestID,
        //     "checkoutRequestID"=>$request->CheckoutRequestID,
        //     "amount"=>$request->CallbackMetadata->Item[0]->Value,
        //     "mpesaReceiptNumber"=>$request->CallbackMetadata->Item[1]->Value,
        //     "transactionDate"=>$request->CallbackMetadata->Item[3]->Value,
        //     "phoneNumber"=>$request->CallbackMetadata->Item[4]->Value
        // ];
        // return json_encode($result);
    }
    public function stkPush(Request $request)
    {
        # code...
         Log::info('STK Push endpoint hit');
        Log::info($request->all());
        $result= [
            "resultDesc"=>$request->ResultDesc,
            "resultCode"=>$request->ResultCode,
            "merchantRequestID"=>$request->MerchantRequestID,
            "checkoutRequestID"=>$request->CheckoutRequestID
        ];
        return json_encode($result);
    }
    public function b2cCallback(Request $request){
        Log::info('B2C endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function transactionStatusResponse(Request $request){
        Log::info('transactionStatusResponse  endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function transactionReversal(Request $request){
        Log::info('transactionReversal  endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }


    public function confirmation(Request $request){
        Log::info('Confirmation endpoint hit');
        Log::info($request->all());

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }
}
