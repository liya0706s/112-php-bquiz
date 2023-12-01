<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷管理後台</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
    <header class="container">
        <h1 class="text-center">問卷管理後台</h1>
    </header>
    <main class="container p-3">
        <fieldset>
            <legend>新增問卷</legend>
            <form action="add_que.php" method="post">
                <!-- 名稱 -->
                <div class="d-flex">
                    <div class="col-3 bg-light p-2">問卷名稱</div>
                    <div class="col-6 p-2">
                        <input type="text" name="subject" id="">
                    </div>
                </div>
                <!-- 選項 -->
                <div class="bg-light">
                    <div class="p-2" id="option">
                        <label for="">選項</label>
                        <input type="text" name="opt[]">
                        <input type="button" value="更多" onclick="more()">
                        <!-- onclick時執行more()這個函數程式 -->
                    </div>
                </div>
                <div class="mt-3">
                    <input type="submit" value="新增">
                    <input type="reset" value="清空">
                </div>
            </form>
        </fieldset>


    </main>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>
<!-- 用js做增加更多選項 -->
<script>
    function more() {
        // 用上引號，新增的一塊還是字串
        let opt = `<div class="p-2">
                        <label for="">選項</label>
                        <input type="text" name="opt[]">
                    </div>`
                // 在option這個id前面放一個opt
                $("#option").before(opt)
    }
</script>