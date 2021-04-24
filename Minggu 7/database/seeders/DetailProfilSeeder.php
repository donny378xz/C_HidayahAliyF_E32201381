<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profil')->insert([
        	'address' => 'jember',
        	'nomor_tlp' => '089685563841',
        	'ttl' => '2001-11-24',
        	'foto' => 'picture.png'
        ]);	 
    }
}
