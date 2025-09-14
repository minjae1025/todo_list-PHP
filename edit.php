<?php
include("db_conn.php");
$self = $_SERVER['PHP_SELF'];
$idx = $_GET['idx'];
$sql = "SELECT Title, Description FROM todos WHERE id=$idx;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$title = $row[0];
$desc = $row[1];
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <style>
        main {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <div id="titleBox">
            <h1 id="headerText">TODO App</h1>
        </div>
    </header>
    <main>
        <div id="formBox">
            <form action="<?= $self ?>?idx=<?= $idx ?>" method="post">
                <table>
                    <tr>
                        <td>제목</td>
                        <td><input type="text" name="title" value="<?= $title ?>"></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td><textarea name="desc"><?= $desc ?></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="완료">
                        </td>
                        <td>
                            <input type="button" value="취소" onclick="history.go(-1)">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </main>

</body>


<?php
if (!isset($_POST['title'])) {
    exit;
}

$new_title = $_POST['title'];
$new_desc = $_POST['desc'];
$sql = "update todos set Title='$new_title', Description='$new_desc' where Id=$idx;";

mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<meta http-equiv='refresh' content='1;url=index.php'>";
?>

