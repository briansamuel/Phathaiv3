<?php include_once('css/layouttheme_cd_css.php');?>
<div id="wrapper">
    <div class="wrap bg1">
        <div class="main" style="height: 480px;">
            <a href="<?=$link_chat;?>" target="_blank" style="width: 100%;float: left;height: 100%;">
                
            </a>
            
        </div>
    </div>
    <div class="wrap bg2">
        <div class="main">
            <div class="new">
                <div class="col-bg7">
                    <div class="content">
                        <center>
                            <img src="images/content1_icon1.png" alt="">
                            <p class="h3">Điện thoại</p>
                            <p class="" style="font-weight: bold;">028 3922 5520</p>
                        </center>
                    </div>
                </div>
                <div class="col-bg7">
                    <div class="content">
                        <center>
                            <img src="images/content1_icon2.png" alt="">
                            <p class="h3">Tư vấn Online</p>
                            <a style="font-weight: bold;color: white;" href="<?=$link_chat;?>">Chat trực tiếp</a>
                        </center>
                    </div>
                </div>
                <div class="col-bg7">
                    <div class="content">
                        <center>
                            <img src="images/content1_icon3.png" alt="">
                            <p class="h3">Địa chỉ</p>
                            <p>160-162 Lê Hồng Phong, P.3, Q.5, TPHCM</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap bg3">
        <center>
            <h2>DỄ DÀNG ĐẶT LỊCH KHÁM TẠI PHÒNG KHÁM PHÁ THAI SÀI GÒN </h2>
            <p style="color: #d03e3e;">ĐẶT LỊCH CẢ NGOÀI GIỜ HÀNH CHÍNH TỪ 08H00 - 22H00 HÀNG NGÀY</p>
        </center>
        <div class="main">
            <div class="new">
                <div class="col-bg7">
                    <div class="row">
                        <img src="images/content2_pic1.png" alt="">
                        <p class="h3">Gọi điện trực tiếp</p>
                        <p class="nd">Bằng cách gọi tới số 028.3924.5555 và cung cấp đầy đủ thông tin cá nhân, ngày bạn muốn hẹn khám, bạn sẽ được ưu tiên khám trước.</p>
                    </div>
                    <div class="row">
                        <a href="<?=$link_chat;?>">
                            <p class="button">GỌI NGAY</p>
                        </a>
                    </div>
                </div>
                <div class="col-bg7">
                    <div class="row">
                        <img src="images/content2_pic2.png" alt="">
                        <p class="h3">Đặt lịch qua website</p>
                        <p class="nd">Bằng cách điền đầy đủ thông tin vào khung đăng ký mẫu hoặc gửi thông tin đầy đủ của bạn qua khung chat trực tuyến.</p>
                    </div>
                    <div class="row">
                        <a href="#">
                            <p class="button">CHAT ONLINE</p>
                        </a>
                    </div>
                </div>
                <div class="col-bg7">
                    <div class="row">
                        <img src="images/content2_pic3.png" alt="">
                        <p class="h3">Đăng ký qua facebook chat</p>
                        <p class="nd">Bạn hãy truy cập Facebook Phòng Khám Phá Thai Sài Gòn, vào khung chat messenger để gửi thông tin đăng ký khám, chúng tôi sẽ tiếp nhận ngay sau đó.</p>
                    </div>
                    <div class="row">
                        <a href="<?=$link_fb;?>">
                            <p class="button">PAGE FACEBOOK</p>
                        </a>
                    </div>
                </div>
                <div class="col-bg7">
                    <div class="row">
                        <img src="images/content2_pic4.png" alt="">
                        <p class="h3">Đăng ký qua Zalo</p>
                        <p class="nd">Kết bạn Zalo phòng khám qua số điện thoại 028 3922 5555 và đăng ký với bác sĩ tư vấn.</p>
                    </div>
                    <div class="row">
                        <a href="">
                            <p class="button">PAGE ZALO</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap bg4">
        <center>
            <h2>ĐĂNG KÝ ONLINE</h2>
            <p style="color: #d03e3e;">ĐÃ THUẬN TIỆN, NAY CÒN TIẾT KIỆM</p>
        </center>
        <div class="main">
            <div class="left">
                <center>
                    <img src="images/content3_pic1.png" alt="">
                </center>
            </div>
            <div class="right">
                <div class="dangky">
                    <form action="" method="post" name="form1" id="form1">
                        <div class="form">
                            <center>
                                <p class="h3">NHẬP THÔNG TIN ĐĂNG KÝ KHÁM BỆNH</p>
                                <div class="line"></div>
                            </center>
                            <div class="row">
                                <p>Họ và tên:</p>
                                <input type="text" name="hoten" required="" id="hoten">
                            </div>
                            <div class="row">
                                <p>Số điện thoại:</p>
                                <input type="text" name="sdt" required="" id="sdt">
                            </div>
                            <div class="row">
                                <p>Email liên lạc:</p>
                                <input type="email" name="email" required="" id="email">
                            </div>
                            <div class="row">
                                <p>Ngày đăng ký khám:</p>
                                <input type="text" name="ngayhenkham" required="" id="ngayhenkham">
                            </div>
                            <div class="row">
                                <p>Triệu chứng bệnh:</p>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="row code">
                                <p>Nhập mã xác thực:</p>
                                <input type="text" name="maxacthuc" required="" id="maxacthuc">
                                <div class="captcha">
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <button type="submit" class="send" id="sendtt" name="send" value="send"></button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap bg5">
        <center>
            <h2>VỊ TRÍ THUẬN TIỆN, DI CHUYỂN NHANH CHÓNG</h2>
        </center>
    </div>
    <div class="wrap bg6" style="padding-bottom: 10px;">
        <div class="main">
            <div class="row">
                <img src="images/content4_icon1.png" alt="">
                <p class="h3">Chọn phương tiện cá nhân</p>
                <p class="ph3">Nhanh hơn, chủ động hơn</p>
            </div>
            <center>
                <div class="row2">
                    <p>Bạn có thể sử dụng phương tiện cá nhân (xe máy, ô tô,...) để tới Phòng khám phá thai Sài gòn đường Lê Hồng Phong, Phường 3, Quận 5, TP.HCM.</p>
                </div>
                <div class="row3">
                </div>
            </center>
            <div class="row4">
                <img src="images/content4_icon2.png" alt="">
                <p class="h3">Chọn xe bus</p>
                <p class="ph3">An toàn và tiết kiệm</p>
            </div>
            <div class="new" style="float: left;">
                <div class="col-bg7">
                    <div class="bus">
                        <p>- <b>BUS 33:</b> BX Yên Nghĩa - Xuân Đỉnh.</p>
                        <p>- <b>BUS 39:</b> CV Nghĩa Đô - Tứ Hiệp (BV Nội tiết Trung Ương).</p>
                        <p>- <b>BUS 78:</b> BX Mỹ Đình - Tế Tiêu</p>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                   
                    <p class="map"><b>TÊN ĐIỂM DỪNG: </b>Quận Ủy Thanh Xuân, số 9 Khuất Duy Tiến hoặc 90 Khuất Duy Tiến)</p>
                </div>
                <div class="col-bg7">
                    <div class="bus">
                        <p>- <b>BUS 01:</b> BX Gia Lâm - BX Yên Nghĩa</p>
                        <p>- <b>BUS 02:</b> BX Bác Cổ - BX Yên Nghĩa</p>
                        <p>- <b>BUS 19:</b> Trần Khánh Dư - Thiên Đường Bảo Sơn</p>
                        <p>- <b>BUS 21A:</b> BX Giáp Bát - BX Yên Nghĩa</p>
                        <p>- <b>BUS 21B:</b> KĐT Pháp Vân - Tứ Hiệp - BX Yên Nghĩa</p>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                    
                    <p class="map"><b>TÊN ĐIỂM DỪNG: </b>Nguyễn Trãi - Bách hóa Thanh Xuân hoặc Học viện khoa học xã hội.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap bg7">
        <div class="main">
            <center>
                <div class="pic-bus">
                    <center>
                        <p style="padding: 0 15px;">Sau đó, các bạn đi bộ tới số 5 Khuất Duy Tiến - Phòng khám Đa khoa Thành Đức</p>
                    </center>
                </div>
                <div class="pic">
                </div>
            </center>
        </div>
    </div>
    <div class="wrap bg8" style="background-attachment: inherit;background-size: contain;">
        <div class="main" style="height: 243px;">
           <a href="<?=$link_chat;?>" target="_blank" style="width: 100%;height: 100%;float: left;"></a>
        </div>
    </div>
    <div class="wrap menuf wow fadeIn" data-wow-delay="0.7s">
        <center>
            <h2>Tìm hiểu thêm về <b style="color: #65c895;">phòng khám phá thai sài gòn</b></h2>
            <div class="line"></div>
        </center>
        <div class="main">
            <div class="new">
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Giới thiệu chung</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Mô hình quản lý</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Kỹ thuật nổi bật</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Chi phí tham khảo</h3>
                        </center>
                    </div>
                </a>
                <a href="/phu-khoa/">
                    <div class="col-bg7">
                        <center>
                            <h3>Hạng mục điều trị</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Dịch vụ an toàn</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7">
                        <center>
                            <h3>Góc bệnh nhân</h3>
                        </center>
                    </div>
                </a>
                <a href="#">
                    <div class="col-bg7" style="background: #4dbad9 !important;">
                        <center>
                            <h3 style=" color: white; font-weight: bold;">Liên hệ</h3>
                        </center>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .new{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.menuf {
    background: #FFFFFF;
    padding-top:20px;
    padding-bottom: 20px; 
}

.menuf h3{
    text-transform: uppercase;
    font-weight: normal;
    color: #4dbad9;
}
.menuf h2{
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: bold;
    color: #333333;
    text-transform: uppercase;
}
.menuf .line{
    width: 150px;
    background: #E7E7E7;
    height: 4px;
    position: relative;
    bottom: 10px;
}
.menuf .new .col-bg7{
    width: 230px;
    background: transparent;
    float: left;
    border: 1px solid #4dbad9;
    border-radius: 7px;
    margin: 7px;
    min-height: 80px;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
}

.menuf .new .col-bg7:hover{
    background: #4dbad9;
    cursor: pointer;
    transition: 0.3s all;
}


.menuf .new .col-bg7:hover h3{
    font-weight: bold;
    color: white;
}

@media screen and (max-width: 680px){
    .menuf .new .col-bg7{
        max-width: 164px;
    }
}
</style>

<style type="text/css">
    /*All Style:---------------------------------------------------------body*/

body {
    font-family: tahoma;
    font-size: 14px;
    margin: 0px auto;
    background: #fff;
    text-align: justify;
    color: #212121;
    line-height: 21px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 5px 0px;
    padding: 0;
    border: 0;
    font-family: tahoma;
    color: #fff;
    font-size: 14px;
    line-height: 30px;
}

p,
ul,
li {
    line-height: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
}

* {
    margin: 0;
    padding: 0;
}

img {
    border: none;
}

a {
    text-decoration: none;
}

header,
footer,
session {
    overflow: hidden;
    clear: both;
}

.clear {
    clear: both;
    border: none;
}

#wrapper {
    position: relative;
    margin: 0;
    padding: 0;
    overflow: hidden;
    height: 100%;
    width: 100%;
}

