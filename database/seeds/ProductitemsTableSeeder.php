<?php

use Illuminate\Database\Seeder;

use App\Productitem;

class ProductitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productitem::create(array(
            'Category' => '1',
            'ProductCode' => 'pdt00',
            'ProductName' => 'NirapaRice',
            'ShortName' => 'Np Rice',
            'is_deleted' => '0'
        ));
         Productitem::create(array(
            'Category' => '1',
            'ProductCode' => 'pdt01',
            'ProductName' => 'DoubleHorseRice',
            'ShortName' => 'Dh Rice',
            'is_deleted' => '0'
        ));

 	Productitem::create(array(
            'Category' => '2',
            'ProductCode' => 'pdt10',
            'ProductName' => 'Coconut Oil',
            'ShortName' => 'Ct Oil',
            'is_deleted' => '0'
        ));
 	Productitem::create(array(
            'Category' => '2',
            'ProductCode' => 'pdt11',
            'ProductName' => 'Sunflower Oil',
            'ShortName' => 'Sf Oil',
            'is_deleted' => '0'
        ));
 	Productitem::create(array(
            'Category' => '3',
            'ProductCode' => 'pdt20',
            'ProductName' => 'Plum Cake',
            'ShortName' => 'Plm Cake',
            'is_deleted' => '0'
        ));
 	Productitem::create(array(
            'Category' => '3',
            'ProductCode' => 'pdt21',
            'ProductName' => 'Marbile Cake',
            'ShortName' => 'Mbl Cake',
            'is_deleted' => '0'
        ));


    }
}
