$(document).ready(function(){
	product();
	profile();
	tote();
	pouch();
	string();
	sale();

	function product(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}

		function profile(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getProfile:1},
			success : function(data){
				$("#get_profile").html(data);
			}
		})
	}
	
	function tote(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getBag:1},
			success : function(data){
				$("#get_tote").html(data);
			}
		})
	}
	
	function pouch(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getPouch:1},
			success : function(data){
				$("#get_pouch").html(data);
			}
		})
	}
	
	function string(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getString:1},
			success : function(data){
				$("#get_string").html(data);
			}
		})
	}
	
	function sale(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getSale:1},
			success : function(data){
				$("#get_sale").html(data);
			}
		})
	}
	$("#signSubmit").click(function(event){
		event.preventDefault();
			$.ajax({
			url : "register.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				$("#signup_msg").html(data);
			}
		})
	})
	
	cart_count();
	$("body").delegate("#product","click",function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url     : "action.php",
			method  : "POST",
			data    : {addToProduct:1,proId:p_id},
			success : function(data){
				alert(data);
				cart_count();
			}
		})
		
	})
	cart_container();
	function cart_container(){
		$.ajax({
			url     : "action.php",
			method  : "POST",
			data    : {get_cart_product:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	
	};
	function cart_count(){
		$.ajax({
			url     : "action.php",
			method  : "POST",
			data    : {cart_count:1},
			success : function(data){
				$(".badge").html(data);
			}
		})
	}


	
	$("#cart_container").click(function(event){
		event.preventDefault();
		$.ajax({
			url     : "action.php",
			method  : "POST",
			data    : {get_cart_product:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	})
	cart_checkout();
	function cart_checkout(){
		$.ajax ({
			url   : "action.php",
			method : "POST",
			data   : {cart_checkout:1},
			success : function(data){
				$("#cart_checkout").html(data);
			}
		})
	}
	$("body").delegate(".qty","keyup",function(){
		var pid = $(this).attr("pid");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price;
		$("#total-"+pid).val(total);
	})
	$("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("remove_id");
		$.ajax ({
			url : "action.php",
			method : "POST",
			data   : {removeFromCart:1,removeId:pid},
			success : function(data){
				alert(data);
				cart_checkout();
			}
		})
	})
	$("body").delegate(".update","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("update_id");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#total-"+pid).val();
		$.ajax({
			url : "action.php",
			method: "POST",
			data : {updateProduct:1,updateId:pid,qty:qty,price:price,total:total},
			success : function(data){
				alert(data);
				cart_checkout();
			}
		})
	})
	
	$("#msgsend").click(function(event){
		event.preventDefault();
			$.ajax({
			url : "message.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				alert(data);
			}
		})
	})
	
		
})
