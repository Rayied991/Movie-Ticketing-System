<?php
include("../Admin_Model/noticedb.php");

if(isset($_REQUEST['submit'])){
    $serial=$_REQUEST['serial'];
    $notice=$_REQUEST['notice'];
    $date=$_REQUEST['noticedate'];
    $mydb=new Notice();
    $conn=$mydb->opencon();
    $mydb->postnotice($serial,$notice,$date,"noticedb",$conn);

}


   

?>