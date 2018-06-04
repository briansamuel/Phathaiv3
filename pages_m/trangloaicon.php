<style type="text/css">
  .list-post {width: 100%;float: left;padding: 0 5%;box-sizing: border-box;}
  .post-ttm {width: 100%;float: left;margin: 2% 0;background: white;border-bottom: 1px dashed}
  .post-ttm img {width: 100%;height: 70px;float: left;}
  .post-ttm h5 {color: #2c777c;line-height: 1.5em;font-size: 1em;text-transform: uppercase;width: 100%;float: left;padding: 1% 2%;box-sizing: border-box;}
  .post-ttm p {width: 100%;float: left;padding: 2% 0;}
  .thumb-post-ttm {position: relative;width: 30%;float: left;}
  .right-info-post {width: 70%;padding-left: 2%;box-sizing: border-box;float: left;}
  .view-line {width: 100%;float: left;}
  .view-line span {float: left;}
  .view-line span i{float: left;font-size: 11px;}
  .list-categories {width: 100%;float: left;padding: 2% 5%;background: #e5e6e7;}
    .list-categories h3 {color: #db5959;position: relative;padding-left: 32px;
    font-size: 1.2em;
    line-height: 1.8em;
    padding-bottom: 1%;
    border-bottom: 1px solid #ec9797;}
    .list-categories h3:before {position: absolute;content: url(images/baiviet/danh-muc-benh.png);display: block;width: 10px;height: 10px;left: 0;top:0;}
    .list-item {width: 100%;float: left;padding: 3% 0;}
    .list-item a {width: 32%;float: left;margin-right: 2%;background: white;border-radius: 10px;}
    .list-item a:last-child {margin-right: 0;}
    .list-item a img {width: 50%;display: block;margin: 0 auto;}
    .list-item a span {font-size: 11px;width: 100%;float: left;text-align: center;padding: 5% 0;}
</style>
    <?php @include "blocks_m/br_3cap_trangloaicon.php"; ?>
    <div class="list-categories">
        <h3>DANH MỤC PHÁ THAI</h3>
        <div class="list-item">
            <a href="item-cat">
                <img src="images/baiviet/dm_phathai1.png">
                <span>Cẩm nang bệnh</span>
            </a>
            <a href="item-cat">
                <img src="images/baiviet/dm_phathai2.png">
                <span>Kiến thức mang thai</span>
            </a>
            <a href="item-cat">
                <img src="images/baiviet/dm_phathai3.png">
                <span>Phá thai không đau</span>
            </a>
        </div>
    </div>
    <div class="list-post">
        <?php while($row_tt = mysql_fetch_assoc($tt)){ ?>
        <?php 
            $dt = new DateTime($row_tt['NgayDang']);
        ?>
        <article class="post-ttm">
            <a class="thumb-post-ttm" href="<?=$row_tt['TieuDeKD'];?>.html"> 
              <img src="<?=$row_tt['UrlHinh'];?>">
              
            </a>
            <div class="right-info-post">
              <a href="<?=$row_tt['TieuDeKD'];?>.html"> 
                <h5><?=$qly_tin->cutString(strip_tags($row_tt['TieuDe']),55,' ...');?></h5>
              </a>
              <div class="view-line">
                
                <span style="padding-right: 5px;width: 40%;" class="luot-xem"><i>Lượt xem <?=$row_tt['LuotXem'];?> </i></span>
                  <span style="padding-left: 5px;width: 60%;" class="ngaydang"><i>| Ngày đăng <?=$dt->format('d/m/Y');?> </i></span>
              </div>
              
              
            </div>
            <p><?=$qly_tin->cutString(strip_tags($row_tt['TomTat']),155,' ...');?></p>
            
          </article>
        <?php } ?>
        
    </div>
    <div class="clear20"></div>
    <div class="list_pages">
        <?php if($totalRows > $pageSize) { ?>
            <div class="phantrang">
                <?php $urlchinh = $TenLoaiConKD;?>
                <?php echo $qly_tin->pagesList1($urlchinh, $totalRows, $pageNum, $pageSize, 2); ?>
            </div>
        <?php } ?>
    </div>
    <style type="text/css">
      .chuyendebenh {width: 100%;float: left;}
      .chuyendebenh span, .chuyendebenh h3 {text-align: center;width: 100%;float: left;}
      .chuyendebenh a {width: 49%;float: left;border-radius: 10px;margin-right: 2%;color: white;padding: 6% 3%;box-sizing: border-box;margin-bottom: 2%;}
      .chuyendebenh a:nth-child(even){margin-right: 0;}
    </style>
    <div class="chuyendebenh padding-mobie">
        <span>CHUYÊN ĐỀ BỆNH</span>
        <h3 style="color: #db595e;">KẾ HOẠCH HÓA GIA ĐÌNH</h3>
        <div class="clear20"></div>
        <div class="list-chuyende">
          <a style="background: #60a863" href="<?=$link_chat;?>" target="_blank">Chuyên đề<br>NẠO HÚT THAI AN TOÁN</a>
          <a style="background: #4fb0ad" href="<?=$link_chat;?>" target="_blank">Chuyên đề<br>PHÁ THAI BẰNG THUỐC</a>
          <a style="background: #9e91be" href="<?=$link_chat;?>" target="_blank">Chuyên đề<br>PHÁ THAI<br>AN TOÁN</a>
          <a style="background: #2c777c" href="<?=$link_chat;?>" target="_blank">Chuyên đề<br>PHÒNG KHÁM PHÁ THAIAN TOÀN</a>
        </div>
        <div class="clear20"></div>
        <a style="width: 100%;padding: 0 10%;" href="<?=$link_chat;?>" target="_blank">
          <img src="images/baiviet/clickgif.gif">
        </a>
    </div>
    <?php @include "modules_m/tuvan/index.php"; ?>