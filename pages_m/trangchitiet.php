<style type="text/css">
    .title-h2 {color: #2c777c;}
    .content-main {width: 100%;float: left;padding: 5%;}
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
    .title-h1 {width: 100%;
    float: left;
    padding-bottom: 5px;
    box-sizing: border-box;
    font-size: 1.4em;
    text-transform: capitalize;
    color: #2c777c;}
    .ngaydang {background: #f0ce9754;padding: 2% 2px;margin: 3% 0;}
    .ngaydang, .ngaydang span {width: 100%;float: left;font-size: 10px;}
    .ngaydang .luotxem {position: relative;padding-left: 15px;}
    .ngaydang .luotxem:before {position: absolute;left: 0;top: 0;content: "";background: url(images/baiviet/luot-xem.png);    width: 13px;
    height: 10px;
    background-size: 13px 10px;display: block;}
    .danhgia {position: relative;}
    .danhgia:before {position: absolute;content: "";background: url(images/baiviet/danh-gia.png);right: 0;top:-3px;background-size: 18px  16px;;width: 18px;height: 16px} 
</style>
    
    <?php @include "blocks_m/br_3cap_trangchitiet.php"; ?>
    
    
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
    <div class="body-main content-main">
        <h1 class="title-h1"><?=$row['TieuDe'];?></h1>
        <div class="ngaydang">
            <?php 
                $dt = new DateTime($row['NgayDang']);
            ?>
            <span style="width: 35%;" class="w1 luotxem">Lượt xem: <?=$row['LuotXem'];?></span>
            <span style="width: 45%" class="w2 ">Ngày Đăng: <?=$dt->format('d/m/Y');?></span>
            <span style="width: 20%;" class="w1 danhgia">Đánh giá: </span>
        </div>
        <div class="border-content">
        <?php 
        $noidung = str_replace('{link_chat}', $link_chat, $row['NoiDung']);
        $noidung = str_replace('{tuvan}', '<p style="
                text-align: center;
            "><a target="_blank" href="'.$link_chat.'" style="
                position: relative;
                top: 0px;
            "><img src="images/baiviet/box-tu-van-gif.gif" style="
                width: auto;
            "></a></p>', $noidung);
         $noidung = str_replace('{btn_sdt}', '<p style="
                text-align: center;
            "><a target="_blank" href="'.$link_chat.'" style="
                
                position: relative;
                top: 0px;
            "><img src="images/baiviet/box-tu-van-gif.gif" style="
                width: auto;
            "></a></p>', $noidung);
        ?>
        <?=$noidung;?>
        <p style="
                text-align: center;
            "><a target="_blank" href="<?=$link_chat;?>" style="
                
                position: relative;
                top: 0px;
            "><img src="images/baiviet/box-tu-van-gif.gif" style="
                width: auto;
            "></a></p>
        </div>
        <div class="clear20"></div>
        <?php @include "modules_m/baivietlienquan/index.php"; ?>
    </div>
    <?php @include "modules_m/tuvan/index.php"; ?>
    <div class="clear"></div>
    