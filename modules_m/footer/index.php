<style type="text/css">
	.footer-nav, .footer-nav ul {width: 100%;float: left;}
	.footer-nav ul li {float: left;width: 22%;}
	.footer-nav ul li.home {width: 12%;}
	.footer-nav a {padding: 2%;
    box-sizing: border-box;
    color: #2c7772;
    font-size: 11px;
    line-height: 23px;
    text-align: center;
    width: 100%;
    float: left;position: relative;}
    .footer-nav a:before {width: 1px;height: 10px;content: "";background: #2c7772;right: -2px;top:7px;position: absolute;ms-transform: rotate(25deg); /* IE 9 */
    -webkit-transform: rotate(25deg); /* Chrome, Safari, Opera */
    transform: rotate(25deg);}
	footer {width: 100%;float: left;margin-bottom: 55px;}
	footer h2 {
		font-size: 1.4em;
	    color: #383737;
	    font-family: fantasy;
	    letter-spacing: 2.7px;
	    text-align: center;
	    margin-top: 5%;
	}
	footer .sub-title {font-size: 1.2em;text-align: center;    margin-bottom: 2%;
    display: block;}
	@media (max-width: 320px)
	{
		footer h2 {font-size: 1.2em}
		footer .sub-title {font-size: 1em}
	}
	.line-footer {width: 100%;height: 1px;width: 70%;display: block;margin: 0 auto;background: black;}
	.left-footer {width: 45%;float: left;}
	.right-footer {width: 55%;float: left;padding-left: 2%;}
	.line-text {width: 100%;float: left;margin-bottom: 4%;}
	.line-text img {float: left;width: 30px;}
	.text-r {width: calc(100% - 30px);float: left;padding-left: 3%;}
	.text-r span {width: 100%;float: left;font-size: 10px;}
	.line-social {width: 100%;float: left;margin-top: 8%;}
	.line-social a {width: 20%;float: left;}
</style>
<div class="footer-nav">
	<ul>
		<li class="home"><a href="."><img style="width: 20px;" src="modules_m/header/img/trang-chu.png"></a></li>
		<li><a href="<?=$link_chat;?>">GIỚI THIỆU</a></li>
		<li><a href="<?=$link_chat;?>">PHỤ KHOA</a></li>
		<li><a href="<?=$link_chat;?>">PHÁ THAI</a></li>
		<li><a href="<?=$link_chat;?>">LIÊN HỆ</a></li>
	</ul>
</div>
<footer class="padding-mobie bge5e6e7">
	<h2>PHÒNG KHÁM PHÁ THAI SÀI GÒN</h2>
	<span class="sub-title">160-162 Lê Hồng Phong, P.3, Q.5, TP.HCM</span>
	<div class="line-footer"></div>
	<div class="clear20"></div>
	<div class="left-footer">
		<a href="https://goo.gl/maps/zd8feVtzWd42" target="_blank">
			<img src="modules_m/footer/img/map.png">

		</a>
	</div>
	<div class="right-footer">
		<div class="line-text" style="border-bottom:1px dashed black;padding-bottom: 4%;">
			<img src="modules_m/footer/img/dt.png">
			<div class="text-r">
				<a><b>(028) 3924 5555</b></a>
				<span>Bác sĩ tư vấn trực tuyến</span>
			</div>
		</div>
		<div class="line-text">
			<img src="modules_m/footer/img/time.png">
			<div class="text-r">
				<a><b>08h00 - 20h00</b></a>
				<span>Tất cả các ngày không nghỉ</span>
			</div>
		</div>
		<div class="line-social">
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/footer/img/fb.png">
			</a>
			<a href="<?=$link_chat;?>" target="_blank" style="margin: 0 20%;">
				<img src="modules_m/footer/img/tt.png">
			</a>
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/footer/img/gg.png">
			</a>
		</div>
	</div>
</footer>