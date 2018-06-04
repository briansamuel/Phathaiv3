<style type="text/css">
	.baiviet-lienquan {width: 100%;float: left;box-sizing: border-box;background: #e5e6e7; border: 1px solid #808080;}
	.baiviet-lienquan h3 {font-size: 1.1em;line-height: 1.2em;float: left;padding: 1% 0;box-sizing: border-box;color: #60a863;border-bottom: 2px solid black;margin-bottom: 2%;margin-left: 2%;margin-top: 1%;}
	.border-bvlq {width: 100%;padding: 2%;box-sizing: border-box;float: left;}
	.border-bvlq a {width: 100%;float: left;box-sizing: border-box;text-indent: 4%;position: relative;padding-left: 4%}
	.border-bvlq a h5 {font-weight: normal;padding: 1% 0;}
	.border-bvlq a:last-child {
		border-bottom: 0;
	}
	.border-bvlq a:before {
		position: absolute;
		content: "";
		width: 15px;height: 15px;
		background: url(images/baiviet/icon-xemthem.png);
		background-size: 15px 15px;
		top:4px;
		left: 0;
	}
</style>
<div class="baiviet-lienquan">
	<h3>XEM THÊM</h3>
	<div class="border-bvlq">
	<?php 
	$tinlq_2 = $qly_tin->ListTin_Where(-1,-1, 0, 3, '', '');
	if(mysql_num_rows($tinlq_2)>0) {
	while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>

		<a class="title-bvxt" href="<?=$rowlq['TieuDeKD'];?>.html"> 
		<h5><?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),40,' ...');?></h5>
		</a>
	<?php } 
		}
	?>
	</div>
</div>
