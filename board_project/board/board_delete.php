<?php
require_once('../inc/dbConn.php');

$seq = isset($_POST['seq']) ? (int)$_POST['seq'] : 0;
$response = array('success' => false);

if ($seq > 0) {
  $sql = "DELETE FROM board_HYUNDAI WHERE seq = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $seq);

  if ($stmt->execute()) {
    $response['success'] = true;
  }

  $stmt->close();
}

$conn->close();
echo json_encode($response);
?>
