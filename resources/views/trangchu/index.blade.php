@extends('trangchu.app')

@section('content')
@parent
<div class="top_rightbar">
    <div id="focus">
        <div class="focusInner">
            <ul>
                <li>
                    <a href="#">
                        <img src="upload/202104/1619509627.png" width="310" height="430" /></a>
                </li>
                <li>
                    <a href="#">
                        <img src="upload/202012/1609246603.jpg" width="310" height="430" /></a>
                </li>
                <li>
                    <a href="#">
                        <img src="upload/201907/1564474839.png" width="310" height="430" /></a>
                </li>
                <li>
                    <a href="#">
                        <img src="upload/202007/1595487487.png" width="310" height="430" /></a>
                </li>
                <li>
                    <a href="#">
                        <img src="upload/201902/1550312840.png" width="310" height="430" /></a>
                </li>
                <li>
                    <a href="#">
                        <img src="upload/201906/1561779937.png" width="310" height="430" /></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="top_news">
        <div class="top_news_ad">
            <img src="templates/V2015/images/sp.gif" data-src="templates/V2015/images/main_a2.jpg?2021" width="460" height="90" onclick="showCollectgift()" style="" />
        </div>
        <div class="top_news_box">
            <ul class="top_news_tabs">
                <li id="tab1">
                    <a href="javascript:void(0);" class="current">Thông Báo</a>
                </li>
            </ul>
            <div class="top_news_cont">
                <dl class="imp_news">
                    <dt>
                        <a href="/topic" target="_blank">Xem Thêm</a>
                    </dt>
                </dl>
                <!--综合-->
                <div class="newscont" style="display: block">
                    <ul style="height: 144px; overflow: hidden">
                        <ul class="list">
                            @if($list_topic)
                            @foreach($list_topic as $topic )
                            <li>
                                <a href="/detail/{{$topic->id}}" title="{{$topic->tieude}}" target="_blank"> <span class="time"></span><em class="kind_news"><b>[Thông Báo]: </b></em>{{$topic->tieude}}</a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </ul>
                    <p class="more">
                        <a href="/topic" target="_blank">Xem Thêm</a><span>+</span>
                    </p>
                </div>
                <!--新闻-->

            </div>
        </div>
    </div>

</div>
<div class="line24"></div>
<div class="ltr_date">
    <h2 class="pos_r">Thiết Yếu Trong Game<a href="/product/" class="pos_a more" target="_blank"></a></h2>
    <div class="kuang01">
        <div class="kuang02">
            <div class="date_con">
                <style>
                    table#event {
                        margin-top: 40px;
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        background-color: white;
                        color: black;
                    }

                    #event td,
                    #event th {
                        border: 3px solid black;
                        text-align: center;
                        padding: 8px;
                    }

                    #event tr:first-child {
                        font-weight: bold;
                        font-size: 15px;
                        background-color: black;
                        color: white;
                        border-bottom: 5px solid #c64e36;
                    }

                    #event tr:nth-child(even) {
                        background-color: #fdf4e0;

                    }
                </style>

                <table id="event">
                    <tr>
                        <th>Vật Phẩm</th>
                        <th>Có Thể Thông Qua</th>
						<th>Lưu Ý</th>
                    </tr>
                    <tr>
                        <td>Kim Nguyên Bảo</td>
                        <td>Sự Kiện Phỉ Tặc,Sự Kiện Đoạt Bảo Mã tặc,Sự Kiện Hoàng Kim Thánh Y</td>
						<td>Xuất hiện theo khung giờ, sẽ có thông báo</td>
                    </tr>
                    <tr>
                        <td>Kim Nguyên Bảo Khóa</td>
                        <td>Nhiệm Vụ Trị An Thôn Trang,Sự Kiện Phỉ Tặc (rơi kèm KNB),Sự Kiện Đoạt Bảo Mã Tặc (rơi kèm KNB)</td>
						<td>Nhiệm Vụ Trị An Thôn Trang có thể làm hằng ngày và mọi lúc, còn Sự Kiện sẽ xuất hiện theo khung giờ, sẽ có thông báo</td>
                    </tr>
                    <tr>
                        <td>Ngân Lượng</td>
                        <td> Nhiệm Vụ Áp Tiêu, Nhiệm Vụ Truy Bắt Đạo Phạm, Cự Thú Đảo(trang bị giá trị cao)</td>
					<td> Nhiệm Vụ Áp Tiêu và Nhiệm Vụ Truy Bắt Đạo Phạm sẽ có khung giờ tăng phần thưởng, người chơi chú ý các khung giờ để có thể kiếm được nhiều ngân lượng hơn</td>
                    </tr>
					 <tr>
                        <td>Ngân Lượng Khóa</td>
                        <td>Mini-Game Loạn Sơn Kê, Mini-Game Thật Giả Hổ Vương, Nhiệm Vụ Trị An Thôn Trang</td>
						   <td>Có thể làm hằng ngày và làm mọi lúc mọi nơi, riêng Mini-Game Thật Giả Hổ Vương chỉ có thể tham gia vào Thứ 7 và Chủ Nhật</td>
                    </tr>
					<tr>
                        <td>Đoạn Thạch</td>
                        <td>Mở Túi Pháp Bảo, 4 Boss Thần Binh và Các Sự Kiện Boss lớn trong game, Tiêu Hủy Trang Bị</td>
						<td>Sự Kiện 4 Boss Thần Binh sẽ có hằng ngày và có thông báo khi xuất hiện</td>
                    </tr>
					<tr>
                        <td>Linh Thạch</td>
                        <td>Sự Kiện Bảo Hộp, 4 Boss Thần Binh và Các Sự Kiện Boss lớn trong game, Tiêu Hủy Trang Bị</td>
						<td>Sự Kiện 4 Boss Thần Binh Và Sự Kiện Bảo Hộp sẽ diễn ra hằng ngày và có thông báo khi xuất hiện</td>
                    </tr>
				   </tr>
					<tr>
                        <td>Tiềm Năng</td>
                        <td>Sự Kiện Cổ Mộ, Nhiệm Vụ Sư Gia</td>
						<td>Nhiệm Vụ Sư Gia sẽ có khung giờ tăng phần thưởng, Cổ Mộ sẽ có vào buổi tối</td>
                    </tr>
					<tr>
                        <td>Kinh Nghiệm (EXP)</td>
                        <td>Nhiệm Vụ Trị An, Sự Kiện Hoàng Kim Thánh Y, Mini-Game Loạn Sơn Kê, Sự Kiện Tập Kích Môn Phái</td>
						<td>Hoàng Kim Thánh Y và Tập Kích Môn Phái sẽ có thời gian xuất hiện theo khung giờ</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="line24"></div>
