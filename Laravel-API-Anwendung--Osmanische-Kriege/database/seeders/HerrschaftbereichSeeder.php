<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//Carbon Timestamp için bir paket.

class HerrschaftbereichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 1,
            'startdatum' => Carbon::create('1299-06-12'),
            'endedatum' => Carbon::create('1326-04-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 2,
            'startdatum' => Carbon::create('1326-04-06'),
            'endedatum' => Carbon::create('1360-08-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 2,
            'startdatum' => Carbon::create('1326-04-06'),
            'endedatum' => Carbon::create('1360-08-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 3,
            'startdatum' => Carbon::create('1360-08-15'),
            'endedatum' => Carbon::create('1389-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 3,
            'startdatum' => Carbon::create('1360-08-15'),
            'endedatum' => Carbon::create('1389-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 3,
            'startdatum' => Carbon::create('1360-08-15'),
            'endedatum' => Carbon::create('1389-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 4,
            'startdatum' => Carbon::create('1389-07-28'),
            'endedatum' => Carbon::create('1403-03-08'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 4,
            'startdatum' => Carbon::create('1389-07-28'),
            'endedatum' => Carbon::create('1403-03-08'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 4,
            'startdatum' => Carbon::create('1389-07-28'),
            'endedatum' => Carbon::create('1403-03-08'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 4,
            'herrscherID' => 4,
            'startdatum' => Carbon::create('1389-07-28'),
            'endedatum' => Carbon::create('1403-03-08'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 5,
            'startdatum' => Carbon::create('1413-10-14'),
            'endedatum' => Carbon::create('1421-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 5,
            'startdatum' => Carbon::create('1413-10-14'),
            'endedatum' => Carbon::create('1421-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 5,
            'startdatum' => Carbon::create('1413-10-14'),
            'endedatum' => Carbon::create('1421-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 5,
            'herrscherID' => 5,
            'startdatum' => Carbon::create('1413-10-14'),
            'endedatum' => Carbon::create('1421-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 6,
            'startdatum' => Carbon::create('1421-05-26'),
            'endedatum' => Carbon::create('1451-02-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 6,
            'startdatum' => Carbon::create('1421-05-26'),
            'endedatum' => Carbon::create('1451-02-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 6,
            'startdatum' => Carbon::create('1421-05-26'),
            'endedatum' => Carbon::create('1451-02-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 6,
            'startdatum' => Carbon::create('1421-05-26'),
            'endedatum' => Carbon::create('1451-02-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 7,
            'startdatum' => Carbon::create('1451-02-03'),
            'endedatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 7,
            'startdatum' => Carbon::create('1451-02-03'),
            'endedatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 7,
            'startdatum' => Carbon::create('1451-02-03'),
            'endedatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 7,
            'startdatum' => Carbon::create('1451-02-03'),
            'endedatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 7,
            'startdatum' => Carbon::create('1451-02-03'),
            'endedatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 8,
            'startdatum' => Carbon::create('1481-05-03'),
            'endedatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 9,
            'startdatum' => Carbon::create('1512-05-26'),
            'endedatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 10,
            'startdatum' => Carbon::create('1520-09-22'),
            'endedatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' =>  11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 11,
            'startdatum' => Carbon::create('1566-09-07'),
            'endedatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 12,
            'herrscherID' => 12,
            'startdatum' => Carbon::create('1574-12-15'),
            'endedatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 12,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 13,
            'startdatum' => Carbon::create('1595-01-16'),
            'endedatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 12,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 14,
            'startdatum' => Carbon::create('1603-12-21'),
            'endedatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 14,
            'herrscherID' => 15,
            'startdatum' => Carbon::create('1617-11-22'),
            'endedatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 14,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 16,
            'startdatum' => Carbon::create('1622-05-10'),
            'endedatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 14,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 17,
            'startdatum' => Carbon::create('1640-02-09'),
            'endedatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 14,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 18,
            'startdatum' => Carbon::create('1648-08-18'),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 14,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1687-01-06'),
            'endedatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 19,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 20,
            'startdatum' => Carbon::create('1691-06-22'),
            'endedatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 10,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 21,
            'startdatum' => Carbon::create('1695-02-06'),
            'endedatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 22,
            'startdatum' => Carbon::create('1704-01-29'),
            'endedatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 23,
            'startdatum' => Carbon::create('1736-07-01'),
            'endedatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 11,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 24,
            'startdatum' => Carbon::create('1754-12-13'),
            'endedatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 13,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 25,
            'startdatum' => Carbon::create('1774-10-30'),
            'endedatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 23,
            'herrscherID' => 26,
            'startdatum' => Carbon::create('1789-04-07'),
            'endedatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1839-06-30'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 23,
            'herrscherID' => 27,
            'startdatum' => Carbon::create('1808-07-28'),
            'endedatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 29,
            'startdatum' => Carbon::create(''),
            'endedatum' => Carbon::create(''),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 9,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 23,
            'herrscherID' => 29,
            'startdatum' => Carbon::create('1909-02-10'),
            'endedatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 18,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 23,
            'herrscherID' => 30,
            'startdatum' => Carbon::create('1861-06-25'),
            'endedatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 1,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 2,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 3,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 6,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 7,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 8,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 15,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 16,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 17,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 19,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 20,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 23,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrschaftbereich')->insert([
            'regionID' => 22,
            'herrscherID' => 31,
            'startdatum' => Carbon::create('1914-05-22'),
            'endedatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
