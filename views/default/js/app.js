console.log("app.is connect");
// alert($.cookie('cart'));

// Cookies.set("test", "soisi");
// alert( Cookies.get("test"));
// $('#cartCountItems').html(data['countItemsInCart']);

function addToCart (itemId){
    console.log("js-addToCart");
    $.ajax({
        type: 'GET',
        // async: false,
        data: {cart: 'add',
               id: itemId},
        url: 'cart.php',   
        dataType: "json",
        success: function(data){
            console.log(data);
            // if(data['success']){
            //     $('#cartCountItems').html(data['countItemsInCart']);
            //     $('#countItemInCart').html(data['countOfItems']);
                
            //     if(data['countOfItems']==1){
            //         $('#addCart_'+itemId.hide());
            //         $('#changeCart'+itemId.show());
            //     }
            // }
            changeCartContainer(data);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
}
function changeCartContainer(countItems=0){
    console.log(countItems);
    if(countItems == 0){
        $('.modification_cart').css({'display':'none'});
        $(' .pay-button').css({'display':'block'});
        $(' #count_cart').text("ffsfs");  

    }else{
        $(' .modification_cart').css({'display':'flex'});
        $(' .pay-button').css({'display':'none'});
        $(' #count_cart').text(countItems);  
    }
};