<!--游戏资料 Start-->
<div class="ltr_date">
    <h2 class="pos_r">Danh Sách Hoạt Động<a href="/product/" class="pos_a more" target="_blank"></a></h2>
    <div class="kuang01">
        <div class="kuang02">
            <div class="date_con">
                <style>
                    table#event {
                        margin-top: 40px;
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        background-color: white;
                        color: black;
                    }

                    #event td,
                    #event th {
                        border: 3px solid black;
                        text-align: center;
                        padding: 8px;
                    }

                    #event tr:first-child {
                        font-weight: bold;
                        font-size: 15px;
                        background-color: black;
                        color: white;
                        border-bottom: 5px solid #c64e36;
                    }

                    #event tr:nth-child(even) {
                        background-color: #fdf4e0;

                    }
                </style>

                <table id="event">
                    <tr>
                        <th>Thời Gian</th>
                        <th>Tên Sự Kiện</th>
                        <th>Phần Thưởng</th>
                    </tr>
                    <tr>
                        <td>9h đến 9h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                    <tr>
                        <td>10h đến 10h 30</td>
                        <td>Nhiệm Vụ Hoàng Kim Thánh Y, Sự Kiện Bảo Hộp Phi Tặc</td>
                        <td>EXP, Bảo Hộp, Linh Thạch</td>
                    </tr>
                    <tr>
                        <td>10h30 đến 11h</td>
                        <td>Sự Kiện Tập Kích Môn Phái</td>
                        <td>EXP</td>
                    </tr>
                    <tr>
                        <td>11h đến 11h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                    <tr>
                        <td>11h45 đến 12h</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Truy Bắt Đạo Phạm</td>
                        <td>Ngân Lượng</td>
                    </tr>
                    <tr>
                        <td>12h đến 12h30</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Áp Tiêu, Sự Kiện Bảo Hộp Phi Tặc</td>
                        <td>Ngân Lượng, Bảo Hộp, Linh Thạch</td>
                    </tr>
                    <tr>
                        <td>12h45 đến 13h</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Sư Gia</td>
                        <td>Tiềm Năng</td>
                    </tr>
                    <tr>
                        <td>13h đến 13h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
  
                    <tr>
                        <td>17h đến 17h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc,Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                    <tr>
                        <td>18h đến 18h30</td>
                        <td>Nhiệm Vụ Hoàng Kim Thánh Y, Sự Kiện Bảo Hộp Phi Tặc</td>
                        <td>EXP, Bảo Hộp, Linh Thạch</td>
                    </tr>
                    <tr>
                        <td>19h đến 19h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                    <tr>
                        <td>19h45 đến 18h</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Truy Bắt Đạo Phạm</td>
                        <td>Ngân Lượng</td>
                    </tr>
                    <tr>
                        <td>20h đến 20h30</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Áp Tiêu, Sự Kiện Bảo Hộp Phi Tặc</td>
                        <td>Ngân Lượng, Bảo Hộp, Linh Thạch</td>
                    </tr>
                    <tr>
                        <td>20h30 đến 21h</td>
                        <td>Sự Kiện Tập Kích Môn Phái</td>
                        <td>EXP</td>
                    </tr>
                    <tr>
                        <td>20h45 đến 21h</td>
                        <td>Tăng Phần Thưởng Nhiệm Vụ: Sư Gia</td>
                        <td>Tiềm Năng</td>
                    </tr>
                    <tr>
                        <td>21h đến 21h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                    <tr>
                        <td>21h45 đến 22h</td>
                        <td>Thương Nhân Nguyên Liệu</td>
                        <td>Nguyên Liệu Chế Tạo</td>
                    </tr>
					 <tr>
                        <td>22h đến 23h</td>
                        <td>Bốn Boss Thần Binh</td>
                        <td>Linh Thạch, Đoạn Thạch</td>
                    </tr>
                    <tr>
                        <td>23h đến 23h30</td>
                        <td>Sự Kiện Trộm Bảo Phi Tặc, Sự Kiện Đoạt Bảo Mã Tặc</td>
                        <td>Kim Nguyên Bảo</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
<!--游戏资料 End-->
<div class="line24"></div>

<div class="line24"></div>
<!--合作媒体 Start-->

<!--合作媒体 End-->
@endsection