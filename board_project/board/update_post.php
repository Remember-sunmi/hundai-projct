<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

// Retrieve parameters from the POST request
$seq = isset($_POST['seq']) ? (int)$_POST['seq'] : 0;
$title = isset($_POST['title']) ? $_POST['title'] : '';
$contents = isset($_POST['contents']) ? $_POST['contents'] : '';

if ($seq == 0 || $title == '' || $contents == '') {
    echo "<script>alert('Invalid input.'); history.back();</script>";
    exit;
}

// Update the post details in the database
$sql = "UPDATE board_HYUNDAI SET title = ?, contents = ? WHERE seq = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $title, $contents, $seq);

if ($stmt->execute()) {
    echo "<script>alert('Post updated successfully.'); window.location.href = 'board_view.php?seq=$seq';</script>";
} else {
    echo "<script>alert('Failed to update post.'); history.back();</script>";
}

$stmt->close();
$conn->close();
?>
