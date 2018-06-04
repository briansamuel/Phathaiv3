<aside id="side_bar">
    <div class="hangmucdieutri">
        <div class="hangmuc">Hạng mục điều trị</div>
    </div>
    <div class="category-list">
        <ul>
            <li class="parent_item">
                <div class="category-title"><a href="/phu-khoa/" title="Phụ khoa"><span>Phụ khoa</span></a></div>
                <div class="list">
                    <ul>
                        <?php 
                                    $cap3_bt = $qly_loai->ListLoai(1, 1, 6,-1);
                                    while($row_bt = mysql_fetch_assoc($cap3_bt)){ ?>
                                    <li>
                                    <a target="_blank" href="<?=$row_bt['TieuDeKD']?>/" title="">
                                      <span><?=$row_bt['TieuDe']?></span>
                                    </a>
                                    </li>
                                    <?php } ?>
                    </ul>
                </div>
            </li>
            
            <li class="parent_item active_parent">
                <div class="category-title"><a href="/pha-thai/" title="Kế hoạch hóa GD"><span>Phá Thai</span></a></div>
                <div class="list">
                    <ul>
									<?php 
                                    $cap3_bt = $qly_loai->ListLoai(1, 1, 5,-1);
                                    while($row_bt = mysql_fetch_assoc($cap3_bt)){ ?>
                                    <li>
                                    <a target="_blank" href="<?=$row_bt['TieuDeKD']?>/" title="">
                                      <span><?=$row_bt['TieuDe']?></span>
                                    </a>
                                    </li>
                                    <?php } ?>
                    </ul>
                </div>
            </li>
            <li style="display:none" class="parent_item">
                <div class="category-title"><a href="goc-benh-nhan.html" title="Góc bệnh nhân"><span>Góc bệnh nhân</span></a></div>
            </li>
        </ul>
    </div>
    <!-- Form Tư vấn Sidebar -->
    <style type="text/css">
        .form-tuvan {position: relative;width: 100%;float: left;}
        .form-tuvan form {position: absolute;left: 0;right: 0;margin: 0 auto;    bottom: 0px;
    padding: 0 5%;
    box-sizing: border-box;}
        .form-tuvan input[type="text"],.form-tuvan textarea {width: 100%;float: left;margin-bottom: 10px;padding: 5px;border-radius: 10px;box-sizing: border-box;border:1px solid black;}
        .btnSubmit {
    width: 105px;
    margin: 0 auto;
    display: block;
    margin-top: 3px;
    margin-bottom: 2px;
    padding: 10px;
    color: white;font-weight: bold;
    background: none;
    /* float: left; */
}
    </style>
    <div class="form-tuvan">
        <img src="modules/sidebar/img/tu-van-gif.gif">
        <form method="POST" action="">
            <input type="text" name="HoTen" placeholder="Họ Tên">
            <input type="text" name="sodienthoai" placeholder="Số ĐT">
            <textarea placeholder="Vấn đề bạn gặp phải" name="TrieuChung"></textarea>
            <input type="submit" name="btnSubmit" class="btnSubmit" value="GỬI NGAY">
        </form>
    </div>
</aside>
<script type="text/javascript">
    $(".category-title").click(function(){
        $(".parent_item").not($(this).parent()).removeClass("active_parent");
     $(this).parent().toggleClass("active_parent");
    });
</script>