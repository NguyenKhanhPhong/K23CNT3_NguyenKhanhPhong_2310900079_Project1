<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class NKP_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'VP001',
            'nkpTenSanPham'=>'Cây phú quý',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>100,
            'nkpDonGia'=>699000,
            'nkpMaLoai'=>1,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'VP002',
            'nkpTenSanPham'=>'Cây đại phú gia',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>200,
            'nkpDonGia'=>550000,
            'nkpMaLoai'=>1,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'VP003',
            'nkpTenSanPham'=>'Cây hạnh phúc',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>150,
            'nkpDonGia'=>250000,
            'nkpMaLoai'=>1,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'VP004',
            'nkpTenSanPham'=>'Cây vạn lộc',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>300,
            'nkpDonGia'=>799000,
            'nkpMaLoai'=>1,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'PT001',
            'nkpTenSanPham'=>'Cây thiết mộc lan',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>150,
            'nkpDonGia'=>590000,
            'nkpMaLoai'=>3,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'PT002',
            'nkpTenSanPham'=>'Cây trường sinh',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>100,
            'nkpDonGia'=>150000,
            'nkpMaLoai'=>3,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'PT003',
            'nkpTenSanPham'=>'Cây hạnh phúc',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>200,
            'nkpDonGia'=>299000,
            'nkpMaLoai'=>3,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_SAN_PHAM')->insert([
            'nkpMaSanPham'=>'PT004',
            'nkpTenSanPham'=>'Cây hoa nhài(Lài ta)',
            'nkpHinhAnh'=>'',
            'nkpSoLuong'=>300,
            'nkpDonGia'=>199000,
            'nkpMaLoai'=>3,
            'nkpTrangThai'=>0
        ]);
    }
}
