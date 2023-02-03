<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert(
      [
        'name' => 'admin', 'role' => 'admin', 'contact_person' => 'yes', 'email' => 'admin@admin.com', 'password' => bcrypt('12345678'), 'phone_number' => '081225436306'
      ]
    );
    DB::table('users')->insert(
      [
        'name' => 'Marketing', 'role' => 'marketing', 'contact_person' => 'yes', 'email' => 'marketing@marketing.com', 'password' => bcrypt('12345678'), 'phone_number' => '085608014222'
      ]
    );
    //vendors
    DB::table('vendors')->insert(
      [
        'name_vendor' => 'Honda'
      ]
    );
    DB::table('vendors')->insert(
      [
        'name_vendor' => 'Toyota'
      ]
    );
    DB::table('vendors')->insert(
      [
        'name_vendor' => 'Daihatsu'
      ]
    );
    //status
    DB::table('statuses')->insert(
      [
        'status' => 'available'
      ],
    );
    DB::table('statuses')->insert(
      [
        'status' => 'non-available'
      ],
    );
    //no wa
    DB::table('whatsapps')->insert(
      [
        'nama_cabang' => 'cabang 1',
        'wa' => '09219828182'
      ],
    );
    DB::table('whatsapps')->insert(
      [
        'nama_cabang' => 'cabang 2',
        'wa' => '21092121219'
      ],
    );
    //bank
    DB::table('banks')->insert(
      [
        'name_bank' => 'BCA', 'no_rek' => '09876422222', 'an' => 'Fadil'
      ]
    );
  }
}
