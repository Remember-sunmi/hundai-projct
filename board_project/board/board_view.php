<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');




// Retrieve parameters from the URL
$seq = isset($_GET['seq']) ? (int)$_GET['seq'] : 0;

if ($seq == 0) {
    echo "<script>alert('Invalid post ID.'); history.back();</script>";
    exit;
}

// Increment the hit count
$sql = "UPDATE board_HYUNDAI SET hit = hit + 1 WHERE seq = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $seq);
$stmt->execute();
$stmt->close();

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
$userid = htmlspecialchars($post['userid'], ENT_QUOTES, 'UTF-8');
$regdate = $post['regdate'];
$hit = $post['hit'];
$contents = htmlspecialchars($post['contents'], ENT_QUOTES, 'UTF-8');

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
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

<form name="myform" id="myform" method="post" action="edit_post.php">
    <!-- Hidden input fields to pass parameters -->
    <input type="hidden" name="seq" id="seq" value="<?= $seq ?>">

    <!-- Navigation section -->
    <?php require_once('../../header.php'); ?>

    <!-- Display post details -->
    <div class="container" style="margin-top:80px">
        <h2>View Post</h2>
        <table class="table table-hover" style="margin-top:30px;">
            <tbody>
                <tr class="table-secondary">
                    <th>제목</th>
                    <td colspan="5"><?= $title ?></td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td><?= $userid ?></td>
                    <th>작성일</th>
                    <td><?= $regdate ?></td>
                    <th>조회수</th>
                    <td><?= $hit ?></td>
                </tr>
                <tr>
                    <th colspan="6" class="table-secondary">내용</th>
                </tr>
                <tr>
                    <td colspan="6"><pre><?= $contents ?></pre></td>
                </tr>
            </tbody>
        </table>

        <!-- Buttons for edit, delete, and return to list -->
        <div class="container mt-3" style="text-align:right;">
            <button type="button" class="btn btn-primary" onclick="editPost()">수정</button>
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">삭제</button>
            <a href="board_list.php" class="btn btn-secondary">목록</a>
        </div>
    </div>
</form>

<!-- Modal for delete confirmation -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function editPost() {
        window.location.href = 'edit_post.php?seq=<?= $seq ?>';
    }

    function confirmDelete() {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
            keyboard: false
        });
        document.getElementById('confirmDeleteBtn').onclick = function () {
            window.location.href = 'delete_post.php?seq=<?= $seq ?>';
        };
        deleteModal.show();
    }
</script>
</body>

<?php
require_once('../../footer.php');
?>
</html>


