@extends('_layouts.admins._master')
@section('title','Quản trị nội dung')

@section('content-body')
    <div class="container">
        <div class="row">
           
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('nkpadmins.nkploaisanpham.nkpcreatesubmit')}}" method="post">
                
                <div class="card">
                <div class="card-header">
                    <h2>Thêm mới loại sản phẩm</h2>
                </div>

                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="nkpMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            id="nkpMaLoai" name="nkpMaLoai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nkpTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            id="nkpTenLoai" name="nkpTenLoai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nkpTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <input type="radio" id="nkpTrangThai1" name="nkpTrangThai" value="1"
                            checked/>
                            <label for="nkpTrangThai1">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="nkpTrangThai0" name="nkpTrangThai" value="0"/>
                                <label for="nkpTrangThai0">Khóa</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{route('nkpadmins.nkploaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection