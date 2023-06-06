<?php 
$currentFolder = getcwd();
$posOfSlash = strpos($currentFolder, '/') + 1;
$currentFolder = substr($currentFolder, $posOfSlash);
$posOfSlash = strpos($currentFolder, '/');
while($posOfSlash){
	$posOfSlash += 1;
	$currentFolder = substr($currentFolder, $posOfSlash);
	$posOfSlash = strpos($currentFolder, '/');
}

$rootFolder = "GreenMarket-v2";
$aisleFolder = "aisle-page";
$productTypeFolder = array("beverages-page", "fruits-page", "meals-page", "snacks-page");
$loginFolder = "login-page";
$shoppingCartFolder = "shopping-cart-page";

$homepage = "index.php";

$isRoot = (strcmp($currentFolder, $rootFolder) == 0)? true: false;
$isProductType = in_array($currentFolder, $productTypeFolders);
if ($isRoot) {

} else if ($isProductType) {
	$homepage = "../../" . $homepage;
} else {
    $homepage = "../" . $homepage;
}

echo '<section class="footer">';
echo '    <hr class="solid">';
echo '    <div class="box-container">';
echo '        <div class="box">';
echo '            <p id="title-footer" id="link">Quick links</p>';
echo "            <p><a href=\"$homepage\" id=\"link\">Home</a></p>";
echo '            <p><a href="extra/about.html" id="link">About us</a></p>';
echo '            <p><a href="extra/contact.html" id="link">Contact</a></p>';
echo '        </div>';
echo '        <div class="box">';
echo '            <p id="title-footer">Follow us:</p>';
echo '            <p><a href="https://facebook.com" id="link">Facebook</a></p>';
echo '            <p><a href="https://instagram.com" id="link">Instagram</a></p>';
echo '        </div>';
echo '    </div>';
echo '    <footer class="copyright">';
echo '        <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>';
echo '    </footer>';
echo '</section>';
?>