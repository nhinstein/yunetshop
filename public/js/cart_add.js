$(function() {  
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('.wrapper').on('change', function (){
        var qty =  $("#qty").val();
        console.log(url_cart);
        $.ajax({
        type: 'PATCH',
        
        url: `/cart/${this.value}`,
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
