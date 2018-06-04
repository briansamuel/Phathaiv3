<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
	session_start();

	// 
	require_once "lib/class_quanly.php";
	if(isset($qly_ql)==false) $qly_ql = new quanly;
	if(isset($_GET['p'])) $p = $_GET['p']; else $p = '';
	// link-chat
	$actual_link	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($actual_link, "?") === false)
	{
		$canonical_link = $actual_link;
	}
	else {
		$canonical_link = substr($actual_link, 0, strpos($actual_link, "?"));
	}
	$link_chat		= "http://mfp.zoosnet.net/LR/Chatpre.aspx?id=MFP16752728&amp;lng=en&p=".$actual_link;
	$link_fb		= '#';
	$link_tw		= '#';
	$link_gg		= '#';
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="http://phongkhamphathaisaigon.com/" />
	
	<title><?php include "blocks/title.php"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="vi" />
	<meta name="robots" content="index, follow, all" />
	<meta name="description" content="<?php include "blocks/des.php"; ?>" />
	<meta name="keywords" content="<?php include "blocks/keyword.php"; ?>">
	<link rel="canonical" href="<?php echo $canonical_link; ?>" />
	<?php include "blocks/facebook_meta.php"; ?>

	<!-- load library -->
	<?php include_once('css/layouttheme_css.php');?>
	<?php include_once('css/style.php');?>
	<?php include_once('css/animate.php');?>
	<?php include "js/jquery.php"; ?>
	<?php include "js/wow.min.php"; ?>
	<script src="http://phongkhamphathaisaigon.com/js/placeholderTypewriter.js"></script>
	<script type="application/ld+json">
{"@context": "http://schema.org","@type": "Organization","url": "http://phongkhamphathaisaigon.com/","logo": "http://phongkhamphathaisaigon.com/modules/header/img/logo.png"}
</script>
<script type="application/ld+json">{"@context": "http://schema.org","@type": "WebSite","url": "http://phongkhamphathaisaigon.com/","name" : "phongkhamphathaisaigon","alternateName" : "Phòng Khám Phá Thai Sài Gòn là trong nhữ phòng khám định chỉ thai kỳ uy tín an toàn không hiện nay"}</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115772423-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115772423-1');
</script>
</head>
	
	<!-- Header -->
	<?php include_once 'modules/header/index.php'; ?>
	<!-- END Header -->
	
	
	<!-- content -->
	<?php 
		if($p =='trangchitiet') {
			$TieuDeKD = $_GET['TieuDeKD'];
			if($TieuDeKD == 'gioi-thieu-phong-kham-pha-thai-sai-gon')
			{
				include "pages/gioithieu.php";
			}
			else if($TieuDeKD == 'lien-he-phong-kham-pha-thai-sai-gon')
			{
				include "pages/lien-he.php";
			}
			else
			{
					
				include "pages/trangchitiet.php";
			}
			
		}
		else if($p=='error') header('Location:http://phongkhamdakhoahongphong.vn/benh-gan/');
		else if($p=='trangloai'){
			$TieuDeKD = $_GET['TieuDeKD'];
			include "pages/trangloaicon.php";
			
			
			
		}
		else if($p=='trangtimkiem') include "pages/timkiem.php";
		else include "pages/phathai.php";
	?>

	<!-- Footer -->
	<?php include_once 'modules/footer/index.php'; ?>
	<?php include_once 'modules/popup-video/index.php'; ?>
	<?php include_once 'chat.php'; ?>
	<?php include "js/lazyload.php"; ?>
	<?php //include "chat.php"; ?>
    <script type="text/javascript">
    	$(function(){

	    	 setTimeout(function(){ 
		        $("img.bigthumb").lazyload();
		     }, 4000);
	         $("img.lazy").lazyload();
			$('a').each(function(){
				var is_nof = $(this).attr('href');
				if(is_nof)
				{
					if(is_nof.indexOf("mfp") >= 0)
					{
						 $(this).attr('rel','nofollow');
					}
				}
				$(this).attr('target','');
			});
			$('iframe').each(function(){
				$(this).attr('rel','nofollow');
			});
			$('img').each(function(){
			  var is_nof = $(this).attr('alt');
			  if(!is_nof){
				  $(this).attr('alt','phongkhamphathaisaigon.com');
			  }
			});
        });
    </script>
</body>
</html>


