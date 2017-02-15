<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  


    public function run()
    {
        Eloquent::unguard();
    
        $this->call('ProductitemsTableSeeder');
        $this->command->info('Productitems table seeded.');

    }
}
