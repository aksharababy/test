<?php

use Illuminate\Database\Seeder;
use App\Packing;

class PackingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Packing::create(array(
            'name' => 'pack1',
            'shortname' => 'pk1',
            'is_deleted' => '0'
        ));
    
        Packing::create(array(
            'name' => 'pack2',
            'shortname' => 'pk2',
            'is_deleted' => '0'
        ));
        Packing::create(array(
            'name' => 'pack3',
            'shortname' => 'pk3',
            'is_deleted' => '0'
        ));
       Packing::create(array(
            'name' => 'pack4',
            'shortname' => 'pk4',
            'is_deleted' => '0'
        ));
    }
}
