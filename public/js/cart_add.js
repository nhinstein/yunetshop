$(function() {  
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('.wrapper').on('change', function (){
        var qty =  $("#qty").val();
        var dataID = $("#qty").attr("data-id");
        console.log(url_cart+"/"+dataID);
        $.ajax({
        type: 'PATCH',
        
        url: url_cart+"/"+dataID,
        data: {
            qty : qty,
        },
        success: function(data){
            window.location.href =url_cart
        },
        error: function(xhr){
            console.log(xhr.responseText);
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
