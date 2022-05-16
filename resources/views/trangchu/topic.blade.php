@extends('trangchu.app')

@section('content')
@parent

<div class="news_list_con">

    <ul class="news_list">
        @if($list_topic)
        @foreach($list_topic as $topic )
        <li>
            <a href="/detail/{{$topic->id}}" title="{{$topic->tieude}}" target="_blank"> <span class="time"></span><em class="kind_news"><b>[Thông Báo]: </b></em>{{$topic->tieude}}</a>
        </li>
        @endforeach
        @endif
    </ul>
    <div class="xtlPage">
        <style>
            .digg4 {
                padding: 3px;
                margin: 3px;
                text-align: center;
                font-family: Tahoma, Arial, Helvetica, Sans-serif, sans-serif;
                font-size: 12px;
            }

            .digg4 a,
            .digg4 span.miy {
                border: 1px solid #2c2c2c;
                padding: 2px 5px 2px 5px;
                background: url(../public/images/page7.gif) #2c2c2c;
                margin: 2px;
                color: #fff;
                text-decoration: none;
            }

            .digg4 a:hover {
                border: 1px solid #aad83e;
                color: #fff;
                background: url(../public/images/page7_2.gif) #aad83e;
            }

            .digg4 a:active {
                border: 1px solid #aad83e;
                color: #fff;
                background: url(../public/images/page7_2.gif) #aad83e;
            }

            .digg4 span.current {
                border: 1px solid #aad83e;
                padding: 2px 5px 2px 5px;
                margin: 2px;
                color: #fff;
                background: url(../public/images/page7_2.gif) #aad83e;
                text-decoration: none;
            }

            .digg4 span.disabled {
                border: 1px solid #f3f3f3;
                padding: 2px 5px 2px 5px;
                margin: 2px;
                color: #ccc;
            }

            .digg4 .disabledfy {
                font-family: Tahoma, Verdana;
            }
        </style>

        {{ $list_topic->links() }}

    </div>
</div>
@endsection