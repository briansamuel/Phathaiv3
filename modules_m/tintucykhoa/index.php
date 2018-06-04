<style type="text/css">
	.tintuc-ykhoa {
		width: 100%;
		float: left;
		padding: 2% 5%;
		box-sizing: border-box;
	}
	.list-ttyk {width: 100%;float: left;}
	.title-list-ttyk {width: 100%;float: left;padding: 2%;position: relative;}
	.title-list-ttyk h3 {font-size: 1.2em;color: white;font-weight: normal;}
	.title-list-ttyk a {color: white;font-weight: bold;position: absolute;right: 28px;
    top: 23%;}
	.title-list-ttyk span {color: white;font-weight: bolder;font-size: 1.8em;position: absolute;
    right: 5px;
    top: 13%;}
    .list-dmnk {width: 100%;float: left;margin-top: 10px;clear: both;}
    .list-dmnk li {width: 100%;float: left;margin-bottom: 3%;}
    .list-dmnk li img {width: 40%;float: left;max-height: 105px;}
    .list-dmnk li .right-post {width: 60%;padding: 0 2%;float: left;}
</style>
<section class="tintuc-ykhoa">
	<img src="modules_m/tintucykhoa/img/tin-tuc-label.png">
	<div id="list-phukhoa" class="list-ttyk">
		<div class="title-list-ttyk bg2c7772">
			<h3>TIN TỨC PHỤ KHOA</h3>
			<a href="benh-phu-khoa/" target="_blank">Xem thêm</a>
			<span>+</span>
		</div>
		<div class="clear"></div>
		<ul class="list-dmnk">
				<?php 
				$tinlq_2 = $qly_tin->ListTin_Where(-1,-1, 0, 4, '', '');
				if(mysql_num_rows($tinlq_2)>0) {
				while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
				<li><a href="<?=$rowlq['TieuDeKD'];?>.html">
					<img src="<?=$rowlq['UrlHinh'];?>">
					<div class="right-post">
		 			<h5><?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),30,' ...');?></h5>
		 			<p ><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),70,' ...');?>
	 					  	</p>
	 				</div>
					</a>
				</li>
				<?php } 
					}
				?>
					
		</ul>
	</div>
	<div class="clear"></div>
	<div id="list-phathai" class="list-ttyk">
		<div class="title-list-ttyk bgdb595e">
			<h3>TIN TỨC PHỤ KHOA</h3>
			<a href="pha-thai/" target="_blank">Xem thêm</a>
			<span>+</span>
		</div>
		<div class="clear"></div>
		<ul class="list-dmnk">
				<?php 
				$tinlq_2 = $qly_tin->ListTin_Where(-1,-1, 0, 4, '', '');
				if(mysql_num_rows($tinlq_2)>0) {
				while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
				<li><a href="<?=$rowlq['TieuDeKD'];?>.html">
					<img src="<?=$rowlq['UrlHinh'];?>">
					<div class="right-post">
		 			<h5><?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),30,' ...');?></h5>
		 			<p ><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),70,' ...');?>
	 					  	</p>
	 				</div>
					</a>
				</li>
				<?php } 
					}
				?>
					
		</ul>
	</div>
</section>