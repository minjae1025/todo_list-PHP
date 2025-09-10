<?php
$conn = mysqli_connect("localhost", "test", "1111", "testdb");
$self = $_SERVER['PHP_SELF'];
$idx = $_GET['idx'];
$sql = "SELECT Title, Description FROM todos WHERE id=$idx;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$title = $row[0];
$desc = $row[1];
?>
<form action="<?=$self?>?idx=<?=$idx?>" method="post">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="<?=$title?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="desc" value="<?=$desc?>"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="완료">
            </td>
        </tr>
    </table>
    
    
    
</form>

<?php
if (!isset($_POST['title'])) {
    exit;
}

$new_title = $_POST['title'];
$new_desc = $_POST['desc'];
$conn = mysqli_connect("localhost", "test", "1111", "testdb");
$sql = "update todos set Title='$new_title', Description='$new_desc' where Id=$idx;";

mysqli_query($conn, query: $sql);
mysqli_close($conn);
?>

<meta http-equiv="refresh" content="3;url=index.php">
