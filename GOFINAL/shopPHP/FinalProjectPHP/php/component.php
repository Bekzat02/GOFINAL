<?php
function component($productname,$productprice,$productimg,$productid){
    $element="         
                <form action=\"index.php\" method=\"post\">
                <div>
                    <img src=\"$productimg\" style='width: 250px; height=250px'
                          class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$productname</h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                    </h6>
                    <p>
                        Some quick example text to build on the card
                    </p>
                    <h5>
                        <span class=\"price\">$$productprice</span>
                    </h5>
                    <button type=\"submit\" name=\"add\" style=\"color: white\">Add cart <i  style=\"color: #2d3538\" class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
            </form>
    ";
    echo $element;
}
function cartElement($productimg,$productname,$productprice,$productid){
    $element=" 
    
                <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src='$productimg'>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller:dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-success\">Save for later</button>
                                <button type=\"submit\" class=\"btn btn-danfer mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i
                                                class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i
                                                class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    ";
    echo $element;
}