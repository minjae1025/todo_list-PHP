<?php
include("db_conn.php");
$sql = "select * from todos order by Id desc";
$result = mysqli_query($conn, $sql);
$length = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <style>
        #inputFrom {
            text-align: center;
        }

        #inputBox {
            margin: 10px;
        }

        #mainBox {
            display: flex;
            justify-content: center;
        }

        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .status {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        th {
            text-align: center;
        }
        @media (max-width: 767px) {
            .table {
                width: 100%;
            }
        }
        @media (min-width: 768px) {
            .table {
                width: 85%;
            }
        }
        @media (min-width: 992px) {
            .table {
                width: 70%;
            }
        }
    </style>
</head>

<body>
    <header>
        <div id="titleBox">
            <h1 id="headerText">TODO App</h1>
        </div>
        <div id="inputBox">
            <form action="input.php" method="post" id="inputFrom">
                <input type="text" name="title" id="input_title">
                <input type="submit" value="추가하기">
            </form>
        </div>
    </header>
    <main>
        <div id="mainBox">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>regDate</th>
                        <th>ETC</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $length; $i++) {
                        echo "<tr>";
                        $re = mysqli_fetch_row($result);

                        echo '<td>' . $re[0] . "</td>";
                        echo '<td>' . $re[1] . "</td>";
                        echo '<td>' . $re[2] . "</td>";
                        echo "<td class='status'><a href='change_status.php?idx=$re[0]'>$re[4]</a></td>";
                        echo '<td class="regDate">' . $re[3] . "</td>";
                        echo '<td>' ?><a href="edit.php?idx=<?php echo $re[0] ?>">수정</a> / <a
                            href="delete.php?idx=<?php echo $re[0] ?>"> 삭제</a><?php
                               echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </main>
</body>

</html>

<?php
mysqli_close($conn);
?>