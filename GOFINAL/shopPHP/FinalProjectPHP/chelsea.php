<?php
session_start();
require_once('php/component.php');
require_once ('php/CreateDb.php');

$database=new CreateDb("riseup","products");

require 'headerr.php';
?>
<div class="container">
    <div class="row text-center py-5">
        <?php
       $result=$database->getData();
       while($row=mysqli_fetch_assoc($result)){
           component($row['product_name'],$row['price'],$row['product_image'],$row['id']);
       }
         ?>
    </div>
</div>