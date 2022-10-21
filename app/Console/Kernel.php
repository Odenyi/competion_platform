<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\Competition;
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
                VirtualWallet::where('competition_id', $refund->id)->delete();
                Competition::where('odd',1)->delete();
                }
                }
                }

                

            }
        })->everyMinute();
        $schedule->call(function(){
            
        })->everyFiveMinutes();
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
