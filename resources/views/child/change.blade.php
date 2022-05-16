@extends('layouts.app')



@section('content')
@parent

<div class="account-pages my-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Đổi Mật Khẩu</h5>
                    </div>
                    <div class="card-body">
                        <form action="change" method="post" class="p-2">
                            @csrf
                            <div class="form-group">
                                <label for="password">Mật khẩu cũ</label>
                                <input class="form-control" type="password" required="" name="oldpassword" placeholder="Nhập mật khẩu cũ">
                                @error('oldpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="password">Mật khẩu mới</label>
                                <input class="form-control" type="password" required="" name="newpassword" placeholder="Nhập mật khẩu mới">
                                @error('newpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="password">Nhập lại mật khẩu mới</label>
                                <input class="form-control" type="password" required="" name="newpassword2" placeholder="Nhập lại mật khẩu mới">
                                @error('newpassword2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <button style="width:50%" class="btn btn-warning btn-block btn-bordered-warning" name="changepass" type="submit"> Đổi mật khẩu </button>
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