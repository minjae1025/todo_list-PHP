<?php
$title = $_POST['title'];
$contents = $_POST['contents'];
$date = date("Y-m-d");
$status = "yet";
// echo $title.'<br>';
// echo $contents.'<br>';

$conn = mysqli_connect("localhost", "test", "1111", "testdb");
$sql = "select * from todos order by Id desc";
$result = mysqli_query($conn, $sql);

if ($conn) {
    echo "sucess";
}
else {
    echo "failed";
}

$sql = "insert into todos(Title, Description, Status, regDate) value('$title', '$contents', '$status', '$date')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<meta http-equiv="refresh" content="3;url=index.php">