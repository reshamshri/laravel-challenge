
$(function(){ $('.product-add').on('click',
	function(e){  
		var _token = $('input[name="_token"]').val();
		var product_name = $('input[name="product_name"]').val();
		var quantity = $('input[name="quantity"]').val();
		var price = $('input[name="price"]').val();

	 e.preventDefault(e); $.ajax({ type:"POST", url:'/product',
	  data:{ _token : _token,product_name:product_name,quantity:quantity,price:price }, 
	  dataType: 'json', success:
	   function(data){ console.log(data); $('.product-data').text(JSON.stringify(data)); },
	    error: function(data){ } }) }); });
