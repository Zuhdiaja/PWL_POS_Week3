<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            // transaksi 1
            ['penjualan_id'=>1,'barang_id'=>1,'harga'=>15000,'jumlah'=>1],
            ['penjualan_id'=>1,'barang_id'=>2,'harga'=>16000,'jumlah'=>2],
            ['penjualan_id'=>1,'barang_id'=>3,'harga'=>17000,'jumlah'=>1],

            // transaksi 2
            ['penjualan_id'=>2,'barang_id'=>4,'harga'=>18000,'jumlah'=>1],
            ['penjualan_id'=>2,'barang_id'=>5,'harga'=>19000,'jumlah'=>2],
            ['penjualan_id'=>2,'barang_id'=>6,'harga'=>20000,'jumlah'=>1],

            // transaksi 3
            ['penjualan_id'=>3,'barang_id'=>7,'harga'=>21000,'jumlah'=>1],
            ['penjualan_id'=>3,'barang_id'=>8,'harga'=>22000,'jumlah'=>1],
            ['penjualan_id'=>3,'barang_id'=>9,'harga'=>23000,'jumlah'=>2],

            // transaksi 4
            ['penjualan_id'=>4,'barang_id'=>10,'harga'=>24000,'jumlah'=>1],
            ['penjualan_id'=>4,'barang_id'=>11,'harga'=>25000,'jumlah'=>2],
            ['penjualan_id'=>4,'barang_id'=>12,'harga'=>26000,'jumlah'=>1],

            // transaksi 5
            ['penjualan_id'=>5,'barang_id'=>13,'harga'=>27000,'jumlah'=>1],
            ['penjualan_id'=>5,'barang_id'=>14,'harga'=>28000,'jumlah'=>1],
            ['penjualan_id'=>5,'barang_id'=>15,'harga'=>29000,'jumlah'=>2],

            // transaksi 6
            ['penjualan_id'=>6,'barang_id'=>1,'harga'=>15000,'jumlah'=>2],
            ['penjualan_id'=>6,'barang_id'=>5,'harga'=>19000,'jumlah'=>1],
            ['penjualan_id'=>6,'barang_id'=>9,'harga'=>23000,'jumlah'=>1],

            // transaksi 7
            ['penjualan_id'=>7,'barang_id'=>2,'harga'=>16000,'jumlah'=>1],
            ['penjualan_id'=>7,'barang_id'=>6,'harga'=>20000,'jumlah'=>2],
            ['penjualan_id'=>7,'barang_id'=>10,'harga'=>24000,'jumlah'=>1],

            // transaksi 8
            ['penjualan_id'=>8,'barang_id'=>3,'harga'=>17000,'jumlah'=>1],
            ['penjualan_id'=>8,'barang_id'=>7,'harga'=>21000,'jumlah'=>2],
            ['penjualan_id'=>8,'barang_id'=>11,'harga'=>25000,'jumlah'=>1],

            // transaksi 9
            ['penjualan_id'=>9,'barang_id'=>4,'harga'=>18000,'jumlah'=>2],
            ['penjualan_id'=>9,'barang_id'=>8,'harga'=>22000,'jumlah'=>1],
            ['penjualan_id'=>9,'barang_id'=>12,'harga'=>26000,'jumlah'=>1],

            // transaksi 10
            ['penjualan_id'=>10,'barang_id'=>13,'harga'=>27000,'jumlah'=>1],
            ['penjualan_id'=>10,'barang_id'=>14,'harga'=>28000,'jumlah'=>2],
            ['penjualan_id'=>10,'barang_id'=>15,'harga'=>29000,'jumlah'=>1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