.wrap {
    float: left;
    width: 100%;
}

.bg1 {
    padding-top: 45px;
    background: url('images/bannergif.gif') center no-repeat;
    background-size: cover;
}

.bg1 .left {
    float: left;
    width: 35%;
}

.bg1 .right {
    float: right;
    width: 63%;
}

.bg1 .left img {
    position: relative;
    bottom: -5px;
}

.bg1 .right .img1 {
    margin-top: 50px;
}

.bg1 .right img {
    float: left;
}

.bg1 .right .bn1 {
    float: left;
    width: 100%;
}

.bg2 {
    background: #ffffff;
    padding: 30px 0px;
}

.new {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.bg2 .new .col-bg7 {
    position: relative;
    border-radius: 15px;
    width: 310px;
    background: #f5f5f5;
    float: left;
    margin: 10px;
    min-height: 180px;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
}

.bg2 .new .col-bg7:nth-child(1) {
    background: #e26666;
}

.bg2 .new .col-bg7:nth-child(2) {
    background: #f4b336;
}

.bg2 .new .col-bg7:nth-child(3) {
    background: #4bc88d;
}

.bg2 .new .col-bg7 .content {
    border: 1px solid white;
    max-width: 310px;
    min-height: 180px;
    border-radius: 15px;
    margin: 15px;
}

.bg2 .new img {
    margin: 10px;
}

.bg2 p {
    color: #ffffff;
    padding: 10px 0px;
    text-align: center;
}

.bg2 .h3 {
    padding: 0px;
    font-weight: bold;
    text-transform: uppercase;
}

.bg3 {
    padding: 20px 0px;
    background: #f5f5f5;
}

.bg3 h2,
.bg4 h2 {
    font-weight: bold;
    color: #333333;
    font-size: 20px;
}

.bg3 .new {
    margin-top: 20px;
}

.bg3 .new .col-bg7 {
    position: relative;
    width: 480px;
    background: #ffffff;
    float: left;
    margin: 7px;
    min-height: 150px;
}

.bg3 .new img {
    float: left;
    margin: 15px;
}

.bg3 .new p {
    text-align: justify;
    padding: 10px;
}

.bg3 .h3 {
    padding-top: 20px !important;
    font-weight: bold;
    text-transform: uppercase;
}

.bg3 .row{
    width: 100%;
    float: left;
}

.bg3 .nd {
    padding-right: 15px !important;
}

.bg4 {
    padding: 20px 0px;
    background: #ffffff;
}
.bg4 .left{
    float: left;
    width: 40%;
}
.bg4 .right {
    width: 60%;
    float: right;
}
.bg4 .dangky{
    padding: 20px;
    margin: 20px;
    background: url('images/content3_bg_form.png') center repeat;
    border-radius: 10px;
}

.bg4 .dangky .form{
    border-radius: 10px;
    background: #ffffff;
    padding: 15px;
    box-shadow: 3px 3px 20px #888888;
}
.bg4 .h3{
    font-weight: bold;
    text-transform: uppercase;
    color: #505050;
}
.bg4 img{
    float: left;
    margin: 20px 0px 10px 0px;
}

.bg4 .line{
    height: 3px;
    background: #ec8d8d;
    width: 80%;
    margin: 10px 0px;
}
.bg4 .row{
    margin: 10px 5px;
}

.bg4 .row p{
    width: 30%;
    margin-right: 10px;
    float: left;
    text-align: right;
}
.bg4 .row input{
    width: 65%;
    background: #f5f5f5;
    border: 0px;
    height: 35px;
}
.bg4 .row textarea{
    width: 65%;
    background: #f5f5f5;
    border: 0px;
    height: 120px;
}
.bg4 .code input{
    width: 35%;
}

.dangky a {
    -moz-user-select: none;
    color: #1155CC !important;
    font-family: "verdana", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-decoration: none;
}
.dangky .send {
    margin-top: 25px;
    margin-left: 35px;
    width: 209px;
    height: 41px;
    background: url('../images/content3_button_normal.png') center no-repeat;
    background-size: 100%;
    border: 0px;
}
.dangky .send:hover{
    background: url('../images/content3_button_hover.png');
    transition: 0.3s all;
}
.dangky .code img{
    float: none;
    cursor: pointer;
    margin: 0px;
}

.dangky .code .captcha{
    width: 27%;
    float: right;
}

.bg5 {
    padding: 10px 0px;
    background: #f5f5f5;
}

.bg5 h2{
    font-weight: bold;
    text-transform: uppercase;
    color: #38a9c3;
    font-size: 20px;
}

.bg6 {
    background: #ffffff;
    padding: 20px 0px;
}

.bg6 img{
    float: left;
    margin-right: 10px;
}

.bg6 p{
    text-align: justify;
}

.bg6 .h3{
    padding-top: 20px;
    padding-right: 20px;
    font-weight: bold;
    text-transform: uppercase;
    color: #e26666;
}

.bg6 .ph3{
    text-transform: uppercase;
}

.bg6 .row, .bg6 .row2{
    margin: 10px 0px;
}

.bg6 .row2{
    width: 96%;
    margin-top: 45px;
    position: relative;
    border: 2px solid #58cc95;
    padding: 15px;
    min-height: 35px;
}

.bg6 .row3, .bg6 .row4{
    margin-top: 20px;
    float: left;
    width: 100%;
}

.bg6 .row4 p{
    width: 300px;
}

.bg6 .new{
    margin-top: 20px;
}

.bg6 .row3{
    background: url('images/content4_pic1pc.png') center no-repeat;
    height: 202px;
    background-size: cover;
}

.bg6 .new .col-bg7{
    position: relative;
    max-width: 485px;
    border: 2px solid #4bc88d;
    float: left;
    margin: 5px;
    min-height: 200px;
}
.bg6 .new .col-bg7 .bus{
    min-height: 140px;
}
.bg6 .new .col-bg7 p{
    padding-left: 15px;
    padding-right: 15px;
}
.bg6 .new .col-bg7 p:nth-child(1){
    padding-top: 15px;
}
.bg6 .new .col-bg7 p:last-child{
    padding-bottom: 10px;
}
.bg6 .new .col-bg7 .line{
    width: 93%;
    height: 1px;
    background:  #4bc88d;
}
.bg6 .new .col-bg7 img{
    float: left;
    margin: 10px 5px 0px 15px;
}
.bg6 .new .col-bg7 .map{
    padding-top: 10px;
}

.bg7 {
    padding-bottom: 20px;
}

.bg7 .pic-bus{
    width: 99%;
    color: #ffffff;
    padding: 10px 0px;
    background: #4bc88d;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.bg7 .pic{
    background: url('images/content4_pic2pc.png') center no-repeat;
    min-height: 209px;
    background-size: 100%;
}
.bg8 {
    padding: 40px 0px;
    background:  url('images/content5_bg.png') center no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.bg8 img{
    margin: 0 10px;
}

.bg8 .icon{
    position: relative;
    bottom: 20px;
    left: 20px;
}

.button{
    width: 135px;
    background: #4BC88D;
    font-weight: bold;
    color: #FFF;
    padding: 7px !important;
    float: left;
    text-align: center !important;
    margin-left: 15px;
    margin-bottom: 15px; 
}
.button:hover{
    background: #E26666;
    transition: .3s all;
}
@media screen and (max-width: 1024px) {
    .bg1 img {
        margin-top: 0px !important;
        max-width: 100%;
    }
    .bg2 img,
    .bg3 img,
    .bg4 img, .bg6 img, .bg8 img{
        max-width: 100%;
    }
}

@media screen and (max-width: 680px) {
    .bg1 .main {
        margin: 0px !important;
        width: 100% !important;
    }
    .bg1 {
        background: none;
    }
    .bg2 .new .col-bg7 {
        width: 100%;
        min-height: 70px;
    }
    .bg2 .new img {
        float: left;
    }
    .bg2 .new .col-bg7 .content {
        max-width: 96%;
        min-height: 100px;
        border: 0px;
    }
    .bg2 .h3 {
        padding-top: 30px;
    }
    .bg2 img {
        margin-left: 0px !important;
    }
    .bg2 p {
        text-align: left;
    }
    .bg3 img {
        width: 30% !important;
        margin-bottom: 0px !important;
    }
    .bg4 .left{
        float: none;
        width: 100%;
    }
    .bg4 .right{
        float: none;
        width: 100%;
    }
    .bg4 .dangky {
        margin: 0px;
    }
    .bg4 img{
        float: none;
        margin: 10px 0px;
    }
    .bg4 .dangky .send{
        margin-left: 0px;
    }
    .bg6 .row2{
        padding-left: 0px;
        padding-right: 0px;
    }
    
    .bg6 img{
        margin-left: 10px;
    }
    .bg6 .row2 p{
        padding: 0px 20px;
    }
    .bg6 .col-bg7 {
        min-height: 120px !important;
    }
    .bg6 .col-bg7 .bus{
        min-height: 70px !important;
    }
    .bg8 img {
        margin: 10px 0px;
        left: 0px !important;
        bottom: 0px !important;
    }
    .main {
        margin: 0 2%;
        width: 96%!important;
    }
}

@media screen and (max-width: 320px) {
    .bg2 .new img {
        float: none;
    }
    .bg2 p {
        text-align: center;
    }
    .bg2 .content {
        margin: 10px !important;
    }
    .bg2 .h3 {
        padding-top: 10px;
    }
}



</style>