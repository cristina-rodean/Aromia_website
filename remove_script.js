
function remove_product(user_id, product_id){
    $.ajax({

        type : "POST",  //type of method
        url  : "introducere.php",  //your page
        data : { product_id: product_id, user_id: user_id },// passing the values
    });
    window.location.replace("cart.php");
}
function place_order(user_id){
    $.ajax({

        type : "POST",  //type of method
        url  : "introducere2.php",  //your page
        data : { user_id: user_id },// passing the values
    });
    window.location.replace("index.php");
}