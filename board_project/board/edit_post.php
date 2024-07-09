<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

// Retrieve parameters from the URL
$seq = isset($_GET['seq']) ? (int)$_GET['seq'] : 0;

if ($seq == 0) {
    echo "<script>alert('Invalid post ID.'); history.back();</script>";
    exit;
}

// Retrieve the post details from the database
$sql = "SELECT * FROM board_HYUNDAI WHERE seq = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $seq);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

if (!$post) {
    echo "<script>alert('Post not found.'); history.back();</script>";
    exit;
}

$title = htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8');
$contents = htmlspecialchars($post['contents'], ENT_QUOTES, 'UTF-8');

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
        <!-- 파비콘 -->
        <link rel="icon" href="../../images/common/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/import.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<div class="cursor"></div>
    <div class="cursor2">More</div>
    <script>
     let mouseCursor = document.querySelector(".cursor");
     let mouseCursorText = document.querySelector(".cursor2");
 
 
     window.addEventListener("scroll", cursor);
     window.addEventListener("mousemove", cursor);
     window.addEventListener("mousedown", cursor);
     window.addEventListener("mouseup", cursor);
 
 
 
     function cursor(e) {
       mouseCursor.style.left = e.pageX + "px";
       mouseCursor.style.top = e.pageY - scrollY + "px";
       mouseCursorText.style.left = e.pageX + "px";
       mouseCursorText.style.top = e.pageY - window.scrollY + "px";
     }
     document.addEventListener("DOMContentLoaded", function () {
       var links = document.querySelectorAll("img");
       var cursor = document.querySelector(".cursor");
 
       links.forEach(function (link) {
         link.addEventListener("mouseover", function () {
           mouseCursor.style.opacity = 0;
           mouseCursorText.style.opacity = 1;
         });
 
         link.addEventListener("mouseout", function () {
           mouseCursorText.style.opacity = 0;
           mouseCursor.style.opacity = 1;
         });
       });
     });
   </script>
          <?php include('../../header.php') ?>


<form name="myform" id="myform" method="post" action="update_post.php">
    <!-- Hidden input fields to pass parameters -->
    <input type="hidden" name="seq" id="seq" value="<?= $seq ?>">

    <!-- Navigation section -->


    <!-- Edit post form -->
    <div class="container" style="margin-top:80px">
        <h2>Edit Post</h2>
        <table class="table table-hover" style="margin-top:30px;">
            <tbody>
                <tr class="table-secondary">
                    <th>제목</th>
                    <td colspan="5"><input type="text" name="title" id="title" value="<?= $title ?>" style="width:100%;"></td>
                </tr>
                <tr>
                    <th colspan="6" class="table-secondary">내용</th>
                </tr>
                <tr>
                    <td colspan="6"><textarea name="contents" id="contents" rows="10" style="width:100%;"><?= $contents ?></textarea></td>
                </tr>
            </tbody>
        </table>

        <!-- Buttons for save and cancel -->
        <div class="container mt-3" style="text-align:right;">
            <button type="submit" class="btn btn-primary">저장</button>
            <a href="board_view.php?seq=<?= $seq ?>" class="btn btn-secondary">취소</a>
        </div>
    </div>
</form>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<?php include('../../footer.php') ?>

</body>
</html>
