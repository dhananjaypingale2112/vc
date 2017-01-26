$(document).ready(function() {
    // alert(123);   
    // $("otp_div").hide();
});
function addToCart(id,price,name,image,desc)
{
    //alert(desc);
    var qty = $("#quntity_"+id).val();
    var path = base_url+"product/addToCart";
    $.ajax({
        type:'POST',
        url:path,
        data:"productId="+id+"&qty="+qty+"&price="+price+"&name="+name+"&image="+image+"&desc="+desc,
        success:function(resp)
        { 
            //alert(resp);
            $('#totalItems').html(resp);
            if(resp != "")
            {
                alert("item added");
            }
        	
        }   
        });  
}
function grandTotal(total)
{
    //alert(price);
    var shippingCharges = $("#shippingCharges").val();
    var grandTotal = parseInt(total) - parseInt(shippingCharges);
    // alert(newSubTotal);
    $("#grandTotal").val(grandTotal);
}
function confirmAddress(){
    if ($('#termsConditions').is(":checked"))
    {
        alert('ok');
    }
    else{
        alert("Please agree with Terms & Conditions")
    }

}
function confirmOrder()
{
    var formData = $("#confirmOrder").serialize();
    var path = base_url+"product/confirmOrder";
    $.ajax({
        type:'POST',
        url:path,
        data:formData,
        success:function(resp)
        { 
            //alert(resp);
            if(resp == 1)
            {
                setInterval(function(){
                    window.location.href = base_url+'product/orderSuccess';
                }, 100);
            }
            else
            {
                alert("error");
            }
        }   
        });
}
////////////////
function subTotal(id,price,rowid,operation)
{
    var $button = $(".ddd");
    var qty1 = $("#qty_"+id).val();
    var qty = parseInt(qty1);
    
    if(qty >= 1)
    {
        var path = base_url+"product/updateCart";
        $.ajax({
            type:'POST',
            url:path,
            data:"rowid="+rowid+"&price="+price+"&operation="+operation,
            success:function(resp)
            { 
                //alert(resp);
                var oldSubTotal = $("#subTotal_"+id).val();
                var oldTotalAmt = $("#total").val();
                if(operation == 'minus')
                {
                    if(qty > 1){
                        var newSubTotal = parseInt(oldSubTotal) - parseInt(price);
                        var newTotalAmt = parseInt(oldTotalAmt) - parseInt(price);
                    }
                    else{
                        var newSubTotal = oldSubTotal;
                        var newTotalAmt = oldTotalAmt;
                    }
                }
                else    {
                    var newSubTotal = parseInt(oldSubTotal) + parseInt(price);
                    var newTotalAmt = parseInt(oldTotalAmt) + parseInt(price);
                }
                $("#subTotal_"+id).val(newSubTotal);
                $("#total").val(newTotalAmt); 
                grandTotal(newTotalAmt);
            }   
            });        
    }
    else{
        alert("Quntity must be atleast One");
    }
}