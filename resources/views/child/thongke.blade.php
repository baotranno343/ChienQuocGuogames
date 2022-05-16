@extends('layouts.app')



@section('content')
@parent
<div class="container">

    <!-- start  -->
    <div class="row">
        <div class="col-12">
            <div>

                <div class="account-pages my-3 pt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-16 m-1">Lịch Sử Nạp Thẻ</h5>
                        </div>
                        <div class="card-body">
						<form action="ghifile" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Chọn Kênh</label>
                                        <select class="form-control" id="kenh" name="kenh">
                                            <option value="1">Kênh 1</option>
                                            <option value="2">Kênh 2</option>
                                            <option value="3">Kênh 3</option>

                                        </select>
                                        <!-- <input class="form-control" type="number" required="" min="10000" name="sotien" placeholder="Điền số tiền nạp"> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Lệnh</label>
                                        <textarea class="form-control" id="lenh" name="lenh" required="" placeholder="Nhập Lệnh" rows="4" cols="50"></textarea>
                                        @error('lenh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 mt-3 d-flex justify-content-center" >
                                        <button style="max-width:300px"  class="btn btn-warning btn-block btn-bordered-warning" type="submit" name="ghifile"> Gửi Lệnh </button>
                                    </div>
                                </form>
                                <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Tài Khoản</th>
                                            <th>ID Nhân Vật</th>
                                            <th>Số Tiền Nạp</th>
                                            <th>Thời Gian Nạp</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list_cash as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{$item->id_nguoidung}}</td>
                                            <td>{{$item->id_nhanvat}}</td>
                                            <td>{{number_format($item->sotien)}}Đ</td>
                                            <td>{{$item->created_at->format('d-m-Y H:i:s')}}</td>
                                            @if($item->trangthai==1)
                                            <td>
                                                <form action="/checkcash" method="post">
                                                    @csrf
                                                    <input type="hidden" value={{$item->id}} name="id">
                                                    <input type="hidden" value={{$item->id_nguoidung}} name="id_nguoidung">
                                                    <input type="hidden" value={{$item->id_nhanvat}} name="id_nhanvat">
                                                    <input type="hidden" value={{$item->sotien}} name="sotien">
                                                    <button type="submit" value="2" name="trangthai" class="btn btn-danger btn-bordered-danger mr-3 btn-rounded">Xác Nhận</button>
                                                    <button type="submit" value="3" name="trangthai" class="btn btn-warning btn-rounded btn-rounded">Hủy</button>
                                                </form>
                                            </td>
                                            @elseif($item->trangthai==2)
                                            <td><button type="button" class="btn btn-danger btn-rounded">Nạp Thành Công</button></td>
                                            @elseif($item->trangthai==3)
                                            <td><button type="button" class="btn btn-dark btn-rounded">Nạp Thất Bại</button></td>
                                            @else
                                            "Lỗi";

                                            @endif
                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end -->

</div>

@endsection