<?php include_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">

</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <header class="container">
        <img src="" alt="">
    </header>
    <main class="container-fluid">
        <h3 class="text-center">網站標題管理</h3>
        <hr>
        <form action="" method="post">
            <table class="table table-bordered text-center">
                <tr>
                    <td>網站標題</td>
                    <td>替代文字</td>
                    <td>顯示</td>
                    <td>刪除</td>
                    <td></td>
                </tr>

                <?php
                $rows = $Title->all();
                foreach ($rows as $row) {
                ?>

                    <tr>
                        <td><img src="./img/<?=$row['img'];?>" style="width:300px;height:30px"></td>
                        <td><input type="text" name="" id="" value="<?=$row['text'];?>" style="width:90%"></td>
                        <td><input type="radio" name="" id=""></td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><input class="btn btn-primary" type="button" value="更新表單"></td>
                        <!-- button標籤預設是input:submit但我們沒有要送出表單 -->
                    </tr>
                <?php
                }
                ?>

            </table>
            <div class="d-flex justify-content-between">
                <!-- view寫的東西會載入cvr -->
                <!-- get do帶入參數的方式 -->
                <div><input type="button" onclick="op('#cover','#cvr','title.php')" value="新增網站標題圖片"></div>
                <div>
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </div>
                <div></div>
            </div>
        </form>

    </main>


    <script src="../js/bootstrap.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
</body>

</html>