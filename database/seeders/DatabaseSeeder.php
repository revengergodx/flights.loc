<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                "city" => "Kyiv",
                "lat" => "50.4500",
                "lng" => "30.5233",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Kyiv, Misto",
                "capital" => "primary",
                "population" => "2952301",
                "population_proper" => "2952301"
            ],
            [
                "city" => "Kharkiv",
                "lat" => "49.9925",
                "lng" => "36.2311",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Kharkivska Oblast",
                "capital" => "admin",
                "population" => "1421125",
                "population_proper" => "1421125"
            ],
            [
                "city" => "Odesa",
                "lat" => "46.4775",
                "lng" => "30.7326",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Odeska Oblast",
                "capital" => "admin",
                "population" => "1010537",
                "population_proper" => "1010537"
            ],
            [
                "city" => "Dnipro",
                "lat" => "48.4675",
                "lng" => "35.0400",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Dnipropetrovska Oblast",
                "capital" => "admin",
                "population" => "968502",
                "population_proper" => "968502"
            ],
            [
                "city" => "Donetsk",
                "lat" => "48.0028",
                "lng" => "37.8053",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Donetska Oblast",
                "capital" => "admin",
                "population" => "901645",
                "population_proper" => "901645"
            ],
            [
                "city" => "Lviv",
                "lat" => "49.8425",
                "lng" => "24.0322",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Lvivska Oblast",
                "capital" => "admin",
                "population" => "717273",
                "population_proper" => "717273"
            ],
            [
                "city" => "Zaporizhzhia",
                "lat" => "47.8500",
                "lng" => "35.1175",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Zaporizka Oblast",
                "capital" => "admin",
                "population" => "710052",
                "population_proper" => "710052"
            ],
            [
                "city" => "Simferopol",
                "lat" => "44.9519",
                "lng" => "34.1022",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Krym, Avtonomna Respublika",
                "capital" => "admin",
                "population" => "340540",
                "population_proper" => "340540"
            ],
            [
                "city" => "Mykolaiv",
                "lat" => "46.9750",
                "lng" => "31.9950",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Mykolaivska Oblast",
                "capital" => "admin",
                "population" => "470011",
                "population_proper" => "470011"
            ],
            [
                "city" => "Luhansk",
                "lat" => "48.5678",
                "lng" => "39.3031",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Luhanska Oblast",
                "capital" => "admin",
                "population" => "417990",
                "population_proper" => "417990"
            ],
            [
                "city" => "Vinnytsia",
                "lat" => "49.2333",
                "lng" => "28.4833",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Vinnytska Oblast",
                "capital" => "admin",
                "population" => "369739",
                "population_proper" => "369739"
            ],
            [
                "city" => "Chernihiv",
                "lat" => "51.4939",
                "lng" => "31.2947",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Chernihivska Oblast",
                "capital" => "admin",
                "population" => "286899",
                "population_proper" => "286899"
            ],
            [
                "city" => "Poltava",
                "lat" => "49.5894",
                "lng" => "34.5514",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Poltavska Oblast",
                "capital" => "admin",
                "population" => "283402",
                "population_proper" => "283402"
            ],
            [
                "city" => "Kherson",
                "lat" => "46.6425",
                "lng" => "32.6250",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Khersonska Oblast",
                "capital" => "admin",
                "population" => "279131",
                "population_proper" => "279131"
            ],
            [
                "city" => "Khmelnytskyi",
                "lat" => "49.4167",
                "lng" => "27.0000",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Khmelnytska Oblast",
                "capital" => "admin",
                "population" => "274452",
                "population_proper" => "274452"
            ],
            [
                "city" => "Cherkasy",
                "lat" => "49.4444",
                "lng" => "32.0597",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Cherkaska Oblast",
                "capital" => "admin",
                "population" => "269836",
                "population_proper" => "269836"
            ],
            [
                "city" => "Sumy",
                "lat" => "50.9119",
                "lng" => "34.8028",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Sumska Oblast",
                "capital" => "admin",
                "population" => "265758",
                "population_proper" => "265758"
            ],
            [
                "city" => "Chernivtsi",
                "lat" => "48.3000",
                "lng" => "25.9333",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Chernivetska Oblast",
                "capital" => "admin",
                "population" => "265471",
                "population_proper" => "265471"
            ],
            [
                "city" => "Zhytomyr",
                "lat" => "50.2500",
                "lng" => "28.6667",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Zhytomyrska Oblast",
                "capital" => "admin",
                "population" => "261624",
                "population_proper" => "261624"
            ],
            [
                "city" => "Rivne",
                "lat" => "50.6192",
                "lng" => "26.2519",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Rivnenska Oblast",
                "capital" => "admin",
                "population" => "245289",
                "population_proper" => "245289"
            ],
            [
                "city" => "Ivano-Frankivsk",
                "lat" => "48.9228",
                "lng" => "24.7106",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Ivano-Frankivska Oblast",
                "capital" => "admin",
                "population" => "238196",
                "population_proper" => "238196"
            ],
            [
                "city" => "Ternopil",
                "lat" => "49.5667",
                "lng" => "25.6000",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Ternopilska Oblast",
                "capital" => "admin",
                "population" => "225238",
                "population_proper" => "225238"
            ],
            [
                "city" => "Lutsk",
                "lat" => "50.7500",
                "lng" => "25.3358",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Volynska Oblast",
                "capital" => "admin",
                "population" => "215986",
                "population_proper" => "215986"
            ],
            [
                "city" => "Uzhhorod",
                "lat" => "48.6239",
                "lng" => "22.2950",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Zakarpatska Oblast",
                "capital" => "admin",
                "population" => "115449",
                "population_proper" => "115449"
            ],
            [
                "city" => "Kropyvnytskyi",
                "lat" => "48.5000",
                "lng" => "32.2667",
                "country" => "Ukraine",
                "iso2" => "UA",
                "admin_name" => "Kirovohradska Oblast",
                "capital" => "admin",
                "population" => "227413",
                "population_proper" => "227413"
            ],
        ]);

        User::factory(10)->create();
    }
}
