<?php

use App\VisitSchedule;
use Illuminate\Database\Seeder;

class workSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visits =
        [
            ['id' => '1', 'days_of_week' =>'Sunday' , 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
            ['id' => '2', 'days_of_week' =>'Monday' , 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
            ['id' => '3', 'days_of_week' =>'Tuesday', 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
            ['id' => '4', 'days_of_week' =>'Wednesday' , 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
          
            ['id' => '5', 'days_of_week' =>'Thursday'  , 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
          
            ['id' => '6', 'days_of_week' =>'Friday' , 'start_time' =>'8:00', 'end_time' =>'17:00', 'description' =>'work'],
          
            ['id' => '7', 'days_of_week' =>'Saturday' , 'start_time' =>'10:00', 'end_time' =>'15:00', 'description' =>'work'],
          
    ];
    foreach($visits as $visit)
    {
        VisitSchedule::create($visit);
    }
    }
}
