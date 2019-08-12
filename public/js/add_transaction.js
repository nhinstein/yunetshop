$(".bayar").on("click",  function () {
    
    var order = $(this).data('orderid');
    var total = $(this).data('totalorder');
    console.log(total);
    var url_update = url +"/transaction/" + order;
    $("#total_order").html(total);
    var action = $('#bayarForm').attr('action', url_update );
});