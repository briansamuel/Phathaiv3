<?php //error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
	session_start();

	// 
	require_once "lib/class_quanly.php";
	if(isset($qly_ql)==false) $qly_ql = new quanly;
	if(isset($_GET['p'])) $p = $_GET['p']; else $p = '';
	// link-chat
	$actual_link	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$link_chat		= "http://mfp.zoosnet.net/LR/Chatpre.aspx?id=MFP16752728&amp;lng=en&p=".$actual_link;
	$link_fb		= $link_chat;
	$link_tw		= $link_chat;
	$link_gg		= $link_chat;
	$tel_number = '02839245580';
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="http://phongkhamphathaisaigon.com/" />
	<link href="img/favicon.jpg" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title><?php include "blocks/title.php"; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="vi" />
	<?php include "blocks/robot.php"; ?>
	<meta name="description" content="<?php include "blocks/des.php"; ?>" />
	<meta name="keywords" content="<?php include "blocks/keyword.php"; ?>">
	<?php include "blocks/facebook_meta.php"; ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>" />

	<!-- load library -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<?php include "css_m/style.php"; ?>
	<?php include "css_m/owlcarousel.php"; ?>
	<?php include "css_m/owltheme.php"; ?>

	<?php include "js_m/jquery.php"; ?>

	<?php 
	if(isset($_POST['btnSubmit']))
	{
		if($_POST["sodienthoai"] != ""){
			if(is_numeric($_POST["sodienthoai"])) {
				$hoten = $_POST["HoTen"];
				$trieuchung = $_POST["BenhChung"];
				
				$ghichu = $hoten.' - '.$trieuchung.' - '.$ngayhen.' - '.$giohen;
				$qly_ql->LienHe4($ghichu);
			}
			else
			{
				echo "<script>alert('Số điện thoại không bao gồm chữ cái')</script>";	
			}
			
		}
		else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";
	}
	?>
	<!-- //menu top -->
	

	<script type="text/javascript" src="js_m/waypoints.min.js"></script>
	<script type="text/javascript" src="js_m/script.js"></script>
	<?php include "js_m/owl.php"; ?>
	
	<script type="text/javascript">
    $(function(){

    	 setTimeout(function(){ 
	        $("img.bigthumb").lazyload();
	     }, 4000);
         $("img.lazy").lazyload({
			    skip_invisible : true
			});

        });
    </script>
</head>
<body>
	<!-- Header -->
	
	<?php include "modules_m/phonemb/index.php"; ?>
	<?php include_once "modules_m/menu-fix/index.php"; ?>
	<?php include "modules_m/top-fix/index.php"; ?>
	<?php include "modules_m/header/index.php"; ?>
	<!-- END Header -->
	
	<div class="full-width">
	<!-- content -->
	<?php 
		if($p =='trangchitiet') {
			$TieuDeKD = $_GET['TieuDeKD'];
			if($TieuDeKD == 'gioi-thieu-phong-kham-pha-thai-sai-gon')
			{
				include "pages_m/gioithieu.php";
			}
			else if($TieuDeKD == 'lien-he-phong-kham-pha-thai-sai-gon')
			{
				include "pages_m/lien-he.php";
			}
			else
			{
				include "pages_m/trangchitiet.php";
			}
			
		}
		else if($p=='error') header('Location:http://phongkhamdakhoahongphong.vn/benh-gan/');
		else if($p=='trangloai'){
			include "pages_m/trangloaicon.php";
			
			
		}
		else if($p=='trangtimkiem') include "pages_m/timkiem.php";
		else include "pages_m/trangchu.php";
	?>


	<?php include_once "modules_m/footer/index.php"; ?>
	<!-- footer-bottom -->
	<div id="box-shadow"></div>
	
	</div>
	<?php include_once "modules_m/bottom-ft-tbd/index.php"; ?>
	<?php //include_once "analytics.php"; ?>
	<?php include_once "js_m/lazyload.php"; ?>
	
	
	
	<?php //include_once "popup_km.php"; ?>
	
	<?php include_once "chat.php"; ?>
    
</body>
</html>


