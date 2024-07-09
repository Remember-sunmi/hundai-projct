<?php
$conn = mysqli_connect( 'localhost', 'greenwebstory', 'green!2000', 'greenwebstory');
//한글 깨짐 해결 
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
?>