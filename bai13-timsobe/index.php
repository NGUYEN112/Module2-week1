<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tìm số nhỏ nhất sd phương thức</title>
</head>
<body>
    <?php
    $array = [6,3,7,93,73,4,7,2];
    $min = $array[0];
    $index = 0;
    function minarr($array,$min,$index) {
        for ($i = 1; $i<count($array) ; $i++ ) {
            if ($array[$i] < $min) {
                $min = $array[$i];
                $index = $i;
            }
        }
        echo "số nhỏ nhất trong mảng ở vị trí : " .$index;
        return $index;
    }
    minarr($array,$min,$index);
    ?>
</body>
</html>