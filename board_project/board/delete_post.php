<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

// Retrieve parameters from the URL
$seq = isset($_GET['seq']) ? (int)$_GET['seq'] : 0;

if ($seq == 0) {
    echo "<script>alert('Invalid post ID.'); history.back();</script>";
    exit;
}

// Delete the post from the database
$sql = "DELETE FROM board_HYUNDAI WHERE seq = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $seq);

if ($stmt->execute()) {
    echo "<script>alert('Post deleted successfully.'); window.location.href='board_list.php';</script>";
} else {
    echo "<script>alert('Failed to delete post.'); history.back();</script>";
}

$stmt->close();
$conn->close();
?>
