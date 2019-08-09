$(function(){
var delayInMilliseconds = 2000;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
function getCity(){
    var province = $('.province_select option:selected').val();
    console.log(url);
    $.ajax({
        type: 'GET',
        url: url,
        data: {
            province : province
        },
        success: function(data){
            console.log(data);
                    $('.city_select').empty();
                    var cities = data.cities;
                    $.each(cities, function(key, value) {
                $('.city_select')
                    .append($("<option></option>")
                                        .attr("value", value.id)
                                        .text(value.name));
                    });
                    getOngkir();
                    $('select').niceSelect('update');
        },
        error: function(xhr){
            console.log(xhr.responseText);
        }
    });
    }
    

$(function() {
    $('.province_select').on('change', getCity())
});


var getOngkir = function(){
    var courir = $('.courir_select option:selected').val();
    var city = $('.city_select option:selected').val();
    if(city != null){
        $.ajax({
            type: 'GET',
            url: url_cek,
            data: {
                destination : city,
                courir : courir
            },
            success: function(data){
                var ongkir = data.ongkir;
                var sum = data.sum;
                    document.getElementById("ongkir").innerHTML = ongkir;
                        $('#total').empty();
                    $('#total').append('<p>' + sum + '</p>');
            },
            error: function(xhr){
                    console.log(xhr.responseText);
            }
    });

    }

}
    
$(function() {
    $('.city_select').on('change', getOngkir())
});

$(".wrapper1").on('change', 'select', function() {
    var sortBy = $("#province").val();
    getCity();
    getOngkir();
  });

  
$(".wrapper2").on('change', 'select', function() {
    var sortBy = $("#city").val();
    getOngkir();
  });


// $("#submitOrder").click(function(e){
//     $("#checkOutForm").submit();
// });

// $("#submitPaid").click(function(e){
//     $("#checkOutForm").submit();
//     $("#checkOutPaidForm").submit();
// });

});

