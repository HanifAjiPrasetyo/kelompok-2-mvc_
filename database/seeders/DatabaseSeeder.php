<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Mahasiswa 1',
            'nim' => uniqid('mhs-'),
            'jurusan' => 'Teknologi Informasi',
            'email' => 'mhs1@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Mahasiswa 2',
            'nim' => uniqid('mhs-'),
            'jurusan' => 'Teknologi Informasi',
            'email' => 'mhs2@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Mahasiswa 3',
            'nim' => uniqid('mhs-'),
            'jurusan' => 'Teknologi Informasi',
            'email' => 'mhs3@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
