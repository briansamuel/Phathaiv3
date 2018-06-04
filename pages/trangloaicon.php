<?php include_once('css/danhsachbaiviet.php');?>
<?php include_once('modules/banner/index.php');?>
<div class="main">
  <?php include_once('blocks/br_3cap_trangloai.php');?>
  <div class="div_inner">
    <?php include_once('modules/sidebar/index.php');?>
    <div class="vrightlist">
      <div class="categories_title">
          <h1><?=$Current_Loai;?></h1></div>
        <div class="bvnb">
            <div class="box__iteamtnb">
            </div>
            <?php 
            while($row_tt = mysql_fetch_assoc($tt)){ ?>
            <?php 
              $dt = new DateTime($row_tt['NgayDang']);
            ?>
            <div class="article-blog">
                <div class="article_img">
                    <a class="link-image" title="<?=$row_tt['TieuDe'];?>" href="<?=$row_tt['TieuDeKD'];?>.html">
                        <img alt="<?=$row_tt['TieuDe'];?>" src="<?=$row_tt['UrlHinh'];?>">
                        <div class="hover"></div>
                    </a>
                </div>
                <div class="title">
                    <h2><a title="<?=$row_tt['TieuDe'];?>" href="<?=$row_tt['TieuDeKD'];?>.html"><?=$row_tt['TieuDe'];?></a></h2>
                </div>
                <div class="details">
                    <?=$qly_tin->cutString(strip_tags($row_tt['TomTat']),160,' ...');?></div>
                <div class="icon_view"><img src="assets/public/imghome/icon_view.png"> Lượt xem: <?=$row_tt['LuotXem'];?></div>
                <div class="clear"></div>
            </div>
            <?php } ?>
            <?php if(mysql_num_rows ($tt) < 1)
            {
              echo '<h2>Danh mục này chưa có bài viết</h2>';
            }
            ?>
            <div id="pagination">
              <?php if($totalRows > $pageSize) { ?>
                  <div class="phantrang">
                    <?php $urlchinh = $TenLoaiConKD;?>
                    <?php echo $qly_tin->pagesList1($urlchinh, $totalRows, $pageNum, $pageSize, 2); ?>
                  </div>
              <?php } ?>
            </div>
        </div>
    </div>
  </div>
</div>
