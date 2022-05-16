@extends('layouts.app')



@section('content')
@parent

<div class="account-pages my-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-16 m-1">Đặt lại mật khẩu</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <p class="text-muted w-75 mx-auto"><b>Bạn đã nhập đúng mật khẩu cấp 2, hãy nhập mật khẩu mới</b> </p>
                        </div>
                        <form action="forget_success_view" method="post" class="p-2">
                            @csrf

                            <div class="form-group">

                                <label for="password">Mật khẩu mới</label>
                                <input class="form-control" type="password" required="" name="matkhau" placeholder="Nhập mật khẩu mới">
                                @error('newpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="password">Nhập lại mật khẩu mới</label>
                                <input class="form-control" type="password" required="" name="matkhau2" placeholder="Nhập lại mật khẩu mới">
                                @error('newpassword2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class=" mb-3 text-center">
                                <button class="btn btn-danger btn-block btn-rounded" name="forget" type="submit"> Đặt lại mật khẩu </button>
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