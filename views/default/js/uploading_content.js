var block_show = false;
function scrollMore(){
	var $target = $('#showmore-triger');
	if (block_show) {
		return false;
	}
 
	var wt = $(window).scrollTop();
	var wh = $(window).height();
	var et = $target.offset().top -50;
	var eh = $target.outerHeight();
	var dh = $(document).height();   
	if (wt + wh >= et || wh + wt == dh || eh + et < wh){
		var page_this = $target.attr('data-page');	
		page_this++;
		block_show = true;
		$.ajax({ 
			type: 'GET',
			data: {page: page_this,
                   category: '2'},
			url: '/ajax.php',  
			dataType: 'html',
			success: function(data){
	
				$('.category-clearfix').append(data);
				block_show = false;
				$target.attr('data-page', page_this);
				if (page_this ==  $target.attr('data-max')) {
				console.log('remove target')
				$target.remove();
		}
			}
		});
	}
}
 
$(window).scroll(function(){
 console.log('scroll');
	scrollMore();
});
	
$(document).ready(function(){ 
 console.log('ready');

	scrollMore();
});