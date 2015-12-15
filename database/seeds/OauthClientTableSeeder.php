<?php

use Illuminate\Database\Seeder;

class OauthClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->truncate();
        DB::table('oauth_clients')->insert([
            'id' => '1',
            'secret' => '123',
            'name' => 'dua',
            'created_at' => '2015-06-26 23:20:00',
            'updated_at' => '2015-06-26 23:20:00',
        ]);
    }
}
