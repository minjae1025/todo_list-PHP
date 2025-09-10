<?php
$conn = mysqli_connect("localhost", "test", "1111", "testdb");
$sql = "delete from todos where id=".$_GET['idx'].";";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>