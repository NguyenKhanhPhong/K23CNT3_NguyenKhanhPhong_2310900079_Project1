<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NKP_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NKP_LOAI_SAN_PHAM')->insert([
            'nkpMaLoai'=>"L001",
            'nkpTenLoai'=>"Cây cảnh văn phòng",
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_LOAI_SAN_PHAM')->insert([
            'nkpMaLoai'=>"L002",
            'nkpTenLoai'=>"Cây để bàn",
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_LOAI_SAN_PHAM')->insert([
            'nkpMaLoai'=>"L003",
            'nkpTenLoai'=>"Cây cảnh phong thủy",
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_LOAI_SAN_PHAM')->insert([
            'nkpMaLoai'=>"L004",
            'nkpTenLoai'=>"Cây thủy canh",
            'nkpTrangThai'=>0
        ]);
    }
}
