@if ($message = Session::get('success'))
<div class="alert alert-info text-info alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Thành Công!</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger text-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Thất Bại!</strong> {{ $message }}
</div>
@endif


@if ($errors->any())
<div class="alert alert-dark">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Bạn đã điền sai thông tin, vui lòng kiểm tra lại.
</div>
@endif