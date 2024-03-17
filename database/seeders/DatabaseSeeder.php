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
        \App\Models\Book::factory()->create([
            'judul' => 'Buku 1',
            'penulis' => 'Penulis 1',
            'penerbit' => 'Penerbit 1',
            'tahun_terbit' => rand(1990, 2024),
            'stok' => rand(10, 20)
        ]);
        \App\Models\Book::factory()->create([
            'judul' => 'Buku 2',
            'penulis' => 'Penulis 2',
            'penerbit' => 'Penerbit 2',
            'tahun_terbit' => rand(1990, 2024),
            'stok' => rand(10, 20)
        ]);
        \App\Models\Book::factory()->create([
            'judul' => 'Buku 3',
            'penulis' => 'Penulis 3',
            'penerbit' => 'Penerbit 3',
            'tahun_terbit' => rand(1990, 2024),
            'stok' => rand(10, 20)
        ]);
        \App\Models\Book::factory()->create([
            'judul' => 'Buku 4',
            'penulis' => 'Penulis 4',
            'penerbit' => 'Penerbit 4',
            'tahun_terbit' => rand(1990, 2024),
            'stok' => rand(10, 20)
        ]);
    }
}
