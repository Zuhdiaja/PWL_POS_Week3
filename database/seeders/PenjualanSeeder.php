<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id'=>1,'pembeli'=>'Customer 1','penjualan_kode'=>'TRX01','penjualan_tanggal'=>now()],
            ['user_id'=>1,'pembeli'=>'Customer 2','penjualan_kode'=>'TRX02','penjualan_tanggal'=>now()],
            ['user_id'=>2,'pembeli'=>'Customer 3','penjualan_kode'=>'TRX03','penjualan_tanggal'=>now()],
            ['user_id'=>2,'pembeli'=>'Customer 4','penjualan_kode'=>'TRX04','penjualan_tanggal'=>now()],
            ['user_id'=>3,'pembeli'=>'Customer 5','penjualan_kode'=>'TRX05','penjualan_tanggal'=>now()],
            ['user_id'=>3,'pembeli'=>'Customer 6','penjualan_kode'=>'TRX06','penjualan_tanggal'=>now()],
            ['user_id'=>1,'pembeli'=>'Customer 7','penjualan_kode'=>'TRX07','penjualan_tanggal'=>now()],
            ['user_id'=>2,'pembeli'=>'Customer 8','penjualan_kode'=>'TRX08','penjualan_tanggal'=>now()],
            ['user_id'=>3,'pembeli'=>'Customer 9','penjualan_kode'=>'TRX09','penjualan_tanggal'=>now()],
            ['user_id'=>1,'pembeli'=>'Customer 10','penjualan_kode'=>'TRX10','penjualan_tanggal'=>now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
