<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NKP_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nkpMatKhau = md5('123456a@');
        DB::table('NKP_QUAN_TRI')->insert([
            'nkpTaiKhoan'=>'bluebluesky0192@gmail.com',
            'nkpMatKhau'=> $nkpMatKhau,
            'nkpTrangThai'=>0
        ]);
        DB::table('NKP_QUAN_TRI')->insert([
            'nkpTaiKhoan'=>'0375730295',
            'nkpMatKhau'=> $nkpMatKhau,
            'nkpTrangThai'=>0
        ]);
    }
}
