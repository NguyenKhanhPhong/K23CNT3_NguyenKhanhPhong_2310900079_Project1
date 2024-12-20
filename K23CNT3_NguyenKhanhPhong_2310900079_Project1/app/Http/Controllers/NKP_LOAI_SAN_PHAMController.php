<?php

namespace App\Http\Controllers;

use App\Models\NKP_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class NKP_LOAI_SAN_PHAMController extends Controller
{
    // admi: CRUD

    // list
    public function nkpList()
    {
        $nkpLoaiSanPhams = NKP_LOAI_SAN_PHAM::all();
        
        return view('nkpAdmins.nkpLoaiSanPham.nkp-list',['nkpLoaiSanPhams'=>$nkpLoaiSanPhams]);
    }

    // create
    public function nkpCreate()
    {
        return view('nkpAdmins.nkpLoaiSanPham.nkp-create');
    }

    public function nkpCreateSubmit(Request $request)
    {
        // ghi dữ liệu xuống DB
        $nkpLoaiSanPham = new NKP_LOAI_SAN_PHAM;
        $nkpLoaiSanPham->nkpMaLoai = $request->nkpMaLoai;
        $nkpLoaiSanPham->nkpTenLoai = $request->nkpTenLoai;
        $nkpLoaiSanPham->nkpTrangThai = $request->nkpTrangThai;

        $nkpLoaiSanPham->save();

        return redirect()->route('nkpadmins.nkploaisanpham');
    }

    // edit 
    public function nkpEdit($id)
    {
        $nkpLoaiSanPham = NKP_LOAI_SAN_PHAM::find($id);
        return view('nkpAdmins.nkpLoaiSanPham.nkp-edit',['nkpLoaiSanPham'=>$nkpLoaiSanPham]);
    }
}
