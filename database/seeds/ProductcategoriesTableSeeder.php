<?php

use Illuminate\Database\Seeder;

use App\ProductCategory;

class ProductcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        ProductCategory::create(array(
            'CategoryCode' => '001',
            'CategoryName' => 'Rice',
            'Shortname' => 'Rc',
            'ProductDescription' => 'Rice is a food grain that contains a number of vitamins and minerals that are extremely healthy for us.',
            'is_deleted' => '0'
        ));

         ProductCategory::create(array(
            'CategoryCode' => '002',
            'CategoryName' => 'Oil',
            'Shortname' => 'Ol',
            'ProductDescription' => 'An oil is any neutral, nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic.',
            'is_deleted' => '0'
        ));

         ProductCategory::create(array(
            'CategoryCode' => '003',
            'CategoryName' => 'Cakes',
            'Shortname' => 'Cks',
            'ProductDescription' => 'Cake is a form of sweet dessert that is typically baked.',
            'is_deleted' => '0'
        ));
    }
}
