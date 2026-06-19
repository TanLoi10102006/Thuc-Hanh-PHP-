<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai10</title>
</head>

<body>
    <?php 
    $lophoc=array(
        array("L001","Công nghệ thông tin"),
        array("L002","Kế toán "),
        array("L003","Tài chính"),
        array("L004","Xây dựng")
    );
    for ($i=0; $i < count($lophoc); $i++) { 
        echo "Mã lớp: ".$lophoc[$i][0]." - Tên lớp: ".$lophoc[$i][1]."<br>";
    }

    ?>

</body>

</html>