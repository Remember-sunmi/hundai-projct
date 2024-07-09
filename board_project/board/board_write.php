<?php
// Include necessary files for database connection and common functions
require_once('../inc/dbConn.php');
require_once('../inc/common.php');



// Define variables and initialize with empty values
$userid = $title = $contents = "";
$userid_err = $title_err = $contents_err = "";

// If form is submitted, process the data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate user ID
    if (empty(trim($_POST["userid"]))) {
        $userid_err = "Please enter your user ID.";
    } else {
        $userid = trim($_POST["userid"]);
    }

    // Validate title
    if (empty(trim($_POST["title"]))) {
        $title_err = "Please enter a title.";
    } else {
        $title = trim($_POST["title"]);
    }

    // Validate contents
    if (empty(trim($_POST["contents"]))) {
        $contents_err = "Please enter the contents.";
    } else {
        $contents = trim($_POST["contents"]);
    }

    // Check input errors before inserting into database
    if (empty($userid_err) && empty($title_err) && empty($contents_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO board_HYUNDAI (userid, title, contents, regdate, moddate, hit) 
                VALUES (?, ?, ?, NOW(), NOW(), 0)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_userid, $param_title, $param_contents);

            // Set parameters
            $param_userid = $userid;
            $param_title = $title;
            $param_contents = $contents;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to board_list.php after successful submission
                header("location: board_list.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
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
    <div class="container mt-5">
        <h2>글쓰기</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="userid" class="form-label">성함:</label>
                <input type="text" class="form-control <?php echo (!empty($userid_err)) ? 'is-invalid' : ''; ?>" id="userid" name="userid" value="<?php echo $userid; ?>">
                <span class="invalid-feedback"><?php echo $userid_err; ?></span>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">제목:</label>
                <input type="text" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?php echo $title; ?>">
                <span class="invalid-feedback"><?php echo $title_err; ?></span>
            </div>
            <div class="mb-3">
                <label for="contents" class="form-label">내용:</label>
                <textarea class="form-control <?php echo (!empty($contents_err)) ? 'is-invalid' : ''; ?>" id="contents" name="contents" rows="5"><?php echo $contents; ?></textarea>
                <span class="invalid-feedback"><?php echo $contents_err; ?></span>
            </div>
            <button type="submit" class="btn btn-primary">완료</button>
            <a href="board_list.php" class="btn btn-secondary">취소</a>
        </form>

    </div>


        <?php
require_once('../../footer.php');
?>
</body>

</html>



