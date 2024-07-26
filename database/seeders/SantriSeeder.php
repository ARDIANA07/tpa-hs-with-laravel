<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Santri::factory()->create([
            'name' => 'Altha',
            'kelas' => 'TKA',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '2010-01-01',
            'alamat' => 'Yogyakarta',
            'foto' => 'altha.jpg'
        ]);
        Santri::factory()->create([
            'name' => 'Rafif',
            'kelas' => 'TPA',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '2008-02-01',
            'alamat' => 'Yogyakarta',
            'foto' => 'rafif.jpg'
        ]);
        Santri::factory()->create([
            'name' => 'Aqila',
            'kelas' => 'TQA',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '2009-04-05',
            'alamat' => 'Yogyakarta',
            'foto' => 'aqila.jpg'
        ]);
    }
}