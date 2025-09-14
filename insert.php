<?php
include("db_conn.php");
$title = $_POST['title'];
$contents = $_POST['contents'];
$date = date("Y-m-d");
$status = "yet";
// echo $title.'<br>';
// echo $contents.'<br>';

$sql = "select * from todos order by Id desc";
$result = mysqli_query($conn, $sql);

if ($conn) {
    ?>
    <script>
        alert("추가 성공!")
    </script>
    <?php
    echo "success";
}
else {
    ?>
    <script>
        alert("추가 실패!")
    </script>
    <?php
    echo "failed";
}

$sql = "insert into todos(Title, Description, Status, regDate) value('$title', '$contents', '$status', '$date')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<meta http-equiv="refresh" content="0;url=index.php">