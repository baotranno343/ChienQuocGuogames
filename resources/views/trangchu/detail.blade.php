@extends('trangchu.app')
@include('flash-message')
@section('content')
@parent


<div class="news_content">

    @if(session("chucvu")==2)
    <form action="/detail/{{$id}}" method="post" id="form_delete">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" name="delete" style="float:right; margin: 20px; padding:10px;background-color:#c99e28;color:white;border:none;border-radius:10px; cursor:pointer">Xóa Bài Viết</button>
    </form>

    @endif
    <h1>{{$tieude}}</h1>
    <div id="publishTop">
        <div class="publishTime">{{$thoigian}}</div>
    </div>
    <div class="news_text" id="zoom">

        <div>
            {!!$noidung!!}
        </div>
    </div>


</div>
<script>
    // your function
    var my_func = function(event) {
        var r = confirm("Bạn có chắc muốn xóa không");
        if (r == false) {
            event.preventDefault();
            return;
        }
    };

    // your form
    var form = document.getElementById("form_delete");
    // attach event listener
    form.addEventListener("submit", my_func, true);
</script>
@endsection