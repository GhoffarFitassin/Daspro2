<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Member;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Outlet::create([
            'name' => 'anjar laundry',
            'province_id' => '35',
            'regency_id' => '3507',
            'district_id' => '3507280',
            'village_id' => '3507280010',
            'alamat' => 'rumah aan anjar',
            'tlp' => '081777555',
        ]);
        User::create([
            'name' => 'Ghoffar',
            'username' => 'owner',
            'password' => bcrypt('123456'),
            'outlet_id' => '1',
            'kd_users' => 'OWN-0001',
            'role' => 'Owner',
        ]);
        User::create([
            'name' => 'Anjar',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'outlet_id' => '1',
            'kd_users' => 'ADM-0001',
            'role' => 'Admin',
        ]);
        User::create([
            'name' => 'Bagas',
            'username' => 'kasir',
            'password' => bcrypt('123456'),
            'outlet_id' => '1',
            'kd_users' => 'KSR-00001',
            'role' => 'Kasir',
        ]);
        

        // Paket::create([
        //     'outlet_id' => '1',
        //     'jenis' => 'kiloan',
        //     'nama_paket' => 'Cucian Alexa',
        //     'harga' => '1000',
        // ]);
        // Paket::create([
        //     'outlet_id' => '1',
        //     'jenis' => 'kiloan',
        //     'nama_paket' => 'Cucian Mas Alex',
        //     'harga' => '1000',
        // ]);

        // Detail::create([
        //     'transaksi_id' => '1',
        //     'paket_id' => '1',
        //     'outlet_id' => '1',
        //     'member_id' => '2',
        //     'qty' => '15',
        //     'keterangan' => 'Dicuci yg bersih',
        // ]);
        // Detail::create([
        //     'transaksi_id' => '2',
        //     'paket_id' => '2',
        //     'outlet_id' => '1',
        //     'member_id' => '1',
        //     'qty' => '15',
        //     'keterangan' => 'Dicuci cepet ya bos',
        // ]);

        // Transaksi::create([
        //     'outlet_id' => '1',
        //     'kode_invoice' => 'TR001',
        //     'member_id' => '1',
        //     'tgl' => '2023-03-04 05:39:25',
        //     'batas_waktu' => '2023-03-04 05:39:25',
        //     'tgl_bayar' => '2023-03-04 05:39:25',
        //     'biaya_tambahan' => '10000',
        //     'diskon' => '10',
        //     'pajak' => '3000',
        //     'status' => 'Baru',
        //     'dibayar' => 'Belum dibayar',
        //     'user_id' => '3',
        // ]);
        // Transaksi::create([
        //     'outlet_id' => '1',
        //     'kode_invoice' => 'TR002',
        //     'member_id' => '1',
        //     'tgl' => '2023-03-04 05:39:25',
        //     'batas_waktu' => '2023-03-04 05:39:25',
        //     'tgl_bayar' => '2023-03-04 05:39:25',
        //     'biaya_tambahan' => '20000',
        //     'diskon' => '50',
        //     'pajak' => '1500',
        //     'status' => 'Proses',
        //     'dibayar' => 'Dibayar',
        //     'user_id' => '3',
        // ]);

        // Member::create([
        //     'name' => 'maha',
        //     'alamat' => 'jl. jakarta',
        //     'jenis_kelamin' => 'L',
        //     'tlp' => '081111222',
        // ]);
        // Member::create([
        //     'name' => 'ani',
        //     'alamat' => 'jl. surabaya',
        //     'jenis_kelamin' => 'p',
        //     'tlp' => '082221222',
        // ]);

        
        
    }
}
