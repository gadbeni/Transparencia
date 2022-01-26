<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicationsTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publications_types')->delete();
        
        \DB::table('publications_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'default',
                'slug' => 'default',
                'icon' => 'journal-bookmark',
                'image' => NULL,
                'description' => 'NN',
                'created_at' => '2021-10-06 12:49:29',
                'updated_at' => '2021-10-11 21:20:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}