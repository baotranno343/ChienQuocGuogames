@extends('trangchu.app')

@section('content')
@parent





<div class="news_content">
    <div class="form" style="padding: 20px;">
        <form action="post_detail" method="post">
            @csrf
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="font-size: 15px;" for=" tieude">Tiêu Đề:</label>
                <input class="form-control" name="tieude" style="padding: 10px;" type="text">
                @error('tieude')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <hr>
            <textarea class="form-control" id="summary-ckeditor" name="noidung"></textarea>
            <input type="submit" name="post" value="Đăng Bài Viết" style="float: right; padding: 10px; margin-top:15px; background:white;border:1px solid black;">
            @error('noidung')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('summary-ckeditor', {
        language: 'vi',
    });
    CKEDITOR.config.defaultLanguage = 'it';
</script>
@endsection