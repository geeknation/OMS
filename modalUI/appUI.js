jQuery(document).ready(function($) {
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
				$html += "<option id="+obj.item_id+">" + obj.item_name + "</option>";
			});
			$("#order-items").html($html);
		}, "json");
	}
	
	
});
