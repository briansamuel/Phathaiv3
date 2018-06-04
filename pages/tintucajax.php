<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
require_once "../lib/class_tintuc.php";
if(isset($qly_tin)==false) $qly_tin = new qly_tin;
$parent = $_POST['parent'];
$sub_parent = $_POST['sub_parent'];
?>
<div class="list-post" >
                <div class="big-post">
                    <?php 
                    $tinlq_2 = $qly_tin->ListTin_Where($sub_parent,$parent,0 , 1, '', '');
                    if(mysql_num_rows($tinlq_2)>0) {
                    while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                    <a href="<?=$rowlq['TieuDeKD'];?>.html"> 
                        <img src="<?=$rowlq['UrlHinh'];?>">
                    </a>
                    <a href="<?=$rowlq['TieuDeKD'];?>.html"> 
                        <h5><?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?></h5>
                    </a>
                    <p ><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),120,' ...');?>
                    </p>
                    <?php } 
                        }
                    ?>
                </div>
                <div class="list-small-post">
                    <?php 
                    $tinlq_2 = $qly_tin->ListTin_Where($sub_parent,$parent,1 , 4, '', '');
                    if(mysql_num_rows($tinlq_2)>0) {
                    while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                    <?php 
                        $dt = new DateTime($rowlq['NgayDang']);
                    ?>
                    <div class="small-post">
                        <a class="thumb-post" href="<?=$rowlq['TieuDeKD'];?>.html"> 
                            <img src="<?=$rowlq['UrlHinh'];?>">
                        </a>
                        <div class="right-info">
                            <a class="title-post" href="<?=$rowlq['TieuDeKD'];?>.html"><h5><?=$qly_tin->cutString(strip_tags($rowlq['TieuDe']),120,' ...');?></h5></a>
                            <span style="width: 50%;float: left;"><?=$dt->format('d/m/Y');?></span>
                            <a style="width: 50%;float: left;color:#bd1e2d " href="<?=$rowlq['TieuDeKD'];?>.html">Tìm hiểu thêm</a>
                        </div>
                    </div>
                    <?php } 
                       }
                    ?>
                </div>
            </div>