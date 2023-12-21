<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();

        // Tambahkan data seeder
        DB::table('mahasiswas')->insert([
            'nama' => 'Kim seokjin',
            'nim' => '20102238',
            'ipk' => 3.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Kim Namjoon',
            'nim' => '20102239',
            'ipk' => 2.6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Min Yoon Gi',
            'nim' => '20102240',
            'ipk' => 3.8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Jung Ho-Seok',
            'nim' => '20102241',
            'ipk' => 2.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Park Ji Min',
            'nim' => '20102242',
            'ipk' => 3.9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
