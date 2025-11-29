[PHP Control Statements Secondact.php](https://github.com/user-attachments/files/23833788/PHP.Control.Statements.Secondact.php)
<?php
require "product.php";
$total = count($product);
$i = 0;
while ($i < $total) {
    $i++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gadget Store</title>

    <style>
        body {
            font-family: Arial;
            background: #3c3c3cff;
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #970000ff;
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
