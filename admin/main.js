$(document).ready(function(){
$("body").delegate("#save_product","click",function(event){
		event.preventDefault();
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {get_selected_pro:1},
			success: function(data){
				$('.products_area').html(data);
			}
		})
	})


});