<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//Carbon Timestamp için bir paket.

class HerrscherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herrscher')->insert([
            'name' => 'Osman Gazi',
            'geburtsdatum' => Carbon::create('1258-05-26'),
            'sterbedatum' => Carbon::create('1326-04-06'),
            //'sultanatzeitstartdatum' => Carbon::create('1299-06-12'),
            //'sultanatzeitstopdatum' => Carbon::create('1326-04-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Orhan Gazi',
            'geburtsdatum' => Carbon::create('1281-07-22'),
            'sterbedatum' => Carbon::create('1360-08-15'),
            //'sultanatzeitstartdatum' => Carbon::create('1326-04-06'),
            //'sultanatzeitstopdatum' => Carbon::create('1360-08-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Murat I',
            'geburtsdatum' => Carbon::create('1326-10-30'),
            'sterbedatum' => Carbon::create('1389-07-28'),
            //'sultanatzeitstartdatum' => Carbon::create('1360-08-15'),
            //'sultanatzeitstopdatum' => Carbon::create('1389-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Yildirim Bayezid I',
            'geburtsdatum' => Carbon::create('1360-02-16'),
            'sterbedatum' => Carbon::create('1403-03-08'),
            //'sultanatzeitstartdatum' => Carbon::create('1389-07-28'),
            //'sultanatzeitstopdatum' => Carbon::create('1403-03-08'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Celebi Mehmet I',
            'geburtsdatum' => Carbon::create('1389-07-22'),
            'sterbedatum' => Carbon::create('1421-05-26'),
            //'sultanatzeitstartdatum' => Carbon::create('1413-10-14'),
            //'sultanatzeitstopdatum' => Carbon::create('1421-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Murad II',
            'geburtsdatum' => Carbon::create('1402-11-12'),
            'sterbedatum' => Carbon::create('1451-02-03'),
            //'sultanatzeitstartdatum' => Carbon::create('1421-05-26'),
            // 'sultanatzeitstopdatum' => Carbon::create('1451-02-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Fatih Sultan Mehmet I',
            'geburtsdatum' => Carbon::create('1432-03-29'),
            'sterbedatum' => Carbon::create('1481-05-03'),
            //'sultanatzeitstartdatum' => Carbon::create('1451-02-03'),
            // 'sultanatzeitstopdatum' => Carbon::create('1481-05-03'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Bayezid II',
            'geburtsdatum' => Carbon::create('1447-12-03'),
            'sterbedatum' => Carbon::create('1512-05-26'),
            // 'sultanatzeitstartdatum' => Carbon::create('1481-05-03'),
            // 'sultanatzeitstopdatum' => Carbon::create('1512-05-26'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Yavuz Sultan Selim I',
            'geburtsdatum' => Carbon::create('1470-10-10'),
            'sterbedatum' => Carbon::create('1520-09-22'),
            //'sultanatzeitstartdatum' => Carbon::create('1512-05-26'),
            //'sultanatzeitstopdatum' => Carbon::create('1520-09-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Suleiman I ',
            'geburtsdatum' => Carbon::create('1495-04-27'),
            'sterbedatum' => Carbon::create('1566-09-07'),
            //'sultanatzeitstartdatum' => Carbon::create('1520-09-22'),
            //'sultanatzeitstopdatum' => Carbon::create('1566-09-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Selim II',
            'geburtsdatum' => Carbon::create('1524-05-28'),
            'sterbedatum' => Carbon::create('1574-12-15'),
            //'sultanatzeitstartdatum' => Carbon::create('1566-09-07'),
            //'sultanatzeitstopdatum' => Carbon::create('1574-12-15'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Murat III',
            'geburtsdatum' => Carbon::create('1546-07-04'),
            'sterbedatum' => Carbon::create('1595-01-16'),
            //'sultanatzeitstartdatum' => Carbon::create('1574-12-15'),
            //'sultanatzeitstopdatum' => Carbon::create('1595-01-16'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mehmet III',
            'geburtsdatum' => Carbon::create('1566-05-25'),
            'sterbedatum' => Carbon::create('1603-12-21'),
            //'sultanatzeitstartdatum' => Carbon::create('1595-01-16'),
            //'sultanatzeitstopdatum' => Carbon::create('1603-12-21'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Ahmet I',
            'geburtsdatum' => Carbon::create('1590-04-18'),
            'sterbedatum' => Carbon::create('1617-11-22'),
            //'sultanatzeitstartdatum' => Carbon::create('1603-12-21'),
            //'sultanatzeitstopdatum' => Carbon::create('1617-11-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Osman II',
            'geburtsdatum' => Carbon::create('1604-11-03'),
            'sterbedatum' => Carbon::create('1622-05-10'),
            //'sultanatzeitstartdatum' => Carbon::create('1617-11-22'),
            //'sultanatzeitstopdatum' => Carbon::create('1622-05-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Murat IV',
            'geburtsdatum' => Carbon::create('1612-07-27'),
            'sterbedatum' => Carbon::create('1640-02-09'),
            //'sultanatzeitstartdatum' => Carbon::create('1622-05-10'),
            //'sultanatzeitstopdatum' => Carbon::create('1640-02-09'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Ibrahim',
            'geburtsdatum' => Carbon::create('1616-11-05'),
            'sterbedatum' => Carbon::create('1648-08-18'),
            //'sultanatzeitstartdatum' => Carbon::create('1640-02-09'),
            //'sultanatzeitstopdatum' => Carbon::create('1648-08-18'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mehmet IV',
            'geburtsdatum' => Carbon::create('1642-01-02'),
            'sterbedatum' => Carbon::create('1687-01-06'),
            //'sultanatzeitstartdatum' => Carbon::create('1648-08-18'),
            //'sultanatzeitstopdatum' => Carbon::create('1687-01-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Suleiman II',
            'geburtsdatum' => Carbon::create('1642-04-15'),
            'sterbedatum' => Carbon::create('1691-06-22'),
            //'sultanatzeitstartdatum' => Carbon::create('1687-01-06'),
            //'sultanatzeitstopdatum' => Carbon::create('1691-06-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Ahmet II',
            'geburtsdatum' => Carbon::create('1643-02-25'),
            'sterbedatum' => Carbon::create('1695-02-06'),
            //'sultanatzeitstartdatum' => Carbon::create('1691-06-22'),
            //'sultanatzeitstopdatum' => Carbon::create('1695-02-06'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mustafa II',
            'geburtsdatum' => Carbon::create('1664-06-05'),
            'sterbedatum' => Carbon::create('1704-01-29'),
            //'sultanatzeitstartdatum' => Carbon::create('1695-02-06'),
            //'sultanatzeitstopdatum' => Carbon::create('1704-01-29'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Ahmet III',
            'geburtsdatum' => Carbon::create('1673-12-31'),
            'sterbedatum' => Carbon::create('1736-07-01'),
            //'sultanatzeitstartdatum' => Carbon::create('1704-01-29'),
            //'sultanatzeitstopdatum' => Carbon::create('1736-07-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mahmut I',
            'geburtsdatum' => Carbon::create('1696-08-02'),
            'sterbedatum' => Carbon::create('1754-12-13'),
            //'sultanatzeitstartdatum' => Carbon::create('1736-07-01'),
            //'sultanatzeitstopdatum' => Carbon::create('1754-12-13'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Osman III',
            'geburtsdatum' => Carbon::create('1699-02-01'),
            'sterbedatum' => Carbon::create('1774-10-30'),
            //'sultanatzeitstartdatum' => Carbon::create('1754-12-13'),
            //'sultanatzeitstopdatum' => Carbon::create('1774-10-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Abdülhamit I',
            'geburtsdatum' => Carbon::create('1725-03-20'),
            'sterbedatum' => Carbon::create('1789-04-07'),
            //'sultanatzeitstartdatum' => Carbon::create('1774-10-30'),
            //'sultanatzeitstopdatum' => Carbon::create('1789-04-07'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Selim III',
            'geburtsdatum' => Carbon::create('1761-12-24'),
            'sterbedatum' => Carbon::create('1808-07-28'),
            //'sultanatzeitstartdatum' => Carbon::create('1789-04-07'),
            //'sultanatzeitstopdatum' => Carbon::create('1808-07-28'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mahmud II',
            'geburtsdatum' => Carbon::create('1785-06-20'),
            'sterbedatum' => Carbon::create('1839-06-30'),
            //'sultanatzeitstartdatum' => Carbon::create('1808-07-28'),
            //'sultanatzeitstopdatum' => Carbon::create('1839-06-30'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Abdulmecit',
            'geburtsdatum' => Carbon::create('1823-04-25'),
            'sterbedatum' => Carbon::create('1861-06-25'),
            //'sultanatzeitstartdatum' => Carbon::create('1839-06-30'),
            //'sultanatzeitstopdatum' => Carbon::create('1861-06-25'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Abdülhamit II',
            'geburtsdatum' => Carbon::create('1842-09-21'),
            'sterbedatum' => Carbon::create('1918-02-10'),
            //'sultanatzeitstartdatum' => Carbon::create('1861-06-25'),
            //'sultanatzeitstopdatum' => Carbon::create('1909-02-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mehmet Resat',
            'geburtsdatum' => Carbon::create('1844-11-02'),
            'sterbedatum' => Carbon::create('1914-05-22'),
            //'sultanatzeitstartdatum' => Carbon::create('1909-02-10'),
            //'sultanatzeitstopdatum' => Carbon::create('1914-05-22'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('herrscher')->insert([
            'name' => 'Sultan Mehmet Vahdettin',
            'geburtsdatum' => Carbon::create('1861-02-02'),
            'sterbedatum' => Carbon::create('1926-05-15'),
            //'sultanatzeitstartdatum' => Carbon::create('1914-05-22'),
            //'sultanatzeitstopdatum' => Carbon::create('1922-11-01'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
