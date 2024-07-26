<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengajar::factory()->create([
            'name' => 'Ardi',
            'alamat' => 'Cilacap',
            'foto' => 'ardi.jpg'
        ]);
        Pengajar::factory()->create([
            'name' => 'Naura',
            'alamat' => 'Jogja',
            'foto' => 'naura.jpg'
        ]);
        Pengajar::factory()->create([
            'name' => 'Ani',
            'alamat' => 'Rembang',
            'foto' => 'ani.jpg'
        ]);
    }
}
