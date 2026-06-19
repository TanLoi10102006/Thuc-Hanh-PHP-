<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style type="text/css">
    body {
        display: table-cell;
        margin-left: auto;
        margin-right: auto;
        vertical-align: middle;
    }

    input[type="text"] {
        width: 250px;
        margin-top: 3px;
        margin-bottom: 3px;

    }

    textarea {
        width: 250px;
        margin-top: 2px;
        margin-bottom: 2px;
    }

    input[type="submit"] {
        width: 121px;
        margin-top: 3px;
        margin-bottom: 3px;
    }

    input[type="reset"] {
        width: 121px;
        margin-top: 3px;
        margin-bottom: 3px;
    }

    pre {
        background-color: white;
        box-shadow: 10px 10px 5px #888888;
        padding: 25px;
        vertical-align: center;
    }
    </style>
</head>

<body>
    <form action="tintuc_xuly_sua.php" method="post" enctype="multipart/form-data">
        <?php
        require_once '../database/dbcon.php';
        $id = $_GET["id"];
        $sql = "select * from tintuc where matin = " . $id;
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_array($result)) {
        ?>
        <pre>
Mã tin <input type="text" name="matin" value="<?php echo $row["matin"] ?>" 
readonly>
Mã loại <?php require_once "../loaitin/loaitin_select.php"; ?>
Tên tin <input type="text" name="tentin" value="<?php echo $row["tentin"] ?>">
Tóm tắt <textarea name="tomtat"><?php echo $row["tomtat"] ?></textarea>
Nội dung <textarea name="noidung"><?php echo $row["noidung"] ?></textarea>
Hình ảnh <input type="text" name="hinhanhcu" value="<?php echo $row["hinhanh"] ?>" 
readonly>
Đổi ảnh <input type="file" name="hinhanhmoi">
Tác giả <input type="text" name="tacgia" value="<?php echo $row["tacgia"] ?>">
Nổi bật <input type="text" name="tinnoibat" value="<?php echo
                                                    $row["noibat"] ?>">
Trạng thái <input type="text" name="trangthai" value="<?php echo $row["trangthai"] ?>">
<input type="submit" value="Lưu thay đổi"> <input type="reset" value="Hủy">
</pre>
        <?php
        }
        mysqli_close($conn);
        ?>
    </form>
</body>

</html>