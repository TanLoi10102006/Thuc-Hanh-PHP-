<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html>

<head>
    <style type="text/css">
    input {
        width: 180px;
        margin-bottom: 5px;
    }
    </style>
</head>

<body>
    <form action="process-add-myguest.php" method="POST">
        <pre>
 Họ: <input type="text" name="lastname" />
 Tên: <input type="text" name="firstname" />
 Email: <input type="text" name="email" />
 <input type="submit" value=" Lưu " />
 </pre>
    </form>
</body>

</html>