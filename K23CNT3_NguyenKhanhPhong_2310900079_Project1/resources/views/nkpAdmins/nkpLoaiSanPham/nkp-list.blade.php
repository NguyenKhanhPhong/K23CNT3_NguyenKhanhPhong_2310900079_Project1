@extends('_layouts.admins._master')
@section('title','Quản trị nội dung')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
            </div>
        </div>
            <h1>Danh sách loại sản phẩm</h1>
            <a href="{{route('nkpadmins.nkploaisanpham.nkpcreate')}}" class="btn btn-success">Thêm mới</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr> 
                        <th>#</th>  
                        <th>Mã loại</th>  
                        <th>Tên loại</th>  
                        <th>Trạng thái</th>  
                        <th>Chức năng</th>  
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nkpLoaiSanPhams as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->nkpMaLoai}}</td>
                            <td>{{$item->nkpTenLoai}}</td>
                            <td>{{$item->nkpTrangThai}}</td>
                            <td>
                                View / edit / delete
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection