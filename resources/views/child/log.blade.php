@extends('layouts.app')



@section('content')
@parent

<div class="account-pages my-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Đăng Nhập</h5>
                    </div>
                    <div class="card-body">

                        <form action="log" method="post" class="p-2">
                            @csrf
                            <div class="form-group">
                                <label for="emailaddress">Tài Khoản</label>
                                <input class="form-control" type="text" id="taikhoan" name="taikhoan" required="" placeholder="Nhập tài khoản">
                                @error('taikhoan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <a href="page-recoverpw.html" class="text-muted float-right">Forgot your password?</a> -->
                                <label for="password">Mật Khẩu</label>
                                <input class="form-control" type="password" required="" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu">
                                @error('matkhau')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- <div class="form-group mb-4 pb-3">
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div> -->
                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <button style="width:50%" class="btn btn-warning btn-block btn-bordered-warning" type="submit" name="dangnhap"> Đăng Nhâp </button>
                            </div>
                        </form>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <p class="text-light mb-0">Bạn không có tài khoản? <a href="/reg" class="text-light ml-1"><b>Đăng Ký</b></a></p>
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