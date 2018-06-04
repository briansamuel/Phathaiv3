<style type="text/css">
	.menu-fix {
		width: 280px;
		position: fixed;
	    left: 0;
	    top: 0;
	    bottom: 0;
		background: white;
    	z-index: 98;
    	padding: 5%;
    	box-sizing: border-box;
    	border-right: 2px solid #006666;
    	-webkit-transform: translateX(-100%);
    	transform: translateX(-100%);
    	height: 100%;
    	overflow: scroll;
	}
	.header-logo-fix, .header-logo-fix img{
		width: 100%;
		float: left;
	}
	.header-logo-fix {
		padding-top: 60px;
	}
	.header-search-fix {
		width: 100%;
		margin-top: 20px;
		float: left;
		 padding: 5%;
		 box-sizing: border-box;
	}
	.header-search-fix form {
		width: 100%;
	    float: left;
	    padding: 2%;
	    box-sizing: border-box;
	    border-radius: 5px;
	    border: 1px solid #c4c4c4;
	    background: #2C556B;

	}
	.header-search-fix input{
		width: 86%;
	    height: 30px;
	    border: none;
	    float: left;
	    color: white;
	    background: none;
	    border: none;
	}
	.header-search-fix a {
		width: 14%;
		float: left;
	}
	.header-search-fix a img {
		    width: 30px;
	}
	.menu-sub {
		
		box-sizing: border-box;
		display: none;
	}
	nav.menu-mb-fix {
		margin-top: 20px;
	}
	
	nav.menu-mb-fix , nav.menu-mb-fix ul,nav.menu-mb-fix ul li {
		width: 100%;
		float: left;
	}
	nav.menu-mb-fix ul li {
		padding:5px 0;
	}
	ul.menu-sub li:nth-child(even)
	{
		background: #e2dfdf;
	}
	ul.menu-sub li:nth-child(odd)
	{
		background: #f3efef;
	}
	nav.menu-mb-fix ul>li>a{
		color: #0057b0;
	    font-size: 100%;
	    font-weight: bold;
	    position: relative;
	    padding-bottom: 5px;
	    width: 100%;
	    float: left;
	}
	.with--sidebar {
	    overflow: hidden !important;
	}
	.with--sidebar .menu-fix {
	    -webkit-transform: translateX(0px);
	    transform: translateX(0px);
	    z-index: 999999;
	}
	.with--sidebar .site-pusher {
	    -webkit-transform: translateX(280px);
	    transform: translateX(280px);
	}
	.site-pusher {
	    -webkit-transition-duration: 0.3s;
	    transition-duration: 0.3s;
	    -webkit-transform: translateX(0px);
	    transform: translateX(0px);
	    background: #fff;
	}
	.info-fix {
		position: fixed;
		top:60px;
		left: 0;
		z-index: 97;
    	background: white;
    	display: none;
    	float: left;
    	width: 84%;
	}
	.info-fix .info-line {
		width: 100%;
		float: left;
	}
	.left-info {
		width: 20%;
		float: left;
	}
	.right-info {
		width: 80%;
		float: left;
		padding: 5%;
	    box-sizing: border-box;
	    color: #3B61B9;
	}
	.left-info img,.left-info span {
		width: 100%;
		float: left;
		text-align: center;
	}
	.left-info span {
		padding: 5px 0;
	}
	.has-sub {
		position: relative;
	}
	.has-sub span {
	    position: absolute;
	    top: -5px;
	    right: 0;
	    width: 35px;
	    height: 35px;

	}
	.has-sub span.up {
		-ms-transform: rotate(180deg);
	    -webkit-transform: rotate(180deg);
	    transform: rotate(180deg);
	}
	.has-sub span img {
	    width: 15px;
	    height: 15px;
	    padding: 10px;
	}
	.right-info span {
		font-size: 16px;
	}
	#back-xem-them {
		display: none;
	}
	.back-panel #back-xem-them {
		display: block !important;
	}
	.back-panel #xem-them {
		display: none !important;
	}
	.btn-sidebar-fix {
		position: fixed;
		top:calc(50% - 16px);
		width: 32px;
		float: left;
		left: 0;
		z-index: 97;
	}
	.btn-sidebar-fix>img {
		width: 100%;
		z-index: 3;
    	position: relative;
	}
	.block-relative {
		position: relative;
	}
	.icon-sb {
		width: 40px;
	}
	.bg-sb {
		z-index: 1;
   	 	width: 82px;
    	position: absolute;
    	top: -107px;

	}
	.top-sb {
		z-index: 2;
	    top: -104px;
	    left: 4px;
	    position: absolute;
	}
	.left-sb {
		z-index: 2;
	    top: -53px;
	    left: 38px;
	    position: absolute;
	}
	.bottom-sb {
		z-index: 2;
	    top: -3px;
	    left: 4px;
	    position: absolute;
	}
	#sidebar-mn {
		display: none;
	}
	.menu-sub li a {
		position: relative;
		text-indent: 10px;
	}
</style>
<style type="text/css">
	 
	#box-shadow {
		width: 100%;
	    /* display: block; */
	    position: absolute;
	    left: 0;
	    top: 0;
	    display: none;
	    /* float: left; */
	    background: rgba(255, 255, 255, 0);
	    height: 100%;
	}
	.with--sidebar #box-shadow {
		display: block;
	}
	#show-sub:focus {
		border: 1px solid #2B388C;
	}
</style>
<div class="menu-fix">
	<img id="nav-back" src="modules_m/menu-fix/img/back-site.png" >
	<nav class="menu-mb-fix">
		<ul>
			<li class="has-sub"><a style="width: 50%;" class="menu-active" href=".">Trang chủ</a><span id="show-sub"><img src="modules_m/top-fix/img/exit2.png"></span></li>
			<li class="has-sub"><a>Danh mục bệnh</a>
				<ul class="menu-sub" style="display: block">
				  <?php 
					$cap2_bt = $qly_loai->ListLoai(1, 1, 0);
					while($row_bt_2 = mysql_fetch_assoc($cap2_bt)){
						?>
						 <li><a href="<?=$row_bt_2['TieuDeKD']?>/" target="_blank"><?=$row_bt_2['TieuDe']?></a>
							 <?php 
								$cap3_bt = $qly_loai->ListLoai(1, 1, $row_bt_2['idLoai']);
								if($cap3_bt){
									echo '<ul class="sub_v3">';
									while($row_bt_3 = mysql_fetch_assoc($cap3_bt)){
										?>
										 <li><a href="<?=$row_bt_3['TieuDeKD']?>/" target="_blank"><?=$row_bt_3['TieuDe']?></a></li>
										<?php
									}
									echo '</ul>';
								}
								?>	
						 </li>
						<?php
					}
					?>
				</ul>
			</li>
			<li><a href="lien-he-phong-kham-benh-gan-hong-phong.html">Liên hệ</a></li>
		</ul>
	</nav>
</div>

<script type="text/javascript">

    $(document).ready(function() {
    	var xemthem = false;
    	var menu = true,sb_menu = false;
    	$('#nav').click(function(){

            $('body').addClass('with--sidebar');

        });
        $('#nav-2').click(function(){
        	$('.top-fix').addClass('fix-scroll').addClass('scroll');
            $('body').addClass('with--sidebar');
        });
        $('.has-sub').click(function(){
  			
  			$('body').removeClass('with--sidebar');
            
        });
        $('#box-shadow').click(function(){
            $('body').removeClass('with--sidebar');
            
        });
    });
</script>