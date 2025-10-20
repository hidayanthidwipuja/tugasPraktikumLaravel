<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_buku')->insert([
            [
                'nama_kategori' => 'Fiksi',
            ],
            [
                'nama_kategori' => 'Non-Fiksi',
            ],
            [
                'nama_kategori' => 'Ilmiah',
            ],
            [
                'nama_kategori' => 'Biografi',
            ],
            [
                'nama_kategori' => 'Sejarah',
            ],
            [
                'nama_kategori' => 'Sains',
            ],
            [
                'nama_kategori' => 'Agama',
            ],
            [
                'nama_kategori' => 'Teknologi',
            ],
        ]); 
    }
}