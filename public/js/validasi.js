$(".validasi").on("click",  function () {
    console.log('hiii');
    var name = $(this).data('tname');
    var rekening = $(this).data('trek');
    var total = $(this).data('ttotal');
    var tsrc = $(this).data('tsrc');
    var order = $(this).data('orderid');
    var totalorder = $(this).data('totalorder');
    $("#total_order").html(totalorder);
    console.log(name);
    $(".modal-body #t_name").val(name);
    $(".modal-body #t_norek").val(rekening);
    $(".modal-body #t_total").val(total);
    $(".modal-body #tsrc").attr("src", tsrc);
    var url_update = url +"/status/" +  order;
    var action = $('#validasiForm').attr('action', url_update );
});




$(".delete-product").on("click",  function () {
    var name = $(this).data('pname');
    var productId = $(this).data('pid');
    console.log('oiii', name, productId);
    $("#dataProduk").html(name);
    var url_update = url +"/" +  productId;
    var action = $('#deleteForm').attr('action', url_update );
    $("#submitHapus").on('click', function(){
        $("#deleteForm").submit();
    });
});