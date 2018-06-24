"use strict";

$('#meal').on('change', function (){
	var id = $(this).val();
	console.log(id);
	
	var url = getRequestUrl() + '/product';
	
	var params = {
		id: id
		};

	$.get(url, params, function (html) {
		$('#meal-details').html(html);
	})
});
$('select').trigger('change');



$('#add').on('click', function (){
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
	
	var url = getRequestUrl() + '/cart';

	$.get(url, function (html) {
		$('#order-recap').html(html);
	});	
}

loadCart();

	$(document).on('click', '.virer-article', function (){
		var del = $(this).attr('data-id');
		console.log(del);
		var url = getRequestUrl() + '/cart';

		var param = {
		del: del,
		};
		$.post(url, param, function (html) {
		$('#order-recap').html(html);
		})

		loadCart();
	})