@extends('layouts.app')



@section('content')
@parent
<div class="account-pages my-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Nạp Thẻ</h5>
                    </div>
                    <div class="card-body">
                        <div>


                            <a one-link-mark="yes">
                                <div class="text-center">
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myCenterModalLabel">Hưỡng Dẫn Nạp Thẻ</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                     <h4>Nạp Tiền Qua Momo</h4>
                                                    <a href="https://nhantien.momo.vn/SdjMcx78Gqk" target="_blank">https://nhantien.momo.vn/SdjMcx78Gqk</a>
                             
                                                    <hr>
                                                    <h4>Chuyển Khoản Qua ATM</h4>
                                                    <p>MB Bank ( Ngân Hàng Quân Đội) <br>
                                                        Tên: Phạm Thị Sơn Ca <br>
                                                        Số TKNH: 9704229233147359 <br>
                                                        Chi Nhánh: Điện Biên Phủ <br></p>
                                                    <hr>
                                                    <p>Nội Dung: Vui Lòng Ghi ID Nhân Vật</p>
                                                    <hr>
                                                    <p>Sau khi chuyển tiền hãy điền thông tin bên dưới và bấm nạp thẻ, sau đó quay lại trang thông tin để kiểm tra trạng thái nạp, admin sẽ xác nhận trong vài phút, sau khi trạng thái nạp hiện thành công Kim Nguyên Bảo sẽ được thêm vào nhân vật, nếu sau đó vẫn chưa nhận được Kim Nguyên Bảo hãy liên hệ Fanpage https://www.facebook.com/guogames/ để được giải quyết.</p> -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                    <button type="button" class="btn btn-warning waves-effect waves-light btn-bordered-warning" data-toggle="modal" data-target=".bs-example-modal-center">Hưỡng Dẫn Nạp Thẻ</button>

                                </div>
                            </a>

                        </div>
                        <form action="/cash" method="post" class="p-2">
                            @csrf
                            <div class="form-group">
                                <label for="emailaddress">ID Nhân Vật</label>
                                <!-- <input class="form-control" type="number" name="id" min="0" required="" placeholder="Điền id nhân vật"> -->
                                <select class="form-control" name="id">

                                    @foreach($check_id as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                    @endforeach;

                                </select>
                                @error('id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="text">Số Tiền Nạp</label>
                                <select class="form-control" id="sotien" name="sotien">
                                    <option value="10000">10.000Đ</option>
                                    <option value="20000" selected>20.000Đ</option>
                                    <option value="50000">50.000Đ</option>
                                    <option value="100000">100.000Đ</option>
                                    <option value="200000" >200.000Đ</option>
                                    <option value="500000" >500.000Đ</option>
                                    <option value="1000000" >1.000.000Đ</option>
                                    <option value="2000000" >2.000.000Đ</option>
                                    <option value="4000000" >4.000.000Đ</option>
                                    <option value="5000000" >5.000.000Đ</option>
                                    <option value="10000000" >10.000.000Đ</option>
                                </select>
                                @error('sotien')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <!-- <input class="form-control" type="number" required="" min="10000" name="sotien" placeholder="Điền số tiền nạp"> -->
                            </div>
                            <div class="form-group">
                                <label for="password">Mã Captcha: <h2 style="border: 1px solid black; padding: 10px"> <img src="{{$captcha}}" /></h2></label>
                                <input class="form-control" type="text" required="" name="captcha" id="captcha" placeholder="Nhập mã Captcha vào đây">
                                @error('captcha')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <button style="width:50%" class="btn btn-warning btn-block btn-bordered-warning" type="submit" name="traxoat"> Nạp Thẻ </button>
                            </div>
                        </form>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection