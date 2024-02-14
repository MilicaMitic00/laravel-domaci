<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Agent;
use \App\Models\Nekretnina;
use \App\Models\Kandidat;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //brisanje svega iz tabela
        User::truncate();
        Agent::truncate();
        Nekretnina::truncate();
        Kandidat::truncate();

       User::factory(5)->create();
       Agent::factory(10)->create();

       $nekretnina1 = Nekretnina::create([
           'naziv' => 'stan u Beogradu (Mirijevo)'
       ]);

       $nekretnina2 = Nekretnina::create([
           'naziv' => 'kuća u Novom Sadu'
       ]);

       $nekretnina3 = Nekretnina::create([
           'naziv' => 'apartman u Nišu'
       ]);

       $nekretnina4 = Nekretnina::create([
           'naziv' => 'vikendica na Fruškoj Gori'
       ]);

       $nekretnina5 = Nekretnina::create([
           'naziv' => 'poslovni prostor u Pirotu'
       ]);

       $kandidat1 = Kandidat::create([
           'datumIVreme' => now(),
           'user' => 1,
           'nekretnina' => 1,
           'agent'=>2,
           'note' => 'Potencijalni kupac, ali želi dodatne informacije o poreklu vlasništva.'
       ]);

       $kandidat2 = Kandidat::create([
           'datumIVreme' => now(),
           'user' => 2,
           'krivicnodelo' => 1,
           'sudija'=>1,
           'note' => 'Primetio je prisustvo vlage tokom obilaska, što će uticati na pregovore o ceni.'
       ]);
    }
}
