<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn){
    header("Location: ../error.php?error=database connection error");
} else {
    $sql = "SELECT name, price, id FROM Products WHERE product_type = 'fruits'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $price = $row['price'];
            $pnumber = $row['id'];
            echo '<div class = "aisle-box-items" style = "align:left;">';
            echo '<div class = "aisle-box-items-contents">';
            echo '<form id = "product_form" method = "get" action = "../product/product.php">';
            echo "<a class = 'items' href = 'javascript:{}' onclick = 'document.getElementsByTagName(\"form\")[$no].submit();'>";
            echo "<img src = \"../images/".strtolower($name).".jpg\" width = \"200\" height = \"300\"></br>";
            echo "<h3>$name</h3>";
            echo "<input type = \"hidden\" name = \"productID\" value = \"$pnumber\" readonly>";
            echo '</a>';
            echo '<hr style = "<hr style = "width:250px;margin:0;"/>';
            echo "<p class = \"description\">$$price";
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
    }
}
?>