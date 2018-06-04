<?php 

	$TieuDeKD = $qly_tin->XoaDinhDang($_GET['TieuDeKD']);

	$idLoai = $qly_loai->LayID($TieuDeKD);
	settype($idLoai,"int");

	$pageSize=10;

	$pageNum = $_GET['pageNum']; settype($pageNum,"int");

	if($pageNum<=0) $pageNum = 1;

	if($idLoai > 0){

		//cap cuoi

		$TenLoai = $qly_loai->LayTieuDe($idLoai);

		$TenLoaiKD = $qly_loai->LayTieuDeKD($idLoai);

		$h1 = $TenLoai;

		$bread = "<a href='".$TenLoaiKD."-".$idLoai."/'>".$TenLoai."</a>";

		$tlkd = $TenLoaiKD."-".$idLoai;

		$TenLoaiCon = $TenLoai;

		$TenLoaiConKD = $TenLoaiKD;

		$idCon = $idLoai;

		// lay loai cha

		$idCha = $qly_loai->LayIDCha($idLoai);

		if($idCha!=0){

			$TenLoai = $qly_loai->LayTieuDe($idCha);

			$TenLoaiKD = $qly_loai->LayTieuDeKD($idCha);		

			$bread = "<a href='".$TenLoaiKD."-".$idCha."/'>".$TenLoai."</a> > ".$bread;

			$TenLoaiCha = $TenLoai;

			$TenLoaiChaKD = $TenLoaiKD;

			

			$idOng = $qly_loai->LayIDCha($idCha);

			if($idOng!=0){

			$TenLoai = $qly_loai->LayTieuDe($idOng);

			$TenLoaiKD = $qly_loai->LayTieuDeKD($idOng);

			$TenLoaiOng = $TenLoai;

			$TenLoaiOngKD = $TenLoaiKD;

			

			$bread = "<a href='".$TenLoaiKD."-".$idOng."/'>".$TenLoai."</a> > ".$bread;

			}

		}

		$tt = $qly_tin->ListTinLoai($idLoai, $totalRows, $pageNum, $pageSize);

	}else {

		$tt = $qly_tin->TimKiem($TieuDeKD, $totalRows, $pageNum, $pageSize);

	}

?>
<style type="text/css">
	.title-br {width: 100%;float: left;margin-top: 10px;padding: 0 5%;box-sizing: border-box;}
</style>
<div class="title-br">
   <div class="titlea">
      <p>
      	<a href=".">Trang chủ</a> &gt; 
      	<?php if($idLoai > 0) { ?>

	        <?php if($idOng>0){ ?>

				 <a href="<?php echo $TenLoaiOngKD; ?>/"><?php echo $TenLoaiOng; ?></a> &gt; 
				 <?php $TenLoai = $TenLoaiOng;?>
			<?php } ?>

	       	<?php if($idCha > 0){ ?>

				<a href="<?php echo $TenLoaiChaKD; ?>/"><?php echo $TenLoaiCha; ?></a> &gt;
				<?php $TenLoai = $TenLoaiCha;?>
			<?php } ?>

			<?php if($idCon > 0){ ?>

				<a href="<?php echo $TenLoaiConKD; ?>/"><?php echo $TenLoaiCon; ?></a>
				<?php $TenLoai = $TenLoaiCon;?>
				
			<?php } ?>

			<?php } else { ?>

			<img src="images/mobile/arrow.png" alt=""> 

			<span itemprop="title">Tìm Kiếm</span></a>

			<img src="images/mobile/arrow.png" alt=""> 

			<span itemprop="title"><?php echo $_GET['TieuDeKD']; ?></span>

			<?php } ?>

   </div>
</div>
<style type="text/css">
	.namkhoa-hm .head-hm {width: 100%;position: relative;padding: 10px 0;background: #00a3c8;}
	.namkhoa-hm .head-hm h3 {box-sizing: border-box;color: white;font-weight: normal;font-size: 20px;padding-left: 50px;}
	.namkhoa-hm .head-hm:before {
		position: absolute;
		content: "";
		background: url(modules/tintuc/img/icon-nam-khoa.png);
		width: 27px;
		height: 32px;
		left: 6px;
		top:5px;
	}
	.namkhoa-hm .head-hm span {float: right;margin-top: -7px;}
	.top-list-post {width: 100%;display: inline-block;padding: 0 5%;box-sizing: border-box;}
</style>
<div class="clear10"></div>
