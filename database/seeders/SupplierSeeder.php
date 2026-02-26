<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_kode'=>'SUP01',
                'supplier_nama'=>'PT Sumber Jaya',
                'supplier_alamat'=>'Jl. Mawar No.1 Malang'
            ],
            [
                'supplier_kode'=>'SUP02',
                'supplier_nama'=>'PT Makmur Sentosa',
                'supplier_alamat'=>'Jl. Melati No.10 Surabaya'
            ],
            [
                'supplier_kode'=>'SUP03',
                'supplier_nama'=>'PT Berkah Abadi',
                'supplier_alamat'=>'Jl. Kenanga No.5 Jakarta'
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }

}
