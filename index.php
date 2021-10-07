<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baju</title>
    <style>
        p{font-size: 24px; font-family: Verdana, Geneva, Tahoma, sans-serif;}
    </style>
</head>
<body>
    <?php
    $baju = 17;
    $bawa = 50;
    $hasil = $bawa;
    $harga = 0;
    $count = 0;
    while ($hasil >= $baju){
        $hasil = $hasil - $baju;
        $count = $count + 1;
        $harga = $harga + $baju;
    }
    ?>
    <p>
        Saya membawa RM <?php echo $bawa; ?>. Baju sehelai berharga RM <?php echo $baju; ?>.
        Saya dapat membeli <?php echo $count;?> helai baju dengan jumlah RM <?php echo $harga;?>
        berbaki harga RM <?php echo $hasil;?>.
    </p>
</body>
</html>