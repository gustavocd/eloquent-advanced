<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = ['PHP', 'HTML', 'JAVASCRIPT', 'CSS'];
        
        foreach ($categories as $cat) {
        	Category::create([
        		'name' => $cat
        	]);
        }
    }
}
