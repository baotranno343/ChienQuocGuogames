@extends('layouts.app')



@section('content')
@parent
<div class="container-fluid">

    <!-- start  -->

    <div>


        <div class="tab-content my-3 pt-3">
            <div class="tab-pane active" id="home-b1">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <!-- Personal-Information -->
                        <div class="panel card panel-fill">
                            <div class="card-header">
                                <h5 class="font-16 m-1">Thông Tin</h5>
                            </div>
                            <div class="card panel-default hover-effect">
                                <div class="card-heading p-0">
                                    <div class="pro-widget-img"></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="row">

                                                <div class="col-4">
                                                    <div class="text-center">
                                                        Tài Khoản
                                                    </div>
                                                    <div class="text-center">
                                                        {{session("taikhoan")}}
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-center">
                                                        ID
                                                    </div>
                                                    <div class="text-center">
                                                        {{session("id")}}
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-center">
                                                        Điểm Nạp Thẻ
                                                    </div>
                                                    <div class="text-center">
                                                        @if(isset($diemnapthe))
                                                        {{$diemnapthe}}
                                                        @else
                                                        0
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="panel card panel-fill">
                            <div class="card-header">
                                <h5 class="font-16 m-1">Lịch Sử Nạp Thẻ</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered m-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID Nhân Vật</th>
                                                <th>Số Tiền Nạp</th>
                                                <th>Ngày Nạp</th>
                                                <th>Trạng Thái</th>

                                            </tr>
                                        </thead>
                                        <tbody>@isset($check_cash)
                                            @foreach($check_cash as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->id_nhanvat}}</td>
                                                <td>{{number_format($item->sotien)}}Đ</td>
                                                <td>{{$item->created_at->format('d-m-Y H:i:s')}}</td>
                                                <td>
                                                    @if($item->trangthai==1)
                                                    <button type="button" class="btn btn-primary btn-bordered"> {{"Đang Tra Xoát"}}</button>
                                                    @elseif($item->trangthai==2)

                                                    <button type="button" class="btn btn-danger btn-bordered"> {{"Thành Công"}}</button>
                                                    @elseif($item->trangthai==3)
                                                    <button type="button" class="btn btn-dark btn-bordered"> {{"Thất Bại"}}</button>
                                                    @else
                                                    <button type="button" class="btn btn-dark btn-bordered"> {{"Có Vấn Đề"}}</button>

                                                </td>
                                                @endif
                                            </tr>

                                            @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>

</div>
@endsection