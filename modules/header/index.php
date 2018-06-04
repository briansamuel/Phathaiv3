<div class="wrapper" id="wrapper_contact">
    <div class="main">
        <div class="contact_icon">
            <a class="s_plus" target="_blank" title="Google+" href="<?=$link_gg;?>">
                <div class="icon">
                    <div class="icon_gg"></div>
                </div>
            </a>
            <a class="icon_zalo zalo-share-button"  style="overflow: hidden; display: inline-block;">
                <div class="icon">
                    <div class="icon_zalo"></div>
                </div>
                
            </a>
            <a class="s_facebook" title="Facebook" href="<?=$link_fb;?>">
                <div class="icon">
                    <div class="icon_fb"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="main">
    <div class="banner_logo">
        <a href="." title="Phòng khám phá thai Sài Gòn">
            <div class="logo_1"><img src="modules/header/img/logo.png" alt="Phòng khám phá thai Sài Gòn"></div>
        </a>
        <div class="logo_2"></div>
        <div class="logo_3">
            <a rel="nofollow" href="<?=$link_chat;?>" title="Gọi để tư vấn với bác sĩ"><img src="modules/header/img/tong-dai_gif.gif" alt="logo_1"></a>
        </div>
    </div>
</div>
<!-- Menu -->
<div class="wrapper" id="wrapper_menu">
    <div class="main">
        <div id="menu-top">
            <div class="main">
                <ul>
                    <li><a class="home" title="Phòng khám đa khoa Thành Đức" href=".">Trang chủ</a></li>
                    <li>
                        <a title="Giới thiệu" href="gioi-thieu-phong-kham-pha-thai-sai-gon.html">Giới thiệu</a>
                        
                    </li>
                    <li>
                        <a title="Điều trị" href="#">Hạng mục điều trị</a>
                        <ul>
                            <li><a href="phu-khoa/"><span>Phụ khoa</span></a>
                                <ul>
                                    <?php 
                                    $cap3_bt = $qly_loai->ListLoai(1, 1, 6,-1);
                                    while($row_bt = mysql_fetch_assoc($cap3_bt)){ ?>
                                    <li>
                                    <a target="_blank" href="<?=$row_bt['TieuDeKD']?>/" title="">
                                      <?=$row_bt['TieuDe']?>
                                    </a>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="/pha-thai/"><span>Phá thai</span></a>
                                <ul>
                                    <?php 
                                    $cap3_bt = $qly_loai->ListLoai(1, 1, 5,-1);
                                    while($row_bt = mysql_fetch_assoc($cap3_bt)){ ?>
                                    <li>
                                    <a target="_blank" href="<?=$row_bt['TieuDeKD']?>/" title="">
                                      <?=$row_bt['TieuDe']?>
                                    </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a href="<?=$link_chat;?>" target="_blank" title="Tư Vấn" rel="nofollow">Tư vấn</a>
                    </li>
                    <li><a title="Chat Online" href="<?=$link_chat;?>" target="_blank" rel="nofollow">Đặt hẹn Online</a>
                    </li>
                    <li><a title="Liên hệ" href="lien-he-phong-kham-pha-thai-sai-gon.html" rel="nofollow">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <div class="form_find">
            <form method="post" action="">
                <div class="find_btt form-submit">
                    <input id="input_find" required="" type="text" class="form-control" name="search" placeholder="Tìm kiếm bệnh ..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tìm kiếm bệnh ...'">
                    <input type="submit" id="find_top" name="submit" class="submit" value="">
                </div>
            </form>
        </div>
    </div>
</div>