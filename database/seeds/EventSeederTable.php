<?php

use App\Exhibition;
use Illuminate\Database\Seeder;

class EventSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $exhibitions =
            [

            [
                'id' => '1',
                'photo' => 'IMG_6255.JPG',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
            [
                'id' => '2',
                'photo' => 'IMG_6254.JPG',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
            [
                'id' => '3',
                'photo' => 'DSC_0042.JPG',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
            [
                'id' => '4',
                'photo' => 'IMG-20180904-WA0015.jpg',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
            [
                'id' => '5',
                'photo' => 'IMG_6256.JPG',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
            [
                'id' => '6',
                'photo' => 'DSC_0047.JPG',
                'title' => 'Lorem ipsum dolor sit amet.',
                'date' => '2000-01-01',
                'time' => '12:00',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestiae, consequuntur. Non corporis pariatur nihil, blanditiis sunt cumque obcaecati, cupiditate?',

            ],
        ];
        foreach ($exhibitions as $exhibition) {
            Exhibition::create($exhibition);
        }
    }
}
