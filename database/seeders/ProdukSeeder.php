<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $produk = [
            [
                'nama' => 'Produk 1',
                'harga' => 10000,
                'deskripsi' => 'Deskripsi Produk 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 2',
                'harga' => 20000,
                'deskripsi' => 'Deskripsi Produk 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 3',
                'harga' => 30000,
                'deskripsi' => 'Deskripsi Produk 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 4',
                'harga' => 40000,
                'deskripsi' => 'Deskripsi Produk 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 5',
                'harga' => 50000,
                'deskripsi' => 'Deskripsi Produk 5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 6',
                'harga' => 60000,
                'deskripsi' => 'Deskripsi Produk 6',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 7',
                'harga' => 70000,
                'deskripsi' => 'Deskripsi Produk 7',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 8',
                'harga' => 80000,
                'deskripsi' => 'Deskripsi Produk 8',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Produk 9',
                'harga' => 90000,
                'deskripsi' => 'Deskripsi Produk 9',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('produk')->insert($produk);
    }
}