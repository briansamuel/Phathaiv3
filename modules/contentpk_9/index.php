<div class="contentpk_9">
    <div class="main">
        <div class="title_pk">
            <h2><span>KIẾN THỨC Y KHOA</span> CHO BẠN VUI KHỎE MỖI NGÀY</h2>
        </div>
        <div class="box_main8" data-wow-duration="1.5s">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,-1, 0, 6, '', '');
            if(mysql_num_rows($tinlq_2)>0) {
            while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
            <div class="contentbox_main8">
                <div class="img_box">
                    <a href="<?=$rowlq['TieuDeKD'];?>.html" target="_blank"><img alt="<?=$rowlq['TieuDe'];?>" src="<?=$rowlq['UrlHinh'];?>" style="max-height: 140px;width: 100%;"></a>
                </div>
                <a title="<?=$rowlq['TieuDe'];?>" href="<?=$rowlq['TieuDeKD'];?>.html" target="_blank">
                    <div class="title_boxmain8">
                       <?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),30,' ...');?></div>
                </a>
                <div class="content_boxmain8"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),70,' ...');?></div>
                <div class="div_red">
                    <div class="red_more"><a title="<?=$rowlq['TieuDe'];?>" href="<?=$rowlq['TieuDeKD'];?>.html" target="_blank">Xem chi tiết</a></div>
                </div>
            </div>
            <?php } 
                }
            ?>
        </div>
    </div>
</div>  