jQuery(document).ready(function($) {
	var ourLocation = (document.URL).split("/");
	var length = ourLocation.length;
	var page = ourLocation[length - 1];

	//execute autoload items for myorders.php page
	if (page == "myorders.php") {
		fetchMyOrders();
	}

	$("#addOrderItem").click(function() {

		$(".modal-body").load("modalUI/add-item.php");
		$('#action').html("Add Item");
		getOrderItems();
		$(".modal-action").val("add-order-items");
		$(".modal").modal();

	});

	//save order items

	function getOrderItems() {
		$.get('controller/app.php', {
			"req" : "get-order-items"
		}, function(data) {
			console.log(data);
			var $html = '';
			$.each(data, function(key, obj) {
				$html += "<option id=" + obj.item_id + ">" + obj.item_name + "</option>";
			});
			$("#order-items").html($html);
		}, "json");
	}

	//fetch the users orders and items
	function fetchMyOrders() {
		/*
		 $.get('controller/app.php', {
		 req : "fetch-my-orders",
		 }, function(data) {
		 console.log(data);
		 $("#data-table").jsonTable({
		 head:["Order Number",'Item ID','Due Date','Quantity'],
		 json:['order_number','item_id','due_date','quantity'],
		 source:data
		 });

		 }, "json");*/

		$.ajax({
			url : 'controller/app.php?req=fetch-my-orders',
			dataType : 'json',
			success : function(json) {
				dataTable = $('#data-table').columns({
					data : json,
					schema : [{
						"header" : "Order Number",
						"key" : "order_number"
					}, {
						"header" : "Item ID",
						"key" : "item_id"
					}, {
						"header" : "Due Date",
						"key" : "due_date"
					}, {
						"header" : "Quantity",
						"key" : "quantity"
					}]

				});
			}
		});

	}

});
