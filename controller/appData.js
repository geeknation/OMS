jQuery(document).ready(function(){
	
});
$("#action").click(function(){
	
	var flag=$("#modal-action").val();
	
	if(flag=="add-order-items"){
		addOrderItems();	
	}
});

function addOrderItems(){
	var product=$("#order-items").val();
	var quantity=$("#quantity").val();
	var orderexpdate=$("#order-exp-date").val();
	var ordernumber=$("#order-number").html().trim();
	
	if(product=="" || quantity=="" || orderexpdate==""){
		window.alert("please fill in all the fields");
	}else{
		$.post("/OMS/controller/app.php",{
			product:product,
			quantity:quantity,
			orderexpdate:orderexpdate,
			req:"save-order-item",
			ordernumber:ordernumber
		},function(data){
			if(data.success=="1"){
				
				var item="<div><h3>"+product+"</h3><b>Quantity:"+quantity+"</b><p/><b>Order Expiration"+orderexpdate+"</b></div>";
				
				$(".item-base").append(item);
			}
		},"json");
		
	}
}
