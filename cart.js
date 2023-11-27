//cart working
if (document.readyState=="loading"){
    document.addEventListener("DOMContentLoaded", ready);
}
else{
    ready();
}

//making function
function ready(){
    var removeCartButtons = document.getElementsByClassName("remove_item");
    console.log(removeCartButtons);
    for (var i=0;i<removeCartButtons.length; i++){

        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }
    //change quantity
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for(var i=0; i<quantityInputs.length; i++){

        var input = quantityInputs[i];
        button.addEventListener("click", quantityChanged);
    }
    //add to cart
    var addCart= document.getElementsByClassName("cart-btn");
    for(var i=0; i<quantityInputs.length; i++){

        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }
    document.getElementsByClassName("buy-btn")[0]
    .addEventListener("click", buyButtonClicked);
}

//buy button
function buyButtonClicked(){
    alert("Your order is placed");
    var cartContent = document.getElementsByClassName("cart-info")[0];
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}
//remove item from cart
function removeCartItem(event){
    var buttonClicked = event.remove();
    buttonClicked.parentElement.remove();
    updatetotal();
}
//quantity changes
function quantityChanged(event){
    var input=event.target;
    if(isNaN(input.value)|| input.value<=0){
        input.value=1;
    }
    updatetotal();
}

//add to cart
function addCartClicked(event){
    var button= event.target;
    var shopProducts=buttonparentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
    addProductToCart(title, price, productImg);
    updatetotal();
}
function addProductToCart(title, price, productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box");
    var cartItems=document.getElementsByClassName("cart-info")[0];
    var cartItemNames = cartItems.getElementsByClassName("cart-product-title"); //something may be wrong
    for(var i=0; i<cartItemNames.length; i++){
        if(cartItemNames[i].innerText==title)
        {
             alert("You already added the item. Increase the quantity");
             return
        }
    }
    //var cartBoxContent = '<div class="cart-info"> <img src="${productImg}"> <div> <p class="cart-product-title">${title}</p>  <small>${price}</small>  <br>  <div class="remove_item">Remove</div> </div>  </div>'
    var cartBoxContent = '<div class="cart-info"> <img src="' + productImg + '"> <div> <p class="cart-product-title">' + title + '</p>  <small>' + price + '</small>  <br>  <div class="remove_item">Remove</div> </div>  </div>';

    cartShopBox.innerHTML=cartBoxContent;
    cartItems.append(cartShopBox);
    updatetotal();
    cartShopBox
    .getElementsByClassName("remove_item")[0]
    .addEventListener("click", removeCartItem);
    cartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener("change", removeCartItem);
    cartShopBox
    .getElementsByClassName("cart-price")[0]
    .addEventListener("change", removeCartItem);

}
//update total
function updatetotal(){
    var cartContent = document.getElementsByClassName("cart-info")[0];
    var cartBoxes = document.getElementsByClassName("cart-box")[0];
    var total=0;
    for( var i=0; i<cartBoxes.length;i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price= parseFloat(priceElement.innerText.replace("Rs ", ""));
        total= total*price*quantity;
    }
    //if price contains some cents value
    total=math.round(total*100)/100;
    document.getElementsByClassName("total-price")[0].innerText="Rs"+total;
    
}


