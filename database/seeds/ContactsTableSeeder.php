<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('contacts')->insert([
            'name'  =>  'Lupita Smith',
            'email' =>  'lupita@gmail.com'
        ]);
        */
        factory(\App\Contact::class, 20)->create();
    }
}
