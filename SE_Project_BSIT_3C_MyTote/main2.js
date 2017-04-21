$(document).ready(function(){

	product();
	tote();
	pouch();
	string();
	sale();
	function product(){
		$.ajax({
			url : "action2.php",
			method : "POST",
			data : {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}
	
		$("body").delegate("#product","click",function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url     : "action2.php",
			method  : "POST",
			data    : {addToProduct:1,proId:p_id},
			success : function(data){
				alert(data);
			}
		})
		
	})
	function tote(){
		$.ajax({
			url : "action2.php",
			method : "POST",
			data : {getBag:1},
			success : function(data){
				$("#get_tote").html(data);
			}
		})
	}
	
	function pouch(){
		$.ajax({
			url : "action2.php",
			method : "POST",
			data : {getPouch:1},
			success : function(data){
				$("#get_pouch").html(data);
			}
		})
	}
	
	function string(){
		$.ajax({
			url : "action2.php",
			method : "POST",
			data : {getString:1},
			success : function(data){
				$("#get_string").html(data);
			}
		})
	}
	
	function sale(){
		$.ajax({
			url : "action2.php",
			method : "POST",
			data : {getSale:1},
			success : function(data){
				$("#get_sale").html(data);
			}
		})
	}
})