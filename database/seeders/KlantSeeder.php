<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'a.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'b.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'c.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'd.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '4',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'e.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('klants')->insert([
        'voornaam' => 'Rowell',
        'achternaam' => 'Fortune',
        'geslacht' => 'Man',
        'adres' =>  'Hinidlaan',
        'huisnummer' =>  '34',
        'district' =>  'Paramaribo',
        'telefoonnummer' =>  '8201598',
        'email' => 'f.fortune@unasat.sr',
        'is_published' => 'draft'
      ]);
    }
}
