<?php
$product = ["RAZER DEATHADDER V4 PRO", "AULA F75", "NVISION MONITOR 30INCH", "ROG GAMING CHAIR"];
$price   = ["3000 pesos", "1500 pesos", "6000 pesos", "8000 pesos"];
$total = count($product);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gadget Store</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f9;
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .product-box {
            width: 50%;
            margin: 15px auto;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-name {
            font-weight: bold;
            font-size: 18px;
        }
        .price {
            color: #444;
        }
    </style>
</head>
<body>

<h1>GADGET STORE</h1>

<p style="text-align:center;">
    Meron tayong apat na produkto na naka discount ngayon BERMONTHS!!!!
</p>

<?php
for ($i = 0; $i < $total; $i++) {
    echo "<div class='product-box'>";
    echo "<div class='product-name'>" . $product[$i] . "</div>";
    echo "<div class='price'>Price: " . $price[$i] . "</div>";
    echo "</div>";
}
?>

</body>
</html>
