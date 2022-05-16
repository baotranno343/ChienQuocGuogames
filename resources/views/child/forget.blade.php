@extends('layouts.app')



@section('content')
@parent

<div class="account-pages">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Quên Mật Khẩu</h5>
                    </div>
                    <div class="card-body">

                        <div class="text-center">
                            <p class="text-muted w-75 mx-auto">Hãy nhập đúng mật khẩu cấp 2 để lấy lại mật khẩu! </p>
                        </div>
                        <form action="forget" method="post" class="p-2">
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
                                <label for="password">Mật Khẩu Cấp 2</label>
                                <input class="form-control" type="password" required="" id="matkhau2" name="matkhau2" placeholder="Nhập mật khẩu">
                                @error('matkhau2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <button style="width:50%" class="btn btn-warning btn-block btn-bordered-warning" type="submit" name="forget"> Xác Nhận </button>
                            </div>
                        </form>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <p class="text-light mb-0">Trở về trang <a href="log" class="text-light ml-1"><b>Đăng Nhập</b></a></p>
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