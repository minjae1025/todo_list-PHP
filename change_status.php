<?php
include("db_conn.php");
$idx = $_GET['idx'];

$select_sql = "SELECT Status FROM todos WHERE id='$idx';";
$result = mysqli_query($conn, $select_sql);
$re = mysqli_fetch_row($result);
$change_value = $re[0] == 'yet' ? 'complete' : 'yet';
$update_sql = "UPDATE todos SET Status='$change_value' WHERE id='$idx';";
mysqli_query($conn, $update_sql);
?>
<script>
    alert("상태 변경 성공!")
</script>
<meta http-equiv="refresh" content="0;url=index.php?">