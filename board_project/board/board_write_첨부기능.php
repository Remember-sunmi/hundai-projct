<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

$page = (int)(StringUtil::nullToValue("p", "1"));
$searchKey = StringUtil::nullToValue("searchKey", "");
$searchTxt = StringUtil::nullToValue("searchTxt", "");
$seq = StringUtil::nullToValue("seq", "");

$sql = "UPDATE board SET hit = hit + 1 WHERE seq = $seq";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM board WHERE seq = $seq";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$title = $row["title"];
$userid = $row["userid"];
$regdate = $row["regdate"];
$hit = $row["hit"];
$contents = $row["contents"];
$attachment = $row["attachment"];

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form name="myform" id="myform" method="get">
    <input type="hidden" name="p" id="p" value="<?= $page ?>">
    <input type="hidden" name="searchTxt" id="searchTxt" value="<?= $searchTxt ?>">
    <input type="hidden" name="searchKey" id="searchKey" value="<?= $searchKey ?>">
    <input type="hidden" name="seq" id="seq" value="<?= $seq ?>">
    <input type="hidden" name="mode" id="mode" value="">

    <?php include('../../header.php') ?>

    <div class="container" style="margin-top:80px">
        <h2>Post Details</h2>
        <table class="table table-hover" style="margin-top:30px;">
            <tbody>
                <tr class="table-secondary">
                    <th>Title</th>
                    <td colspan="5"><?= $title ?></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><?= $userid ?></td>
                    <th>Date</th>
                    <td><?= $regdate ?></td>
                    <th>Views</th>
                    <td><?= $hit ?></td>
                </tr>
                <tr>
                    <th colspan="6" class="table-secondary">Content</th>
                </tr>
                <tr>
                    <td colspan="6"><?= nl2br($contents) ?></td>
                </tr>
                <?php if ($attachment): ?>
                <tr>
                    <th colspan="6" class="table-secondary">Attachment</th>
                </tr>
                <tr>
                    <td colspan="6"><a href="../uploads/<?= $attachment ?>" download>Download Attachment</a></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="container mt-3" style="text-align:right;">
            <button type="button" class="btn btn-secondary" id="btnModify">Edit</button>
            <button type="button" class="btn btn-secondary" id="btnDelete">Delete</button>
            <button type="button" class="btn btn-secondary" id="btnList">List</button>
        </div>
    </div>
</form>

<script>
$(function() {
    $("#btnModify").click(function() {
        $("#mode").val("modify");
        $("#myform").prop("action", "board_write.php");
        $("#myform").submit();
    });

    $("#btnDelete").click(function() {
        if (confirm("Do you want to delete this post?")) {
            $("#mode").val("delete");
            $("#myform").prop("action", "board_proc.php");
            $("#myform").submit();
        }
    });

    $("#btnList").click(function() {
        $("#myform").prop("action", "board_list.php");
        $("#myform").submit();
    });
});
</script>
</body>
</html>