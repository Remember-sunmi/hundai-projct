<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

$page = (int)(StringUtil::nullToValue("p", "1"));
$searchKey = StringUtil::nullToValue("searchKey", "");
$searchTxt =StringUtil::nullToValue("searchTxt", "");
$seq =StringUtil::nullToValue("seq", "");
$mode =StringUtil::nullToValue("mode", "");
//echo $_POST["mode"];

$msg="";
$sql="";

if($mode=="insert")
{
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $userid = $_POST['userid'];
    $msg="등록성공";
    
    $sql="insert into board_HYUNDAI(userid, title, contents, regdate, hit) values('$title', '$contents', '$userid', now(), 0)";
    //echo $sql; 
    mysqli_query($conn, $sql);
}
else if($mode == "modify")
{
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $userid = $_POST['userid'];
    $seq = $_POST['seq'];
    $msg="수정성공";

    $sql = "update board_HYUNDAI set title='$title', contents='$contents', userid='$userid' where seq=$seq ";
    mysqli_query($conn, $sql);
}

else if($mode == "delete")
{
    $sql = "delete from board_HYUNDAI where seq= $seq";

    $msg="삭제성공";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);

?>

<script>
    alert("<?=$msg?>");
    location.href="board_list.php";
</script>

