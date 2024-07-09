<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');
require_once('../inc/paging.php');


$pager = new Paging();
$link_url = "./board_list.php";
$total_cnt = 0;

$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$searchKey = isset($_GET['searchKey']) ? $_GET['searchKey'] : "";
$searchTxt = isset($_GET['searchTxt']) ? $_GET['searchTxt'] : "";

$start = ($page - 1) * 10;

$where = "";
$params = [];
if ($searchKey == "2") {
  $where = "WHERE title LIKE ?";
  $params[] = "%$searchTxt%";
} else if ($searchKey == "3") {
  $where = "WHERE contents LIKE ?";
  $params[] = "%$searchTxt%";
} else if ($searchKey == "4") {
  $where = "WHERE title LIKE ? OR contents LIKE ?";
  $params[] = "%$searchTxt%";
  $params[] = "%$searchTxt%";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- 파비콘 -->
    <link rel="icon" href="../../images/common/favicon.png" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- style css-->
  <link rel="stylesheet" href="../css/import.css">
  <!-- <link rel="stylesheet" href="../../css/common.css"> -->


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
  <form name="myform" id="myform" method="GET" action="board_list.php">
    <input type="hidden" name="p" id="p" value="<?= $page ?>">
    <input type="hidden" name="seq" id="seq" value="">
    

    <div class="container" style="margin-top:80px">
    <h2>고객의 의견</h2>
      <p>고객님의 소중한 의견을 겸손한 마음으로 접수하여<br>
           최대한 신속히 조치하겠습니다</p>

      <div class="input-group mb-3" style="margin-top:20px;">
        <select class="form-select-sm" id="searchKey" name="searchKey">
          <option value="1">선택</option>
          <option value="2" <?= $searchKey == "2" ? 'selected' : '' ?>>제목</option>
          <option value="3" <?= $searchKey == "3" ? 'selected' : '' ?>>내용</option>
          <option value="4" <?= $searchKey == "4" ? 'selected' : '' ?>>제목+내용</option>
        </select>
        <input type="text" class="form-control" placeholder="Search" id="searchTxt" name="searchTxt" value="<?= htmlspecialchars($searchTxt, ENT_QUOTES, 'UTF-8') ?>">
        <button class="btn btn-secondary" type="button" id="btnSearch">Go</button>
      </div>

      <table class="table table-hover">
        <colgroup>
          <col width="8%">
          <col width="*">
          <col width="12%">
          <col width="12%">
          <col width="8%">
        </colgroup>
        <thead class="table-secondary">
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
            <th>조회수</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql_count = "SELECT COUNT(*) as cnt FROM board_HYUNDAI $where";
          $stmt_count = $conn->prepare($sql_count);
          if ($params) {
            $stmt_count->bind_param(str_repeat('s', count($params)), ...$params);
          }
          $stmt_count->execute();
          $result_count = $stmt_count->get_result();
          if ($result_count) {
            $row_count = $result_count->fetch_assoc();
            $totalCnt = $row_count['cnt'];
          }
          $stmt_count->close();

          $sql = "
                SELECT * FROM (
                    SELECT seq, userid, title, contents, IFNULL(hit, 0) as hit,
                           DATE_FORMAT(regdate, '%Y-%m-%d') as regdate,
                           @rownum := @rownum + 1 AS rnum
                    FROM board_HYUNDAI A, (SELECT @rownum := 0) B
                    $where
                    ORDER BY seq DESC
                ) A
                LIMIT ?, 10";
          $stmt = $conn->prepare($sql);
          if ($params) {
            $types = str_repeat('s', count($params)) . 'i';
            $params[] = $start;
            $stmt->bind_param($types, ...$params);
          } else {
            $stmt->bind_param('i', $start);
          }
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $row['rnum'] ?></td>
              <td><a href="#none" onclick="goView('<?= $row['seq'] ?>')"><?= htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') ?></a></td>
              <td><?= htmlspecialchars($row['userid'], ENT_QUOTES, 'UTF-8') ?></td>
              <td><?= $row['regdate'] ?></td>
              <td><?= $row['hit'] ?></td>
            </tr>
          <?php
          }
          $stmt->close();
          $conn->close();
          ?>
        </tbody>
      </table>

      <div>
        <?= $pager->PageLinkView($link_url, $totalCnt, 10, $page) ?>
      </div>

      <div class="container mt-3" style="text-align:right;">
        <a href="#" class="btn btn-secondary" id="btnWrite">글쓰기</a>
        <a href="board_list.php" class="btn btn-primary">전체 목록</a>
      </div>

    </div>
  </form>

  
  <script>
  $(document).ready(function() {
    $("#btnSearch").click(function() {
      $("#myform").prop("action", "board_list.php");
      $("#myform").submit();
    });

    $("#searchKey").change(function() {
      if ($(this).val() == "1") {
        $("#searchTxt").val("");
      }
    });

    $("#btnWrite").click(function() {
      $("#myform").prop("action", "board_write.php");
      $("#myform").submit();
    });
  });

  function goView(id) {
    $("#seq").val(id);
    $("#myform").prop("action", "board_view.php");
    $("#myform").submit();
  }
</script>

<?php
include('../../footer.php');
?>
</body>

</html>



