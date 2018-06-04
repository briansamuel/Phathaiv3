<div class="clear"></div>
<style type="text/css">
  .body-main {width: 100%;float: left;background: white;padding-top: 20px;}
  .body-noidung {background: #cddded}
  .post-ttm {width: 100%;float: left;margin: 2% 0;background: white;}
  .post-ttm img {width: 100%;height: 180px;}
  .post-ttm h5 {color: #0057b0;line-height: 26px;font-size: 20px;font-weight: normal;width: 100%;float: left;margin: 10px 0;height: 52px;padding: 0 2%;box-sizing: border-box;}
  .thumb-post-ttm {position: relative;width: 35%;float: left;}
  .view-line {float: left;width: 100%;padding: 0px 2%;box-sizing: border-box;}
  .link-more, .luot-xem {width: 35%;float: left;position: relative;text-indent: 20px;color: #ccc}
  .link-more:before {position: absolute;content: "";width: 16px;height: 11px;background: url(img/tim-hieu-them.png);left: 0;top:2px;}
  .luot-xem:before {position: absolute;content: "";width: 14px;height: 12px;background: url(img/xem.png);left: 0;top:2px;}
  .post-ttm p {padding: 2%;box-sizing: border-box;float: left;}
  .post-ttm p a {color: #bd1e2d}
  .post-date {position: absolute;right: 0;bottom: 0;background: #0057b0;width: 43px;padding: 2px;box-sizing: border-box;}
  .post-date span {width: 100%;float: left;text-align: center;color: white}
  .post-date .post-day {font-size: 23px;font-weight: bold;}
  .post-date .post-month {font-size: 9px;}
  .post-date .post-year {font-size: 16px;}
  .title-sec {width:300px;margin: 0 auto;text-align: center;padding-bottom: 10px;border-bottom:2px solid #00a3c8;position: relative;}
  .title-sec h3 {font-weight: normal;font-size: 20px;}
  .title-sec h3:before {position: absolute;background: url(modules/tintucmoi/img/line.png);left: 0;right: 0;margin:0 auto;bottom:-9px;width: 60px;height: 18px;content: "";background-color: white;}
  .border-max {width: 100%;float: left;background: #f5f5f5}
  .right-info-post {width: 65%;float: left;padding-left: 2%;box-sizing: border-box;position: relative;height: 180px;}
  .bottom-btn {position: absolute;right: 0;bottom: 0;width: 188px;}
  .bottom-btn a {width: 50%;float: left;text-align: center;font-weight: bolder;color: white;padding: 10px;box-sizing: border-box;}
  .bottom_post_tv {background: #ffc309}
  .bottom_post_xt {background: #0057b0;}
</style>
<div class="max1100">
  <div class="body-main">
    <div class="max1000">
      <?php include_once('blocks/br_3cap_trangloai.php');?>
      <div class="body-noidung">
          <?php 
          while($row_tt = mysql_fetch_assoc($tt)){ ?>
          <?php 
            $dt = new DateTime($row_tt['NgayDang']);
          ?>
          <article class="post-ttm">
            <a class="thumb-post-ttm" href="<?=$row_tt['TieuDeKD'];?>.html"> 
              <img src="<?=$row_tt['UrlHinh'];?>">
              <div class="post-date">
                <span class="post-day"><?=$dt->format('d');?></span>
                <span class="post-month">Tháng <?=$dt->format('m');?></span>
                <span class="post-year"><?=$dt->format('Y');?></span>
              </div>
            </a>
            <div class="right-info-post">
              <a href="<?=$row_tt['TieuDeKD'];?>.html"> 
                <h5><?=$qly_tin->cutString(strip_tags($row_tt['TieuDe']),160,' ...');?></h5>
              </a>
              <div class="view-line">
                <a href="<?=$row_tt['TieuDeKD'];?>.html" class="link-more" target="_blank"><i>Tìm hiểu thêm</i></a>
                <span class="luot-xem"><i>Lượt xem <?=$row_tt['LuotXem'];?> </i></span>
              </div>
              <p ><?=$qly_tin->cutString(strip_tags($row_tt['TomTat']),170,' <a href="'.$row_tt['TieuDeKD'].'.html"><i>[...]</i></a>');?>
              </p>
              <div class="bottom-btn">
                <a href="<?=$link_chat;?>" target="_blank" class="bottom_post_tv">TƯ VẤN</a>
                <a href="<?=$link_chat;?>" target="_blank" class="bottom_post_xt">XEM THÊM</a>
              </div>
            </div>
          </article>    
          <?php } ?>
          <?php if(mysql_num_rows ($tt) < 1)
          {
            echo '<h2>Không tìm được bài viết chưa từ khóa này</h2>';
          }
          ?>
          <div class="clear20"></div>
          <div class="list_pages">
            <?php if($totalRows > $pageSize) { ?>
                      <div class="phantrang">
                        <?php $urlchinh = $TenLoaiConKD; 

                            ?>
                            <?php echo $qly_tin->pagesList1($urlchinh, $totalRows, $pageNum, $pageSize, 2); ?>
                      </div>
                  <?php } ?>
          </div>
          <div class="clear20"></div>
      </div>
      <?php include_once('modules/sidebar/index.php');?>
    </div>
    <?php include_once('modules/truyenthong/index.php');?>
  </div>
</div>
<div class="clear20"></div>