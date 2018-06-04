<style type="text/css">
	.title-moitruong span {width: 100%;float: left;}
	#slide-mt {padding: 2%;box-sizing: border-box;width: 100%;float: left;border:1px solid #e5e6e7;}
</style>
<script type="text/javascript">
    
    $(document).ready(function() {

        $("#slide-mt").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 2,
		  	itemsDesktop : [1000,2], // 2 items between 1000px and 901px
		  	itemsDesktopSmall : [900,2], // betweem 900px and 601px
		  	itemsTablet: [700,2], // 2 items between 600 and 480
		  	itemsMobile : [479,2] , // 1 item between 479 and 0
            navigation: false,
            navigationText: ["<img src='modules_m/truyenthong/img/arrow-left.png'>","<img src='modules_m/truyenthong/img/arrow-right.png'>"],
            pagination: false,
            lazyLoad: true,
            scrollPerPage : true

        });

    });
</script>
<section class="moi-truong padding-mobie">
	<div class="title-moitruong">
		<h3 class="cl4fb0ad">PHÒNG KHÁM PHỤ KHOA - PHÁ THAI</h3>
		<span>UY TÍN TẠI SÀI GÒN</span>
		<span><b>"Trao niềm tin - nhận sức khỏe"</b></span>
	</div>
	<div class="clear10"></div>
	<div id="slide-mt">
		<div class="item">
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/moitruong/img/mtpk.png">
			</a>
		</div>
		<div class="item">
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/moitruong/img/mtpk1.png">
			</a>
		</div>
		<div class="item">
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/moitruong/img/mtpk3.png">
			</a>
		</div>
		<div class="item">
			<a href="<?=$link_chat;?>" target="_blank">
				<img src="modules_m/moitruong/img/mtpk4.png">
			</a>
		</div>
	</div>
</section>