<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html>

<body>
    <form action="tintuc_xuly_them.php" method="post" enctype="multipart/form-data">
        <pre>
Mã loại <select name="maloai">
    <?php require_once __DIR__ . '/../loaitin/loaitin_select.php'; ?>
</select>
    
        

        Tên tin <input type="text" name="tentin">
        Tóm tắt <textarea name="tomtat"></textarea>
        Nội dung <textarea name="noidung"></textarea>
        Hình ảnh <input type="file" name="hinhanh">
        Tác giả <input type="text" name="tacgia">
        <input type="submit" value="Thêm"> <input type="reset" value="Hủy">
        </pre>
    </form>
</body>

</html>