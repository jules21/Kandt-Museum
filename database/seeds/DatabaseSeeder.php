<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ArtifactCategorySeeder::class);
        $this->call(ManagerSeeder::class);
        $this->call(ArtifactSeedTable::class);
        $this->call(EventSeederTable::class);
        
    }
}
