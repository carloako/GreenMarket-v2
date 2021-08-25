<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Market</title>
    <meta charset="utf-8" name="viewport" content="width = device-width, initial-scale = 1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <!-- install Bootstrap 4 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Custom Stylesheets -->
    <link href="../stylesheet.css" rel="stylesheet" />
    <link href="../P5_P6-style.css" rel="stylesheet" />
    <link href="../P7_P12-style.css" rel="stylesheet" />
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <header>
                <div class="header-2">
                    <!-- main logo and search bar -->
                    <a href="../P1/index.html" class="logo"><img src="../green_market-logo-backend.png" id="market-name">
                    </a>
                </div>
            </header>
            <p><br /></p>
            <p><br /></p>
            <div id="success-alert" class="alert alert-success" style="display:none;" role="alert">
                Successfully deleted order.
            </div>
            <div>

                <!--sidebar-->
                <div class="sidenav">
                    <a href="../P7/P7-product_list.html">Product List</a>
                    <a href="../P9/P9-user_list.html">User List</a>
                    <a href="../P11/P11-order_list.html">Order List</a>
                </div>

                <!--main-->
                <div class="main">
                    <table>
                        <h2>List of Orders</h2>
                        <p><br /></p>
                        <p><br /></p>
                        <thead>
                            <tr>
                                <th scope="col">Order #</th>
                                <th scope="col">User</th>
                                <th scope="col">Action</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $xml = simplexml_load_file('../database.xml');
                            $orders = $xml->order;

                            foreach ($orders as $order) {
                                echo "<tr>";
                                echo "<form action = \"delete_order.php\" method = \"post\">";
                                echo "<td data-label= \"Order #\">$order->ordernumber</td>";
                                echo "<td data-label=\"User\">$order->email</td>";
                                echo "<td data-label=\"Action\"><input type = \"submit\" class = \"edit-button\" value = \"Edit\" formaction = \"../P12/P12-edit_order.php\" style = \"\" name = \"edit-button\"><input type = \"hidden\" value = \"$order->id\" name = \"id\"></td>";
                                echo "<td data-label=\"Delete\"><input class = \"delete-icon\" type = \"image\" src = \"https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/lg/57/wastebasket_1f5d1.png\" id = \"\" value = \"\" name = \"delete-button\"></td>";
                                echo "</form>";
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                    <div id="delete-order-modal" class="modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Order</h5>
                                    <button id="close-modal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this order?</p>
                                </div>
                                <div class="modal-footer">
                                    <button id="cancel-button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button id="confirm-button" type="button" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <form action="../P12/P12-edit_order.php" style="margin-left:10%;"> <input class="btn btn-primary" type="submit" value="Add a new order" />
                    </form>
                </div>

                <!-- common footer section starts-->
                <section class="footer">
                    <hr class="solid">
                    <footer class="copyright">
                        <p>Concordia University, SOEN 287 Project © Team Green, 2021</p>
                    </footer>
            </div>
            </section>
            <script src="P11-order_list.js"></script>
            <!-- Install JavaScrip plugins and Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>