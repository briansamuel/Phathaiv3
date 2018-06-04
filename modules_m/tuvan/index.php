<style type="text/css">
    .tu-van {width: 100%;float: left;margin: 10px 0;background: #e5e6e7;}
    .tu-van form {width: 100%;box-sizing: border-box;;float: left;padding: 2% 5%;}
    .wide-ip {width: 100%;float: left;border: 1px solid #888;padding: 2%;background: white;}
    .wide-ip span {width: 40px;height: 40px;background: #888;float: left;border-radius: 5px;}
    .wide-ip textarea {width: 80%;float: left;margin-left: 5%;height: 40px;border:0px;}
    .bottom-tv {width: 100%;float: left;border:1px solid #888;border-top: 0px;padding: 2%;box-sizing: border-box;}
    .bottom-tv span {font-size: 11px;font-style: italic;line-height: 24px;}
    .bottom-tv input {padding: 2%;box-sizing: border-box;color: white;background: #60a863;float: right;border:none;font-style: italic;font-size: 11px;}
</style>
<section class="tu-van">
    <img src="modules_m/tuvan/img/dat-cau-hoi.png">
    <form method="POST" action="">
        <div class="wide-ip">
            <span></span>
            <textarea rows="2" placeholder="Sức khỏe của bạn có vấn đề? Hỏi ngay bác sĩ...." name="sodienthoai"></textarea>
        </div>
        <div class="bottom-tv">
            <span>Bình lậu phải dài hơn 50 ký tự.</span>
            <input type="submit" name="btnSubmit" value="Đặt câu hỏi">
        </div>
    </form>
</section>