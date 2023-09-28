<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\InformationPermit;
use App\Models\User;
use App\Models\StatusPermit;
use App\Models\Permit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'nip' => '99999999999',
            'password' => Hash::make('password')
        ]);
        StatusPermit::insert([
            ['name' => 'Menunggu Persetujuan'],
            ['name' => 'Ditolak'],
            ['name' => 'Diterima'],
        ]);

        InformationPermit::insert([
            ['name' => 'Sakit'],
            ['name' => 'Izin'],
            ['name' => 'Cuti'],
            ['name' => 'Meninggal'],
        ]);
    }
}
