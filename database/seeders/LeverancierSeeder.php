<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Alembo',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Rowell Fortune',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'JJimpera',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Jsoha',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Rowell',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'J Muyden',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Rowell',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Akash',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Rowell',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Mitchel',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Rowell',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Mack',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);

      DB::table('leveranciers')->insert([
        'bedrijfsnaam' => 'Rowell',
        'adres' =>  'Hinidlaan',
        'district' =>  'Paramaribo',
        'directeur' => 'Chantell',
        'telefoonnummer' =>  '8201598',
        'website' => 'fortune@unasat.sr',
        'is_published' => 'draft'
      ]);
    }
}
