"use strict";

$('#meal').on('change', function (){
	var id = $(this).val();
	console.log(id);
	
	var url = getRequestUrl() + '/product';
	console.log(url);
	var params = {
		id: id
		};
	console.log(params);
	$.get(url, params, function (html) {
		$('#meal-details').html(html);
	})
});
$('select').trigger('change');



$('.button').on('click', function (){
	var id = $('#meal').val();
	var quantity = $('#quantity').val();
	
	var url = getRequestUrl() + '/cart';
	var params = {
		id: id,
		quantity: quantity
	};
	$.post(url, params, function (html) {
		$('#order-recap').html(html);
	})
}); 

function loadCart() {
	// load cart
	var url = getRequestUrl() + '/cart';

	$.get(url, function (html) {
		$('.box-cart').html(html);
	});	
}

loadCart();
