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

        \DB::table('admins')->insert(
            [
                'name' => 'Thanh Tung',
                'email' => 'thanhtung@gmail.com',
                'password' => bcrypt('mmmmmmmm')
            ] );
//         $this->call(areaTableSeeder::class);
//        $this->call(typeCooksTableSeeder::class);
//       $this->call(typeProductsTableSeeder::class);

    }
}
