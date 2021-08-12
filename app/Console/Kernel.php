<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use App\Models\CollectionScheduleBatch;
use App\Models\CollectionScheduleTemp;
use App\Models\PubCleansingScheduleTemp;
use App\Models\PubCleansingScheduleFinal;
use App\Models\PubCleansingScheduleBatch;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
      $schedule->command('collection:generate')->everyMinute()->when(function () {
          $batch = CollectionScheduleBatch::where('flag',0)->get();
          if ($batch->count()>0){
            return true;
          }
          else {
            return false;
          }
      });

      $schedule->command('collection:generate_final')->everyMinute()->when(function () {
          $temp = CollectionScheduleTemp::where('final_status',0)->get();
          if ($temp->count()>0){
            return true;
          }
          else {
            return false;
          }
      });

      $schedule->command('cleansing:generate')->everyMinute()->when(function () {
          $temp = PubCleansingScheduleBatch::where('flag',0)->get();
          if ($temp->count()>0){
            return true;
          }
          else {
            return false;
          }
      });

      $schedule->command('cleansing:generate_final')->everyMinute()->when(function () {
          $temp = PubCleansingScheduleTemp::where('final_status',0)->get();
          if ($temp->count()>0){
            return true;
          }
          else {
            return false;
          }
      });

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
