<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table anggota
        DB::table('anggota')->insert([
            'id_Anggota'
        ]);
    }
}
