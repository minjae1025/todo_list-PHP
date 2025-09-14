<?php
$title = $_POST['title'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - 입력</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css">
    <style>
        #formBox {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        h4 {
            text-align: center;
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
            <form action="insert.php" method="post">
                <h4>ToDo 추가</h4>
                <table>
                    <tr>
                        <td>제목 : </td>
                        <td><input type="text" name="title" value="<?= $title; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>내용 : </td>
                        <td><textarea name="contents" autofocus maxLength="40"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="완료"></td>
                        <td><input type="button" value="취소" onclick="history.go(-1)"></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>

</body>

</html>