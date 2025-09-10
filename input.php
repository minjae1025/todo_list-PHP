<?php
$title = $_POST['title'];
echo $title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - 입력</title>
</head>
<body>
    <form action="insert.php" method="post">
        <p>해야할 일</p>
        <input type="text" name="contents">
        <input type="hidden" name="title" value="<?=$title; ?>">
        <input type="submit" value="입력완료">
    </form>
</body>
</html>