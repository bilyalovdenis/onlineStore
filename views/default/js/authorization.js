//the form wrapper (includes all forms)
var $form_wrapper = $('#form_wrapper');
//the current form is the one with class "active"
var $currentForm = $form_wrapper.children('.login');
//the switch form links
$linkform = $form_wrapper.find('.linkform');

console.log($form_wrapper.css('width'));

$linkform.bind('click',function(e){
    var $link   = $(this);
    var target  = $link.attr('rel');
    $currentForm.fadeOut(200,function(){
    //new current form
    $currentForm = $form_wrapper.children('.'+target);

    //animate the wrapper
    $form_wrapper.stop()
        .animate({
           width   : '100%',

        },500,function(){
           //show the new form
           $currentForm.fadeIn(400);
        });
    });
    e.preventDefault();
});

function openLoginWrapper(){
$('.wrapper_hider').fadeIn(400);
$form_wrapper.fadeIn(400);
};
function closeLoginWrapper(){
    $('.wrapper_hider').fadeOut(400);
    $form_wrapper.fadeOut(400);
};

// $form_wrapper.find('input[type="submit"]')
//              .click(function(e){
//                 e.preventDefault();
//  }); 