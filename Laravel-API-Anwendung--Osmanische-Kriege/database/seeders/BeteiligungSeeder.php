<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//Carbon Timestamp için bir paket.

class BeteiligungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beteiligung')->insert([
            'herrscherID' => 1,
            'kriegID' => 1,
            'startdatum' => Carbon::create('1302-06-27'),
            'stopdatum' => Carbon::create('1302-07-18'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 2,
            'kriegID' => 2,
            'startdatum' => Carbon::create('1326-03-07'),
            'stopdatum' => Carbon::create('1326-04-06'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 3,
            'kriegID' => 3,
            'startdatum' => Carbon::create('1389-06-15'),
            'stopdatum' => Carbon::create('1389-06-28'),
            'beteiligungsgrund' => 'Um die Unterstützung des Fürstentums Serbien zu gewinnen.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 4,
            'kriegID' => 4,
            'startdatum' => Carbon::create('1402-06-20'),
            'stopdatum' => Carbon::create('1402-06-28'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 5,
            'kriegID' => 5,
            'startdatum' => Carbon::create('1416-04-02'),
            'stopdatum' => Carbon::create('1416-05-29'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 6,
            'kriegID' => 6,
            'startdatum' => Carbon::create('1444-11-10'),
            'stopdatum' => Carbon::create('1444-11-10'),
            'beteiligungsgrund' => 'Um die verlorenen Städte von den Osmanen zurückzuerobern.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 7,
            'kriegID' => 7,
            'startdatum' => Carbon::create('1453-04-06'),
            'stopdatum' => Carbon::create('1453-05-29'),
            'beteiligungsgrund' => 'Stärkung der Handelsaktivitäten in der Ägäis und im Schwarzen Meer.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 8,
            'kriegID' => 8,
            'startdatum' => Carbon::create('1493-09-09'),
            'stopdatum' => Carbon::create('1493-09-09'),
            'beteiligungsgrund' => 'Um die verlorenen Städte von den Osmanen zurückzuerobern.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 9,
            'kriegID' => 9,
            'startdatum' => Carbon::create('1517-01-03'),
            'stopdatum' => Carbon::create('1517-01-22'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 10,
            'kriegID' => 10,
            'startdatum' => Carbon::create('1526-03-10'),
            'stopdatum' => Carbon::create('1526-08-29'),
            'beteiligungsgrund' => 'Um die verlorenen Städte von den Osmanen zurückzuerobern.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 11,
            'kriegID' => 11,
            'startdatum' => Carbon::create('1566-03-26'),
            'stopdatum' => Carbon::create('1566-04-15'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 12,
            'kriegID' => 12,
            'startdatum' => Carbon::create('1578-08-09'),
            'stopdatum' => Carbon::create('1590-03-21'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 13,
            'kriegID' => 13,
            'startdatum' => Carbon::create('1596-10-24'),
            'stopdatum' => Carbon::create('1596-10-26'),
            'beteiligungsgrund' => 'Gewinnung der Unterstützung der Erzherzogin von Österreich.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 14,
            'kriegID' => 14,
            'startdatum' => Carbon::create('1603-09-09'),
            'stopdatum' => Carbon::create('1618-09-26'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 15,
            'kriegID' => 15,
            'startdatum' => Carbon::create('1620-09-17'),
            'stopdatum' => Carbon::create('1620-10-07'),
            'beteiligungsgrund' => 'Um die verlorenen Städte von den Osmanen zurückzuerobern.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 16,
            'kriegID' => 16,
            'startdatum' => Carbon::create('1623-03-05'),
            'stopdatum' => Carbon::create('1639-05-17'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 17,
            'kriegID' => 17,
            'startdatum' => Carbon::create('1645-02-09'),
            'stopdatum' => Carbon::create('1645-03-10'),
            'beteiligungsgrund' => 'Um seine Macht im Mittelmeerraum zu erhalten und die osmanische Herrschaft zu beenden.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 18,
            'kriegID' => 18,
            'startdatum' => Carbon::create('1663-08-15'),
            'stopdatum' => Carbon::create('1664-08-10'),
            'beteiligungsgrund' => 'Der osmanischen Herrschaft auf dem Balkan ein Ende setzen und die verlorenen alten Städte zurückerobern.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 19,
            'kriegID' => 19,
            'startdatum' => Carbon::create('1691-03-28'),
            'stopdatum' => Carbon::create('1691-06-01'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 20,
            'kriegID' => 20,
            'startdatum' => Carbon::create('1694-09-21'),
            'stopdatum' => Carbon::create('1695-02-09'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 21,
            'kriegID' => 21,
            'startdatum' => Carbon::create('1697-09-11'),
            'stopdatum' => Carbon::create('1699-01-26'),
            'beteiligungsgrund' => 'Kommerzielle und militärische Stärkung im Schwarzen Meer und auf dem Balkan.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 22,
            'kriegID' => 22,
            'startdatum' => Carbon::create('1711-06-10'),
            'stopdatum' => Carbon::create('1711-06-22'),
            'beteiligungsgrund' => 'Gewinnung politischer und wirtschaftlicher Macht dank der Unterstützung des russischen Zarentums.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 23,
            'kriegID' => 23,
            'startdatum' => Carbon::create('1736-05-20'),
            'stopdatum' => Carbon::create('1739-09-18'),
            'beteiligungsgrund' => 'Kommerzielle und militärische Machterlangung durch die Beendigung der osmanischen Herrschaft auf dem Balkan.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 24,
            'kriegID' => 24,
            'startdatum' => Carbon::create('1757-09-28'),
            'stopdatum' => Carbon::create('1757-11-03'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 25,
            'kriegID' => 25,
            'startdatum' => Carbon::create('1774-06-12'),
            'stopdatum' => Carbon::create('1774-06-21'),
            'beteiligungsgrund' => 'Politisch mächtig in der Adria und im Südwestbalkan zu sein, indem man den russischen Zaristen unterstützt.',
            'ist_beginner' => 'Ja',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 26,
            'kriegID' => 26,
            'startdatum' => Carbon::create('1798-05-19'),
            'stopdatum' => Carbon::create('1800-01-24'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 27,
            'kriegID' => 27,
            'startdatum' => Carbon::create('1821-03-17'),
            'stopdatum' => Carbon::create('1832-05-07'),
            'beteiligungsgrund' => 'Um politische und kommerzielle Macht zu erlangen, indem die osmanische Macht in der Ägäis und im Mittelmeerraum reduziert wird.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 28,
            'kriegID' => 28,
            'startdatum' => Carbon::create('1853-10-04'),
            'stopdatum' => Carbon::create('1856-03-30'),
            'beteiligungsgrund' => 'Um zu verhindern, dass das russische Zarenreich im Mittelmeer an die Macht kommt, indem es die osmanische Armee besiegt und den Bosporus und die Dardanellen erobert.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 29,
            'kriegID' => 29,
            'startdatum' => Carbon::create('1877-04-24'),
            'stopdatum' => Carbon::create('1878-06-13'),
            'beteiligungsgrund' => 'Erweiterung des Territoriums auf dem Balkan durch Gewinnung der politischen Unterstützung des russischen Zarentums.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 30,
            'kriegID' => 30,
            'startdatum' => Carbon::create('1911-09-29'),
            'stopdatum' => Carbon::create('1912-10-18'),
            'beteiligungsgrund' => 'Es gibt kein Grund.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Nein',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beteiligung')->insert([
            'herrscherID' => 31,
            'kriegID' => 31,
            'startdatum' => Carbon::create('1915-02-19'),
            'stopdatum' => Carbon::create('1915-03-18'),
            'beteiligungsgrund' => 'Um sein verbündetes russisches Zarenreich zu unterstützen, indem es die Meerengen Bosporus und Dardanellen erobert.',
            'ist_beginner' => 'Nein',
            'ist_nebenbeteiliger' => 'Ja',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
