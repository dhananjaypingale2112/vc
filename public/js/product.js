$(document).ready(function() {
    // alert(123);   
});

function addToCart(id,price,name,image)
{
    var qty = $("#quntity_"+id).val();
    var path = base_url+"product/addToCart";
    $.ajax({
        type:'POST',
        url:path,
        data:"productId="+id+"&qty="+qty+"&price="+price+"&name="+name+"&image="+image,
        success:function(resp)
        { 
        	alert(resp);
        }   
        });
        
}
