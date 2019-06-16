<?php

use App\ArtifactCategory;
use Illuminate\Database\Seeder;

class ArtifactCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                 $categories =
            [
                ['id' => '1', 'name' =>'Historical & Cultural'
                , 'description' =>'Historic and cultural items such as a historic relic or work of art.'],
                ['id' => '2', 'name' =>'Media'
            , 'description' =>'Media such as film, photographs or digital files that are valued for their creative or information content.'],
                ['id' => '3', 'name' =>'Knowledge'
            , 'description' =>'Information created by people such as strategies, plans, designs, reports, models, research, theories and ideas.'],
                ['id' => '4', 'name' =>'Data'
            , 'description' =>'Data that documents human efforts such as source code that was written by a programmer.'],
              
        ];
        foreach($categories as $category)
        {
            ArtifactCategory::create($category);
        }
    }
}
