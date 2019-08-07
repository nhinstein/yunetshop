$(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    var getCity = $(function(){
        var province = $('.province_select option:selected').val();
        var url_cek = '{{ route("checkout.get_ongkir") }}';
        console.log(url);
        $.ajax({
            type: 'GET',
            url: url,
            data: {
                province : this.value
            },
            success: function(data){
                        $('.city_select').empty();
                        var cities = data.cities;
                        $.each(cities, function(key, value) {
                    $('.city_select')
                        .append($("<option></option>")
                                            .attr("value", value.id)
                                            .text(value.name));
                        });
                        // $('select').niceSelect();
            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });
        });
        
    // getCity();

	$(function() {
		$('.province_select').on('change', getCity())
    });

    var getOngkir= $(function(){
        var courir = $('.courir_select option:selected').val();
        var city = $('.city_select option:selected').val();
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
    });
    
	$(function() {
		$('.city_select').on('change', getOngkir())
    });
});