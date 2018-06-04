<?php 
    require_once "lib/class_ratings.php";
    if(isset($qly_rt)==false) $qly_rt = new rating;
    $ip_user_current = $qly_ql->getClientIP();
    $content_vote = $qly_rt->VotebyId($idTT);
    $row_vote = mysql_fetch_assoc($content_vote);
    $_SESSION["idTin_DaXem"] = $idTT;
    $percent_avg = ( $row_vote['total_value'] / $row_vote['total_votes'] ) ;
    $percent = round($percent_avg* 25,2);
    $total_votes = $row_vote['total_votes'];
    $check_vote = $qly_rt->checkVote($idTT,$ip_user_current);
    if(!$check_vote)
    {
        $percent_avg = 0;
        $percent = 0;
        $total_votes  = 0;
    }
    $check_ip = $qly_rt->checkIP($idTT,$ip_user_current);
?>
<?php include_once('css/danhsachbaiviet.php');?>
<?php include_once('css/chitietbaiviet.php');?>
<?php include_once('modules/banner/index.php');?>
<div class="main">
  <?php include_once('blocks/br_3cap_trangchitiet.php');?>
  <div class="div_inner">
    <?php include_once('modules/sidebar/index.php');?>
    <div class="vbaiviet">
        <div class="tieudebv">
          <h1><?=$row['TieuDe'];?></h1>
        </div>
        <div class="custombv">
            <?php include_once('modules/sidebar/index.php');?>
        </div>
        <div class="noidungbv">
            <?=$row['NoiDung'];?>
        </div>
    </div>
  </div>
</div>
