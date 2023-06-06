<?php
$currentFolder = getcwd();
$posOfSlash = strpos($currentFolder, '/') + 1;
$currentFolder = substr($currentFolder, $posOfSlash);
$posOfSlash = strpos($currentFolder, '/');
while ($posOfSlash) {
    $posOfSlash += 1;
    $currentFolder = substr($currentFolder, $posOfSlash);
    $posOfSlash = strpos($currentFolder, '/');
}

$rootFolder = "GreenMarket-v2";
$aisleFolder = "aisle-page";
$productTypeFolders = array("beverages-page", "fruits-page", "meals-page", "snacks-page");
$loginFolder = "login-page";
$shoppingCartFolder = "shopping-cart-page";

$ac = "";

$bannerImagePath = "green_market-logo.png";
$homepage = "index.php";
$homepageActive = "";
$homepageAC = "";
$aislePage = "aisle-page/aisles.php";
$aislePageActive = "";
$aislePageAC = "";
$shoppingCartPage = "shopping-cart-page/shopping_cart.php";
$shoppingCartPageActive = "";
$shoppingCartPageAC = "";
$loginPage = "login-page/login.php";
$loginPageActive = "";
$loginPageAC = "";
$backendPage = "backend-page/backend.php";
$loginIcon = "fas fa-user";
$username = "";

$isRoot = (strcmp($currentFolder, $rootFolder) == 0) ? true : false;
$isProductType = in_array($currentFolder, $productTypeFolders);
$isAisle = (strcmp($currentFolder, $aisleFolder) == 0) ? true : false;

if (isset($_SESSION['username'])) {
    $loginPage = "profile/profile.php";
    $username = $_SESSION['username'];
    $loginIcon = "";
}

if ($isRoot) {
    $homePageActive = "active";
    $homepageAC = $ac;
} else if ($isProductType) {
    $bannerImagePath = "../../" . $bannerImagePath;
    $homepage = "../../" . $homepage;
    $aislePage = "../aisles.php";
    $aislePageActive = "active";
    $aislePageAC = $ac;
    $shoppingCartPage = "../../" . $shoppingCartPage;
    $loginPage = "../../" . $loginPage;
    $backendPage = "../../" . $backendPage;
} else if ($isAisle) {
    $bannerImagePath = "../" . $bannerImagePath;
    $homepage = "../" . $homepage;
    $aislePage = "aisles.php";
    $aislePageActive = "active";
    $aislePageAC = $ac;
    $shoppingCartPage = "../" . $shoppingCartPage;
    $loginPage = "../" . $loginPage;
    $backendPage = "../" . $backendPage;
} else {
    $bannerImagePath = "../" . $bannerImagePath;
    $homepage = "../" . $homepage;
    $aislePage = "../" . $aislePage;
    $shoppingCartPage = "../" . $shoppingCartPage;
    $loginPage = "../" . $loginPage;
    $backendPage = "../" . $backendPage;
}

echo '<header>';
echo '    <div class="header-1">';
echo '        <a href="#" class="fab fa-facebook" style="font-size: 24px"></a>';
echo '        <a href="#" class="fab fa-instagram" style="font-size: 24px"></a>';
echo '    </div>';
echo '    <div class="header-2">';
echo "        <a href=\"$homepage\" class=\"logo\"><img src=\"$bannerImagePath\" id=\"market-name\"></a>";
echo '        <div class="searching-container">';
echo '            <form onsubmit="return search()" class="search-bar-container">';
echo '                <input type="text" id="search-bar" placeholder="Search product">';
echo '                <a href="#" class="fas fa-search">';
echo '                </a>';
echo '            </form>';
echo '        </div>';
echo '    </div>';
echo '    <!-- menu bars -->';
echo '    <div class="nav" id="nav-theme">';
echo '        <nav class="navbar py-0 navbar-expand-lg navbar-light">';
echo '            <div class="container-fluid">';
echo '                <a class="navbar-brand" href="#"></a>';
echo '                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
echo '                    <span class="navbar-toggler-icon"></span>';
echo '                </button>';
echo '                <div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-1">';
echo '                        <li class="nav-item">';
echo "                            <a class=\"nav-link $homepageActive px-4\" $homepageAC href=\"$homepage\">Home</a>";
echo '                        </li>';
echo '                        <li class="nav-item">';
echo "                            <a class=\"nav-link $aislePageActive px-4\" $aislePageAC href=\"$aislePage\">Aisles</a>";
echo '                        </li>';
echo '                        <li class="nav-item">';
echo '                            <a class="nav-link px-4" href="extra/deals.html">Deals</a>';
echo '                        </li>';
echo '                        <li class="nav-item">';
echo '                            <a class="nav-link px-4" href="extra/services.html">Services</a>';
echo '                        </li>';
echo '                    </ul>';
echo '                    <div class="user-shopping">';
$isAdmin = strcmp($_SESSION['username'], "admin") == 0 ? true: false;
if ($isAdmin) {
    echo '                        <span id="backend">';
    echo "                            <a href=\"$backendPage\" class=\"fa-solid fa-box\"></a>";
    echo '                        </span>';
}
echo '                        <span id="shopping-cart">';
echo "                            <a href=\"$shoppingCartPage\" class=\"fa-solid fa-shopping-cart\"></a>";
echo '                        </span>';
echo '                        <span id="user-login">';
echo "                            <a href=\"$loginPage\" class=\"$loginIcon\">$username</a>";
echo '                        </span>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '        </nav>';
echo '    </div>';
echo '</header>';
?>