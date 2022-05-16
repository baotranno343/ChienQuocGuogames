@extends('layouts.app')



@section('content')
@parent

<div class="account-pages my-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Đăng Ký</h5>
                    </div>
                    <div class="card-body">

                        <div class="text-center mb-3 mt-3">

                        </div>
                        <form action="reg" method="post" class="p-2">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="username">Họ tên</label>
                                        <input class="form-control" type="text" id="username" name="hoten" required="" value='{{session("reg_hoten")?session("reg_hoten"):""}}' placeholder="Nhập họ tên">
                                        @error('hoten')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Tài khoản</label>
                                        <input class="form-control" type="text" id="username" name="taikhoan" required="" value='{{session("reg_taikhoan")?session("reg_taikhoan"):""}}' placeholder="Nhập tài khoản">
                                        @error('taikhoan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Nhập lại mật khẩu</label>
                                        <input class="form-control" type="password" required="" name="matkhaunhaplai" id="password" placeholder="Nhập lại mật khẩu">
                                        @error('matkhau2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="password">Mã Captcha</label><br>
                                    <img src="{{$captcha}}" />
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required="" value='{{session("reg_email")?session("reg_email"):""}}' placeholder="Nhập email">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input class="form-control" type="password" required="" name="matkhau" id="password" placeholder="Nhập mật khẩu">
                                        @error('matkhau')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu Cấp 2</label>
                                        <input class="form-control" type="password" required="" name="matkhau2" id="password" placeholder="Nhập mật khẩu">
                                        @error('matkhau')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Nhập Mã Captcha</label>
                                        <input class="form-control" type="text" required="" name="captcha" id="captcha" placeholder="Nhập mã Captcha vào đây">
                                        @error('captcha')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="mb-3 mt-3 d-flex justify-content-center">
                                    <button style="width:50%" class="btn btn-warning btn-block btn-bordered-warning" name="dangky" type="submit"> Đăng Ký </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <p class="text-light mb-0">Nếu bạn có tài khoản rồi hãy <a href="log" class="text-light ml-1"><b>Đăng nhập</b></a></p>
                    </div>
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection