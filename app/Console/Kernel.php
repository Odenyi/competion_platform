<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\Competition;
use App\Models\FinishedBets;
use App\Models\FinishedBets_Wallet;
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
        // $schedule->call(function () {
        //     Competition::where('odd',2)->update(['status' => 'completed']);
        //     $refundmoney = Competition::where('odd',1)->get();
        //     if( $refundmoney){
        //         foreach($refundmoney as $refund){
                   
        //         $virtualwallet = VirtualWallet::where('competition_id', $refund->id)->get();
                
        //         foreach($virtualwallet as $wallet){
        //         $amount = UserAccounts::where('user_id', $wallet->user_id)->get();
        //         foreach($amount as $balance){
        //         $total = 0;
        //         $total = $balance->amount + $wallet->amount;
              
        //         UserAccounts::where('user_id', $wallet->user_id)->update(['amount' => $total]);
        //         VirtualWallet::where('competition_id', $refund->id)->delete();
        //         Competition::where('odd',1)->delete();
        //         }
        //         }
        //         }

                

        //     }
        // })->everyMinute();

        // schedule and check wins
        $schedule->call(function(){
           $checkwins = Competition::where('status' ,'completed')->get();
           if($checkwins){
             foreach($checkwins as $checkwin){
                $winingodd = 1;
                $virtualwallet = VirtualWallet::where('competition_id', $checkwin->id)->get();
                foreach($virtualwallet as $wallet){
                    //get user id who won and load account
                    $balance = UserAccounts::where('user_id', $wallet->user_id)->first(); 
                   
                        if($wallet->bet_type = $winingodd){
                        $total = 0;
                        $total = (( $checkwin->odd * $wallet->amount)*95/100)+$balance->amount; 
                       
                        //get specific user who won the bet
                        $users = VirtualWallet::where('competition_id', $checkwin->id)->where('bet_type',$winingodd)->get();
                        dd($users);
                        foreach($users as $user){
                           
                        UserAccounts::where('user_id', $user->user_id)->update(['amount' => $total]);
                        //get info from comeptition table
                        $userCompetitions = Competition::where('id',$user->competition_id)->get();
                        
                       
                        if(FinishedBets::where('id', $checkwin->id)->doesntExist()){
                           foreach($userCompetitions as $userCompetition){
                           
                            $finishedbets = new FinishedBets();
                            $finishedbets->id = $userCompetition->id;
                            $finishedbets->home_team = $userCompetition->home_team;
                            $finishedbets->away_team = $userCompetition->away_team;
                            $finishedbets->odd = $userCompetition->odd;
                            $finishedbets->start_time = $userCompetition->start_time;
                            $finishedbets->end_time = $userCompetition->end_time;
                            $finishedbets->save();
                            
                           }

                        }
                       
                           $finishedbets_wallet = new FinishedBets_Wallet();
                           $finishedbets_wallet->competition_id = $user->competition_id;
                           $finishedbets_wallet->user_id = $user->user_id;
                           $finishedbets_wallet->bet_type = $user->bet_type;
                           $finishedbets_wallet->status = 'win';
                           $finishedbets_wallet->amount = $total;
                           $finishedbets_wallet->save();
                        }
                        
                        if($wallet->bet_type != $winingodd){
                             //get specific users who lost
                        $users = VirtualWallet::where('competition_id', $checkwin->id)->where('bet_type','!=',$winingodd)->get();
                        foreach($users as $user){
                        
                        //get info from comeptition table
                        $userCompetitions = Competition::where('id',$user->competition_id)->get();
                       
                        if(FinishedBets::where('id',$checkwin->id)->doesntExist()){
                            foreach($userCompetitions as $userCompetition){
                            $finishedbets = new FinishedBets();
                            $finishedbets->id = $userCompetition->id;
                            $finishedbets->home_team = $userCompetition->home_team;
                            $finishedbets->away_team = $userCompetition->away_team;
                            $finishedbets->odd = $userCompetition->odd;
                            $finishedbets->start_time = $userCompetition->start_time;
                            $finishedbets->end_time = $userCompetition->end_time;
                            $finishedbets->save();
                            }
                        }
                       
                           $finishedbets_wallet = new FinishedBets_Wallet();
                           $finishedbets_wallet->competition_id = $user->competition_id;
                           $finishedbets_wallet->user_id = $user->user_id;
                           $finishedbets_wallet->bet_type = $user->bet_type;
                           $finishedbets_wallet->status = 'lost';
                           $finishedbets_wallet->amount = 0;
                           $finishedbets_wallet->save();
                         }
                        }
                        
                        // VirtualWallet::where('competition_id', $checkwin->id)->delete();
                        // Competition::where('id',$checkwin->id)->delete();
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
