<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//Carbon Timestamp için bir paket.

class KriegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('krieg')->insert([
            'name' => 'Koyunhisar-Krieg',
            'regionID' => 1,
            'gegnerischesland' => 'Das Byzantinische Reich',
            'gegnerischerherrscher' => 'Andronikos Palaiologos II',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1302-06-27'),
            'stopdatum' => Carbon::create('1302-07-18'),
            'grund' => 'Der Wunsch des Osmanischen Reiches, Nikea wieder unter türkische Herrschaft zu bringen.',
            'ergebnis' => 'Osmanischer Sieg: Kite Castle wurde erobert. Mit Ausnahme des Nordens von Bursa waren seine drei Seiten von osmanischen Ländern umgeben.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Eroberung von Bursa',
            'regionID' => 2,
            'gegnerischesland' => 'Das Byzantinische Reich',
            'gegnerischerherrscher' => 'Andronikos III',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1326-03-07'),
            'stopdatum' => Carbon::create('1326-04-06'),
            'grund' => 'Um die Verbindung zwischen Bursa und Byzanz zu unterbrechen und die Sicherheit zu gewährleisten.',
            'ergebnis' => 'Osmanischer Sieg: Bursa trat dem osmanischen Fürstentum bei. Die Staatszentrale wurde nach Bursa verlegt.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Erster Kosovo-Krieg',
            'regionID' => 3,
            'gegnerischesland' => 'Fürstentum Serbien',
            'gegnerischerherrscher' => 'Lazar Hrebelyanoviç',
            'nebenbeteiligtesland' => 'Königreich Bosnien',
            'startdatum' => Carbon::create('1389-06-15'),
            'stopdatum' => Carbon::create('1389-06-28'),
            'grund' => 'In dem Wunsch, den Vormarsch des Osmanischen Reiches auf den Balakan zu stoppen.',
            'ergebnis' => 'Osmanischer Sieg: Die Serben akzeptierten erneut die osmanische Vorherrschaft. Den Osmanen wurde der Weg nach Nordserbien geöffnet. Nach diesem osmanischen Sieg gab es keine nennenswerte Macht mehr, um den Osmanen in den Balkanländern südlich der Donau entgegenzutreten. Somit wurde akzeptiert, dass der Balkan unter türkischer Herrschaft stand.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Ankara-Krieg',
            'regionID' => 4,
            'gegnerischesland' => 'Timuridischer Staat',
            'gegnerischerherrscher' => 'Timur',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1402-06-20'),
            'stopdatum' => Carbon::create('1402-06-28'),
            'grund' => 'Timurs Wunsch, vor dem chinesischen Feldzug in Anatolien einzufallen.',
            'ergebnis' => 'Timurs Sieg: Mit diesem Krieg verschwand die anatolische Einheit, das Osmanische Reich trat in die Zeit der Zwischenherrschaft ein.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Venezianische See-Krieg',
            'regionID' => 5,
            'gegnerischesland' => 'Republik Venedig',
            'gegnerischerherrscher' => 'Pietro Loredano',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1416-04-02'),
            'stopdatum' => Carbon::create('1416-05-29'),
            'grund' => 'Die Venezianer greifen die osmanische Marine an.',
            'ergebnis' => 'Venezianischer Sieg: Die osmanische Marine wurde gegen die Venezianer besiegt.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Warna-Krieg',
            'regionID' => 6,
            'gegnerischesland' => 'Königreich Polen',
            'gegnerischerherrscher' => 'János Hunyadi',
            'nebenbeteiligtesland' => 'Königreich Ungarn',
            'startdatum' => Carbon::create('1444-11-10'),
            'stopdatum' => Carbon::create('1444-11-10'),
            'grund' => 'Nichteinhaltung der Regeln des Edirne-Segedin-Vertrags durch Ungarn und Balkanstaaten.',
            'ergebnis' => 'Osmanischer Sieg: Die Dominanz des Osmanischen Reiches auf dem Balkan wurde gefestigt. Versuche, die Türken vom Balkan zu vertreiben, blieben erneut erfolglos.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Eroberung Istanbuls',
            'regionID' => 7,
            'gegnerischesland' => 'Das Byzantinische Reich',
            'gegnerischerherrscher' => 'Konstantinos XI',
            'nebenbeteiligtesland' => 'Republik Venedig',
            'startdatum' => Carbon::create('1453-04-06'),
            'stopdatum' => Carbon::create('1453-05-29'),
            'grund' => 'Das Byzantinische Reich verursachte Schwierigkeiten beim Durchgang der türkischen Armee nach Rumelien und provozierte die europäischen Staaten und die Kreuzfahrer gegen die Osmanen.',
            'ergebnis' => 'Osmanischer Sieg: Istanbul wurde die Hauptstadt des Osmanischen Reiches. Die Handelsrouten, die das Schwarze Meer mit dem Mittelmeer verbinden, kamen unter die Kontrolle des Osmanischen Reiches. Das tausendjährige byzantinische Reich ging zu Ende. Der Feudalismus brach in Europa zusammen und Königreiche wurden stärker, als die Kanone die Mauern zerstörte.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Krbava-Krieg',
            'regionID' => 8,
            'gegnerischesland' => 'Königreich Ungarn',
            'gegnerischerherrscher' => 'Mirko Derenčin',
            'nebenbeteiligtesland' => 'Königreich Kroatien',
            'startdatum' => Carbon::create('1493-09-09'),
            'stopdatum' => Carbon::create('1493-09-09'),
            'grund' => 'Wunsch, die Sicherheit der bosnischen Länder zu gewährleisten.',
            'ergebnis' => 'Osmanischer Sieg: Am Ende der Schlacht verloren die Kroaten zwischen 8.000 und 10.000 Menschen.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Ridaniye-Krieg',
            'regionID' => 9,
            'gegnerischesland' => 'Mamluk Sultanat',
            'gegnerischerherrscher' => 'Tomanbay',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1517-01-03'),
            'stopdatum' => Carbon::create('1517-01-22'),
            'grund' => 'Das Bündnis des Mamluk-Staates mit Shah Ismail und der Wunsch dieser beiden Staaten, die volle Souveränität über die Länder Südostanatoliens zu errichten',
            'ergebnis' => 'Osmanischer Sieg: Der Mamluk-Staat wurde vollständig zerstört. Das Osmanische Reich ist zum neuen Führer der türkisch-islamischen Welt geworden. Syrien, Palästina und Ägypten kamen unter osmanische Herrschaft.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Mohac-Platz-Krieg',
            'regionID' => 10,
            'gegnerischesland' => 'Königreich Ungarn',
            'gegnerischerherrscher' => 'Lajos II',
            'nebenbeteiligtesland' => 'Heiliges Römisches Reich',
            'startdatum' => Carbon::create('1526-03-10'),
            'stopdatum' => Carbon::create('1526-08-29'),
            'grund' => 'Die Sicht des Osmanischen Reiches auf Ungarn, das sich den Habsburgern näherte, als Bedrohung für sich selbst.',
            'ergebnis' => 'Osmanischer Sieg: Das ungarische Königreich wurde in nur 2 Stunden zerstört. Ungarn kam unter osmanische Herrschaft.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Eroberung von Chios',
            'regionID' => 11,
            'gegnerischesland' => 'Genuesischer Staat',
            'gegnerischerherrscher' => 'Yincenzo Giustiniani',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1566-03-26'),
            'stopdatum' => Carbon::create('1566-04-15'),
            'grund' => 'Versäumnis der Verwalter von Chios, ihre Steuerschulden trotz Mahnung zu begleichen.',
            'ergebnis' => 'Osmanischer Sieg: Die Insel Chios schloss sich den osmanischen Ländern an.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '1603-1618 Safawidenkrieg',
            'regionID' => 12,
            'gegnerischesland' => 'Safawiden-Staat',
            'gegnerischerherrscher' => 'Abbas I',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1603-09-09'),
            'stopdatum' => Carbon::create('1618-09-26'),
            'grund' => 'Shah Abbas I. wollte das Land zurückerobern, das er mit dem Ferhat-Pascha-Vertrag verloren hatte.',
            'ergebnis' => 'Sieg der Safawiden: Die Osmanen verloren die meisten Ländereien, die sie dem Iran mit dem Ferhat-Pascha-Vertrag 1590 abgenommen hatten.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Keresztes-Haçova-Krieg',
            'regionID' => 13,
            'gegnerischesland' => 'Erzherzogtum Österreich',
            'gegnerischerherrscher' => 'Maximilian III',
            'nebenbeteiligtesland' => 'Königreich Erdel',
            'startdatum' => Carbon::create('1596-10-24'),
            'stopdatum' => Carbon::create('1596-10-26'),
            'grund' => 'Österreich, das seine Burg Eğri verlor, handelte und griff die Osmanen an.',
            'ergebnis' => 'Osmanischer Sieg: Österreich verlor einen strategischen Punkt.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '1603-1618 Safawidenkrieg',
            'regionID' => 12,
            'gegnerischesland' => 'Safawiden-Staat',
            'gegnerischerherrscher' => 'Abbas I',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1603-09-09'),
            'stopdatum' => Carbon::create('1618-09-26'),
            'grund' => 'Shah Abbas I. wollte das Land zurückerobern, das er mit dem Ferhat-Pascha-Vertrag verloren hatte.',
            'ergebnis' => 'Sieg der Safawiden: Die Osmanen verloren die meisten Ländereien, die sie dem Iran mit dem Ferhat-Pascha-Vertrag 1590 abgenommen hatten.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Cecora-Krieg',
            'regionID' => 14,
            'gegnerischesland' => 'Polen',
            'gegnerischerherrscher' => 'Stanisław Żółkiewski',
            'nebenbeteiligtesland' => 'Litauen',
            'startdatum' => Carbon::create('1620-09-17'),
            'stopdatum' => Carbon::create('1620-10-07'),
            'grund' => 'Die Nichteinhaltung der Regeln des Busza-Vertrags durch das polnisch-litauische Commonwealth.',
            'ergebnis' => 'Osmanischer Sieg: Hotin Castle und seine Umgebung wurden dem Osmanischen Reich übergeben.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '1623-1639 Safawidenkrieg',
            'regionID' => 15,
            'gegnerischesland' => 'Safawiden-Staat',
            'gegnerischerherrscher' => 'Abbas I',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1623-03-05'),
            'stopdatum' => Carbon::create('1639-05-17'),
            'grund' => 'In dem Wunsch, Grenzsicherheit gegenüber dem Iran in Ostanatolien, im Kaukasus und im Irak zu gewährleisten.',
            'ergebnis' => 'Osmanischer Sieg: Die heutige türkisch-iranische Grenze wurde festgelegt.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Kreta-Krieg',
            'regionID' => 16,
            'gegnerischesland' => 'Republik Venedig',
            'gegnerischerherrscher' => 'Andrea Corner',
            'nebenbeteiligtesland' => 'Ritter von Malta',
            'startdatum' => Carbon::create('1645-02-09'),
            'stopdatum' => Carbon::create('1645-03-10'),
            'grund' => 'In dem Wunsch, die Sicherheit in der Ägäis zu gewährleisten.',
            'ergebnis' => 'Osmanischer Sieg: Die Insel Kreta ging unter osmanischer Herrschaft über.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '1663-1664 Österreichischer Krieg',
            'regionID' => 17,
            'gegnerischesland' => 'Erzherzogtum Österreich',
            'gegnerischerherrscher' => 'Raimondo Montecuccoli',
            'nebenbeteiligtesland' => 'Königreich Ungarn',
            'startdatum' => Carbon::create('1663-08-15'),
            'stopdatum' => Carbon::create('1664-08-10'),
            'grund' => 'Die Fürstentümer Erdel, Walachei und Moldau lehnten sich mit Unterstützung Österreichs gegen das Osmanische Reich auf.',
            'ergebnis' => 'Osmanischer Sieg: Mit dem Vertrag von Vasvar kam Uyvar unter osmanische Herrschaft.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Salankamen-Krieg',
            'regionID' => 14,
            'gegnerischesland' => 'Erzherzogtum Österreich',
            'gegnerischerherrscher' => 'Baden Margravı Ludwig Wilhelm von Baden',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1691-03-28'),
            'stopdatum' => Carbon::create('1691-06-01'),
            'grund' => 'Der Wunsch der Osmanen, ihre Vorherrschaft auf dem Balkan zu bewahren.',
            'ergebnis' => 'Österreichischer Sieg: Die osmanische Armee erlitt eine schwere Niederlage.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Krieg um die Schafinseln',
            'regionID' => 18,
            'gegnerischesland' => 'Republik Venedig',
            'gegnerischerherrscher' => 'Antonio Zeno',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1694-09-21'),
            'stopdatum' => Carbon::create('1695-02-09'),
            'grund' => 'Der Wunsch der Osmanen, ihre Vorherrschaft in der Ägäis aufrechtzuerhalten.',
            'ergebnis' => 'Osmanischer Sieg: Der Druck der venezianischen Marine auf die Ägäis wurde aufgehoben und Chios wurde zurückerobert.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Kriege der Heiligen Allianz',
            'regionID' => 10,
            'gegnerischesland' => 'Heiliges Römisches Reich',
            'gegnerischerherrscher' => 'Leopold I',
            'nebenbeteiligtesland' => 'Russisches Zarenreich',
            'startdatum' => Carbon::create('1697-09-11'),
            'stopdatum' => Carbon::create('1699-01-26'),
            'grund' => 'Um die Balkanländer des Osmanischen Reiches zu erobern und seine Macht zu schwächen.',
            'ergebnis' => 'Sieg des Heiligen Römischen Reiches: Ende der osmanischen Vorherrschaft auf dem Balkan und in Mitteleuropa.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Pruth-Krieg',
            'regionID' => 19,
            'gegnerischesland' => 'Russisches Zarentum',
            'gegnerischerherrscher' => 'Petro I',
            'nebenbeteiligtesland' => 'Fürstentum Moldau',
            'startdatum' => Carbon::create('1711-06-10'),
            'stopdatum' => Carbon::create('1711-06-22'),
            'grund' => 'Die Provokation des osmanischen orthodoxen Bürgers durch den russischen Zaren gegen das Osmanische Reich und dessen Einmischung in dessen innere Angelegenheiten.',
            'ergebnis' => 'Osmanischer Sieg: Die Burg Asow und ihre Umgebung auf der Krim gingen unter osmanischer Herrschaft über.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '1735-1739 Russisch-Österreichischer Krieg',
            'regionID' => 20,
            'gegnerischesland' => 'Russisches Zarentum',
            'gegnerischerherrscher' => 'General Petro Lassi',
            'nebenbeteiligtesland' => 'Erzherzogtum Österreich',
            'startdatum' => Carbon::create('1736-05-20'),
            'stopdatum' => Carbon::create('1739-09-18'),
            'grund' => 'Der russische Zarenangriff auf die osmanischen Grenzen im Kaukasus.',
            'ergebnis' => 'Osmanischer Sieg: Das Osmanische Reich gewann einige der Plätze zurück, die es mit dem Vertrag von Pasarofça von 1718 verloren hatte.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Hresili-Krieg',
            'regionID' => 11,
            'gegnerischesland' => 'Georgisches Königreich Imereti',
            'gegnerischerherrscher' => 'Solomon I',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1757-09-28'),
            'stopdatum' => Carbon::create('1757-11-03'),
            'grund' => 'Der Wunsch der Osmanen, ihre Vorherrschaft im Kaukasus aufrechtzuerhalten.',
            'ergebnis' => 'Sieg des georgischen Imereti-Königreichs: Das Osmanische Reich verlor seine Dominanz in den georgischen Ländern.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Osmanisch-russischer Krieg',
            'regionID' => 13,
            'gegnerischesland' => 'Russisches Zarenreich',
            'gegnerischerherrscher' => 'Katerina II',
            'nebenbeteiligtesland' => 'Fürstentum Montenegro',
            'startdatum' => Carbon::create('1774-06-12'),
            'stopdatum' => Carbon::create('1774-06-21'),
            'grund' => 'Das Ziel der Osmanen, die mit dem 1774 unterzeichneten Küçük-Kaynarca-Vertrag verlorenen Ländereien, insbesondere die Krim, von den Russen zurückzuerobern.',
            'ergebnis' => 'Russischer Zarensieg: Die Osmanen verloren ihr Land auf der Krim.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Frankreichs Ägyptenfeldzug',
            'regionID' => 21,
            'gegnerischesland' => 'Französische Republik',
            'gegnerischerherrscher' => 'Napolyon Bonapart',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1798-05-19'),
            'stopdatum' => Carbon::create('1800-01-24'),
            'grund' => 'Ziel Frankreichs ist es, die Vorherrschaft über Ägypten und die östlichen Handelswege zu erlangen.',
            'ergebnis' => 'Osmanischer Sieg: Ägyptische Länder wurden mit dem El-Ariş-Abkommen von Napoleon zurückerobert.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Griechischer Aufstand',
            'regionID' => 18,
            'gegnerischesland' => 'Filiki Etherya und die griechischen Revolutionäre',
            'gegnerischerherrscher' => 'Aleksandros İpsilantis',
            'nebenbeteiligtesland' => 'Vereinigtes Königreich',
            'startdatum' => Carbon::create('1821-03-17'),
            'stopdatum' => Carbon::create('1832-05-07'),
            'grund' => 'Unabhängigkeitskrieg des griechischen Volkes gegen die Osmanen.',
            'ergebnis' => 'Griechischer Sieg: Mit dem Vertrag von Istanbul erlangte Griechenland seine Unabhängigkeit',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Krim-Krieg',
            'regionID' => 22,
            'gegnerischesland' => 'Russisches Zarenreich',
            'gegnerischerherrscher' => 'Nikolay I',
            'nebenbeteiligtesland' => 'Britisches Imperium',
            'startdatum' => Carbon::create('1853-10-04'),
            'stopdatum' => Carbon::create('1856-03-30'),
            'grund' => 'Der Wunsch der Russen, das Schwarze Meer zu beherrschen und das Mittelmeer zu erreichen.',
            'ergebnis' => 'Osmanischer Sieg: Mit dem Vertrag von Vasvar kam Uyvar unter osmanische Herrschaft.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => '93 Krieg',
            'regionID' => 22,
            'gegnerischesland' => 'Russisches Zarenreich',
            'gegnerischerherrscher' => 'Aleksandr II',
            'nebenbeteiligtesland' => 'Königreich Griechenland',
            'startdatum' => Carbon::create('1877-04-24'),
            'stopdatum' => Carbon::create('1878-06-13'),
            'grund' => 'Der Wunsch der Russen, das Schwarze Meer, den Balkan und den Kaukasus zu beherrschen und das Mittelmeer zu erreichen.',
            'ergebnis' => 'Russischer Zarensieg: Mit dem Vertrag von San Stefano und dem Vertrag von Berlin erlitt das Osmanische Reich große Gebietsverluste auf dem Balkan und im Kaukasus.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Tripolis-Krieg',
            'regionID' => 9,
            'gegnerischesland' => 'Königreich Italien',
            'gegnerischerherrscher' => 'Vittorio Emanuele III',
            'nebenbeteiligtesland' => 'Kein',
            'startdatum' => Carbon::create('1911-09-29'),
            'stopdatum' => Carbon::create('1912-10-18'),
            'grund' => 'Italiens Wunsch, Libyen zu erobern.',
            'ergebnis' => 'Sieg Italiens: Mit dem Vertrag von Ushi verlor das Osmanische Reich sein letztes Land in Afrika.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('krieg')->insert([
            'name' => 'Canakkale-Krieg',
            'regionID' => 23,
            'gegnerischesland' => 'Britisches Imperium',
            'gegnerischerherrscher' => 'Lloyd George',
            'nebenbeteiligtesland' => 'Französische Republik',
            'startdatum' => Carbon::create('1915-02-19'),
            'stopdatum' => Carbon::create('1915-03-18'),
            'grund' => 'Der Wunsch der alliierten Mächte, insbesondere Englands, das Osmanische Reich durch die Eroberung der Meerengen von Istanbul und Çankkale aus dem Krieg herauszunehmen.',
            'ergebnis' => 'Osmanischer Sieg: Die Marine der Alliierten konnte die Dardanellen nicht passieren und das russische Zarenreich, das keine Unterstützung bekommen konnte, wurde zerstört.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
