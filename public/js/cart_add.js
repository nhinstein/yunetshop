$(function() {  
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('.wrapper').on('change', function (){
        var qty =  $("#qty").val();
        var dataID = $("#qty").attr("data-id");
        var stock = $("#qty").attr("data-stock");
        console.log(url_cart+"/"+dataID);
        $.ajax({
        type: 'PATCH',
        
        url: url_cart+"/"+dataID,
        data: {
            qty : qty,
            stock: stock
        },
        success: function(data){
            window.location.href =url_cart
        },
        error: function(xhr){
            window.location.href =url_cart
        }
    })}
    );
});




// function(){
        
//     const dataId = element.getAttribute('data-id')
//     axios.patch(`/cart/${dataId}`, {
//         qty : this.value
//     })
//     .then(function(response){
//         console.log(response);
//         window.location.href ="{{route('cart.index')}}"
//     })
//     .catch(function(error){
//         console.log(error);
//     });
// }
