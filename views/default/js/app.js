
function addToCart (itemId){
    $.ajax({
        type: 'GET',
        data: {cart: 'add',
               id: itemId},
        url: 'cart.php',   
        dataType: "json",
        success: function(data){
            changeCartContainer(data['quantity'], data['id'],data['cost']);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
};
function removeFromCart (itemId){
    $.ajax({
        type: 'GET',
        data: {cart: 'remove',
               id: itemId},
        url: 'cart.php',   
        dataType: "json",
        success: function(data){
            changeCartContainer(data['quantity'], data['id'], data['cost']);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
};
function deleteCartItem (itemId){
    $.ajax({
        type: 'GET',
        data: {cart: 'delete',
               id: itemId},
        url: 'cart.php',   
        dataType: "json",
        success: function(data){
            changeCartContainer(data['quantity'], data['id']);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
};
function changeCartContainer(countItems=0, Id, cost){
    cost = Number(cost);
    switch ($('.modification_cart').parent().attr('class')){
        case 'cart_item_modification_cart':
            if(countItems == 0){
                $(`#cart_item_${Id}`).css({'display':'none'})
                $(`#hr_${Id}`).css({'display':'none'})
        
            }else{
                $(` #count_cart_${Id}`).text(countItems);  
                $(` #price_cart_${Id}`).text(`${cost} руб.`);  
            }
            break;
        case 'product_pay-form':
            if(countItems == 0){
                $('.modification_cart').css({'display':'none'});
                $(' .pay-button').css({'display':'block'});
            }else{
                $(' .modification_cart').css({'display':'flex'});
                $(' .pay-button').css({'display':'none'});
                $(` #count_cart`).text(countItems);  
            }
            break;     
    }
};
