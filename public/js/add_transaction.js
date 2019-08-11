$(".bayar").on("click",  function () {
    console.log('hiii');
    var order = $(this).data('orderid');
    var url_update = url +"/transaction/" + order;
    var action = $('#bayarForm').attr('action', url_update );
});