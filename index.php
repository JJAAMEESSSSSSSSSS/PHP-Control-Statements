<?php
declare(strict_types=1);
$products = [
    "Classic Hotdog" => ["price" => 15, "stock" => 12],
    "Cheese Hotdog" => ["price" => 20, "stock" => 8],
    "Jumbo Hotdog" => ["price" => 30, "stock" => 6],
    "Chili Hotdog" => ["price" => 25, "stock" => 14],
    "Bacon Hotdog" => ["price" => 35, "stock" => 4]
];
$tax_rate = 12;
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}
function get_tax_due(float $price, int $qty, int $tax = 0): float {
    $total = $price * $qty;
    return $total * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Stock Monitor</title>
<style>

body {
    font-family: Arial;
    background:#fff5ee; 
    padding:40px;
}

h1 {
    text-align:center;
}

table {
    width:80%;
    margin:auto;
    border-collapse: collapse;
    background:white;
}

th, td {
    padding:12px;
    border:1px solid #ccc;
    text-align:center;
}

th {
    background:#d32f2f;
    color:white;
}

tr:nth-child(even) {
    background:#fafafa;
}

</style>
</head>

<body>

<h1>🌭 Hotdog Store Stock Monitor</h1>

<table>
<tr>
    <th>Product</th>
    <th>Stock</th>
    <th>Reorder?</th>
    <th>Total Value (₱)</th>
    <th>Tax Due (₱)</th>
</tr>

<?php
foreach ($products as $product_name => $data) {

    $price = $data["price"];
    $stock = $data["stock"];

    echo "<tr>";
    echo "<td>$product_name</td>";
    echo "<td>$stock</td>";
    echo "<td>" . get_reorder_message($stock) . "</td>";
    echo "<td>₱" . get_total_value($price, $stock) . "</td>";
    echo "<td>₱" . get_tax_due($price, $stock, $tax_rate) . "</td>";
    echo "</tr>";

}
?>

</table>

</body>
</html>
