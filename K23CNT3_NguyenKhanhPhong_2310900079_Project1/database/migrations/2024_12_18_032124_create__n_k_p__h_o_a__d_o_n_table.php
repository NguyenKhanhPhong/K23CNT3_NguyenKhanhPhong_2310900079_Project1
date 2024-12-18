<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('NKP_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('nkpMaHoaDon',255)->unique();
            $table->bigInteger('nkpMaKhachHang')->references('id')->op('NKP_KHACH_HANG');
            $table->date('nkpNgayHoaDon');
            $table->string('nkpHoTenKhachHang',255);
            $table->string('nkpEmail',255);
            $table->string('nkpDienThoai',255);
            $table->string('nkpDiaChi',255);
            $table->float('nkpTongTriGia');
            $table->tinyInteger('nkpTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NKP_HOA_DON');
    }
};
