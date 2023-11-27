<?php
    // include("session.php");    

    $email= $_SESSION['login_user'];
    $result=mysqli_query($db, "SELECT * FROM aromiausers WHERE email='" . $email . "'");
    $row = mysqli_fetch_array($result);
    $id=$row["id"];
    $result_items=mysqli_query($db, "SELECT * FROM shop_cart WHERE user_id='" . $id . "'");
    $resultset = array();
    while ($row_item = mysqli_fetch_array($result_items)) {
         $resultset[] = $row_item;
    }
    $total=0;
    
    echo '<form>
        <input style="display:none" value=10 name="verificare">
        <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        ';
    foreach ($resultset as $resulti){
        $obj= $resulti['product_id'];
        $result2=mysqli_query($db, "SELECT * FROM products WHERE product_id='" . $obj . "'");
        $row2 = mysqli_fetch_array($result2);
        $total+=$row2['price']* $resulti["cantitate"];
        
        echo'<tr>
        <td>
            <div class="cart-info">
                <img src="' . $row2["url_img"] . '">
                <div>
                    <!-- <input style="display: none" name="product" value="' . $row2["product_id"] . '"> -->
                    <p class="cart-product-title">' . $row2["name"] . '</p>
                    <small class="cart-price">' . $row2["price"] . '</small>
                    <br>
                    <form>
                    <input style="display: none" name="product" value="' . $row2["product_id"] . '"> 
                    <button class="remove_item" type="button" onclick="remove_product(' . $id . ',' . $row2["product_id"] . ')" name="remove">Remove</button>
                    </form>
                </div>
            </div>
        </td>
        <td><input type="number" value="' . $resulti["cantitate"] . '" class="cart-quantity"></td>

        <td>' . $row2['price']* $resulti["cantitate"] . '</td>
    </tr>';
    }
    if ($total==0){
        echo'<tr>
        <td>
            <div class="cart-info">
                <div>
                    <p class="cart-product-title"></p>
                    <small class="cart-price">There are no added items</small>
                    <br>
                </div>
            </div>
        </td>
        <td></td>
        <td></td>
    </tr>';
    }
    else{
        
    echo'
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>' . $total . ' RON</td>
                </tr>
            </table>
        </div>
        <button class="buy-btn" type="button" onclick="place_order(' . $id . ')">Buy now</button>
        </form>';
    }
    
?>