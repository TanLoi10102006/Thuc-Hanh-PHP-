<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai6</title>
</head>

<body>
    <?php 
    function writeName($fname,$punctuation){
        echo $fname."Refsnes".$punctuation."<br>"; 
    }
    echo "My name is: ";
    writeName("Kai Jim",".");
    echo "My sister's name is: ";
    writeName("Hege","!");
    echo "My brother's name is: ";
    writeName("Stale","?");
    
    ?>

</body>

</html>