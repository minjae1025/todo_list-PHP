<?php
include("db_conn.php");
$sql = "delete from todos where id=".$_GET['idx'].";";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<meta http-equiv='refresh' content='0;url=index.php'>