<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'role_id'   => '1',
      'name'      => 'Mr. Admin',
      'username'  => 'admin',
      'email'     => 'dungphamdev@gmail.com',
      'nid'     => '194541975',
      'contact'     => '0387928697',
      'created_at' => '2020-09-18 13:20:14',
      'updated_at' => '2020-09-18 13:20:14',
      'password'  => bcrypt('11223344'),
    ]);

    DB::table('users')->insert(
      [
        'role_id'   => '2',
        'name'      => 'Mr. Landlord',
        'username'  => 'landlord',
        'email'     => 'landlord@gmail.com',
        'nid'     => '419751945',
        'contact'     => '0419751945',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14',
        'password'  => bcrypt('11223344'),
      ],
    );

    DB::table('users')->insert(
      [
        'role_id'   => '2',
        'name'      => 'Mr. Landlord 2',
        'username'  => 'landlord_2',
        'email'     => 'landlord_2@gmail.com',
        'nid'     => '101622715011',
        'contact'     => '0197060507611',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14',
        'password'  => bcrypt('11223344'),
      ],
    );

    DB::table('users')->insert([
      'role_id'   => '3',
      'name'      => 'Mr. Renter',
      'username'  => 'renter',
      'email'     => 'renter@gmail.com',
      'nid'     => '1016227180',
      'contact'     => '01870605075',
      'created_at' => '2020-09-18 13:20:14',
      'updated_at' => '2020-09-18 13:20:14',
      'password'  => bcrypt('11223344'),
    ]);

    DB::table('users')->insert([
      'role_id'   => '3',
      'name'      => 'Mr. Renter',
      'username'  => 'renter2',
      'email'     => 'renter2@gmail.com',
      'nid'     => '101622227180',
      'contact'     => '0187330605075',
      'created_at' => '2020-09-18 13:20:14',
      'updated_at' => '2020-09-18 13:20:14',
      'password'  => bcrypt('11223344'),
    ]);

    DB::table('users')->insert([
      'role_id'   => '3',
      'name'      => 'Mr. Renter',
      'username'  => 'renter3',
      'email'     => 'renter3@gmail.com',
      'nid'     => '1312321313',
      'contact'     => '0187330243243605075',
      'created_at' => '2020-09-18 13:20:14',
      'updated_at' => '2020-09-18 13:20:14',
      'password'  => bcrypt('11223344'),
    ]);

    DB::table('areas')->insert(
      [
        'name'   => 'Hà Nội',
        'user_id'   => '1',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14'
      ]
    );

    DB::table('areas')->insert(
      [
        'name'   => 'TP HCM',
        'user_id'   => '1',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14'
      ]
    );

    DB::table('areas')->insert(
      [
        'name'   => 'Đà Nẵng',
        'user_id'   => '1',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14'
      ]
    );
  }
}
