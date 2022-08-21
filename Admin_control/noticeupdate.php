<?php
include("../Admin_model/noticedb.php");

if(isset($_REQUEST['update'])){
    $serial=$_REQUEST['serial'];
    $notice=$_REQUEST['notice'];
    $date=$_REQUEST['noticedate'];
    $mydb=new Notice();
    $conn=$mydb->opencon();
   $mydb->updatenotice($serial,$notice,$date,"noticedb",$conn);
    

}

?>