<?php session_start();
require 'login.php';

require_once('php/component.php');
require_once ('php/CreateDb.php');

$database=new CreateDb("riseup","products");
if(isset($_SESSION['logged_user'])){
if (isset($_POST['add'])) {
/// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script> alert('Product is already added in the cart!') </script>";
            echo "<script>window.location='chelsea.php' </script>";
        }
        else{
            $count=count($_SESSION['cart']);

            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count]=$item_array;
        }
    }else{

        $item_array = array(
             $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'] = $item_array;
    }
}
}
else{
    echo "<script> alert('First of all you have to sign in') </script>";
}

require 'headerr.php';
?>
<header>
    <div class="betindegitus"></div>
    <video src="code.mov.mp4" loop muted autoplay></video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h3>BRUCE WEIGHT VEST</h3>
                <p>Take your training to next level</p>
                <a href="shop.html"><button>Shop now</button> </a>
            </div>
        </div>
    </div>
</header>

<section class="my-4">
    <div class="container">
        <div class="row text-center py-4">
            <?php
            $result=$database->getData();
            while($row=mysqli_fetch_assoc($result)){
                component($row['product_name'],$row['price'],$row['product_image'],$row['id']);
            }
            ?>
        </div>
    </div>
</section>
<?php
require 'footer.php';
?>
</html>