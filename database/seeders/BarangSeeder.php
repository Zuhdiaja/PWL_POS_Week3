<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id'=>1,'barang_kode'=>'BRG01','barang_nama'=>'Barang 1','harga_beli'=>10000,'harga_jual'=>15000],
            ['kategori_id'=>1,'barang_kode'=>'BRG02','barang_nama'=>'Barang 2','harga_beli'=>11000,'harga_jual'=>16000],
            ['kategori_id'=>1,'barang_kode'=>'BRG03','barang_nama'=>'Barang 3','harga_beli'=>12000,'harga_jual'=>17000],
            ['kategori_id'=>2,'barang_kode'=>'BRG04','barang_nama'=>'Barang 4','harga_beli'=>13000,'harga_jual'=>18000],
            ['kategori_id'=>2,'barang_kode'=>'BRG05','barang_nama'=>'Barang 5','harga_beli'=>14000,'harga_jual'=>19000],
            ['kategori_id'=>2,'barang_kode'=>'BRG06','barang_nama'=>'Barang 6','harga_beli'=>15000,'harga_jual'=>20000],
            ['kategori_id'=>3,'barang_kode'=>'BRG07','barang_nama'=>'Barang 7','harga_beli'=>16000,'harga_jual'=>21000],
            ['kategori_id'=>3,'barang_kode'=>'BRG08','barang_nama'=>'Barang 8','harga_beli'=>17000,'harga_jual'=>22000],
            ['kategori_id'=>3,'barang_kode'=>'BRG09','barang_nama'=>'Barang 9','harga_beli'=>18000,'harga_jual'=>23000],
            ['kategori_id'=>4,'barang_kode'=>'BRG10','barang_nama'=>'Barang 10','harga_beli'=>19000,'harga_jual'=>24000],
            ['kategori_id'=>4,'barang_kode'=>'BRG11','barang_nama'=>'Barang 11','harga_beli'=>20000,'harga_jual'=>25000],
            ['kategori_id'=>4,'barang_kode'=>'BRG12','barang_nama'=>'Barang 12','harga_beli'=>21000,'harga_jual'=>26000],
            ['kategori_id'=>5,'barang_kode'=>'BRG13','barang_nama'=>'Barang 13','harga_beli'=>22000,'harga_jual'=>27000],
            ['kategori_id'=>5,'barang_kode'=>'BRG14','barang_nama'=>'Barang 14','harga_beli'=>23000,'harga_jual'=>28000],
            ['kategori_id'=>5,'barang_kode'=>'BRG15','barang_nama'=>'Barang 15','harga_beli'=>24000,'harga_jual'=>29000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
