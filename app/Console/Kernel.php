<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\Competition;
use App\Models\FinishedBets;
use App\Models\FinishedBets_Wallet;
use App\Models\IncompleteBets;
use App\Models\IncompleteBets_wallet;
use App\Models\UserAccounts;
use App\Models\VirtualWallet;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            Competition::where('odd',2)->update(['status' => 'completed']);
            $refundmoney = Competition::where('odd',1)->get();
            if( $refundmoney){
                foreach($refundmoney as $refund){
                   
                $virtualwallet = VirtualWallet::where('competition_id', $refund->id)->get();
                
                foreach($virtualwallet as $wallet){
                $amount = UserAccounts::where('user_id', $wallet->user_id)->get();
               
                foreach($amount as $balance){
                $total = 0;
                $total = $balance->amount + $wallet->amount;
                   
                UserAccounts::where('user_id', $wallet->user_id)->update(['amount' => $total]);
               
                $incompletebets = new IncompleteBets();
                $incompletebets->id = $refund->id;
                $incompletebets->home_team = $refund->home_team;
                $incompletebets->away_team = $refund->away_team;
                $incompletebets->odd = $refund->odd;
                $incompletebets->start_time = $refund->start_time;
                $incompletebets->end_time = $refund->end_time;
                $incompletebets->save();

                $incompletebets_wallet = new IncompleteBets_wallet();
                $incompletebets_wallet->competition_id = $wallet->competition_id;
                $incompletebets_wallet->user_id = $wallet->user_id;
                $incompletebets_wallet->bet_type = $wallet->bet_type;
                $incompletebets_wallet->status = 'Incomplete';
                $incompletebets_wallet->stake = $wallet->amount;
                $incompletebets_wallet->amount =  $wallet->amount;
                $incompletebets_wallet->save();
                
                

                VirtualWallet::where('competition_id', $refund->id)->delete();
                Competition::where('odd',1)->delete();
                }
                }
                }

                

            }
        })->everyMinute();

        // schedule and check wins
        $schedule->call(function(){
           $checkwins = Competition::where('status' ,'completed')->get();
           if($checkwins){
             foreach($checkwins as $checkwin){
                $winingodd = 1;
                $virtualwallet = VirtualWallet::where('competition_id', $checkwin->id)->where('bet_type',$winingodd)->first();
                if ($virtualwallet){
                    $balance = UserAccounts::where('user_id', $virtualwallet->user_id)->first(); 
                   
                                          
                            $total = 0;
                            $recievedamount =  (( $checkwin->odd * $virtualwallet->amount)*95/100);
                            $total = $recievedamount + $balance->amount; 

                            UserAccounts::where('user_id', $virtualwallet->user_id)->update(['amount' => $total]);
                            if(FinishedBets::where('id', $checkwin->id)->doesntExist()){
                                
                                           
                                            $finishedbets = new FinishedBets();
                                            $finishedbets->id = $checkwin->id;
                                            $finishedbets->home_team = $checkwin->home_team;
                                            $finishedbets->away_team = $checkwin->away_team;
                                            $finishedbets->odd = $checkwin->odd;
                                            $finishedbets->start_time = $checkwin->start_time;
                                            $finishedbets->end_time = $checkwin->end_time;
                                            $finishedbets->save();
                                            $userCompetitions = VirtualWallet::where('competition_id', $checkwin->id)->get();
                                            foreach($userCompetitions as $user){
                                                
                                                $finishedbets_wallet = new FinishedBets_Wallet();
                                                $finishedbets_wallet->competition_id = $user->competition_id;
                                                $finishedbets_wallet->user_id = $user->user_id;
                                                $finishedbets_wallet->bet_type = $user->bet_type;
                                                $finishedbets_wallet->status = $user->bet_type == $winingodd?"Won":"Lost";
                                                $finishedbets_wallet->stake = $user->amount;
                                                $finishedbets_wallet->amount =  $user->bet_type == $winingodd?$recievedamount:0;
                                                $finishedbets_wallet->save();
                                                VirtualWallet::where('user_id', $user->user_id)->where('competition_id',$user->competition_id)->delete();
                                            }
                                            Competition::where('id',$checkwin->id)->delete();
                                            
                            }          
                }
                else{
                    
                    if(FinishedBets::where('id', $checkwin->id)->doesntExist()){
                                
                                           
                        $finishedbets = new FinishedBets();
                        $finishedbets->id = $checkwin->id;
                        $finishedbets->home_team = $checkwin->home_team;
                        $finishedbets->away_team = $checkwin->away_team;
                        $finishedbets->odd = $checkwin->odd;
                        $finishedbets->start_time = $checkwin->start_time;
                        $finishedbets->end_time = $checkwin->end_time;
                        $finishedbets->save();
                        $userCompetitions = VirtualWallet::where('competition_id', $checkwin->id)->get();
                        foreach($userCompetitions as $user){
                            
                            $finishedbets_wallet = new FinishedBets_Wallet();
                            $finishedbets_wallet->competition_id = $user->competition_id;
                            $finishedbets_wallet->user_id = $user->user_id;
                            $finishedbets_wallet->bet_type = $user->bet_type;
                            $finishedbets_wallet->status = "Lost";
                            $finishedbets_wallet->stake = $user->amount;
                            $finishedbets_wallet->amount = 0;
                            $finishedbets_wallet->save();
                            VirtualWallet::where('user_id', $user->user_id)->delete();
                        }
                        Competition::where('id',$checkwin->id)->delete();
                        
        }          

                }
                
             }
           }
            
        })->everyMinute();
     }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
