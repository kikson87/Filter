$(document).ready(function(){

    $('.owl-calendar').owlCarousel({
        loop:true,
        nav:true,
        items:2,
    })

    $('.filter-booking-kikson .single-date').click(function(){
        $(this).toggleClass('active');
    });

    $('.preview-calendar').click(function(){
        $(this).parent().toggleClass('active');
    });

    $(document).mouseup( function(e){
		var area = $( ".calendar.active" );
		if ( !area.is(e.target)
		    && area.has(e.target).length === 0 ) {
            area.removeClass('active');
		}
	});

    $('.preview-person').click(function(){
        $(this).parent().toggleClass('active');
    });

    $(document).mouseup( function(e){
		var area = $( ".person.active" );
		if ( !area.is(e.target)
		    && area.has(e.target).length === 0 ) {
            area.removeClass('active');
		}
	});

    let location_input = $('.preview-location-text input')[0];
    let booking_location = location_input.value;

    location_input.oninput = function() {

        if(location_input.value){
            console.dir('TRUE');
            let data = {
                action: 'booking_location',
                booking_location: location_input.value,
    
            };
            
            $.ajax({ // add to cart single product
                type: 'post',
                url: ajaxurl,
                data: data,
                dataType: 'json',
    
                complete: function (data) {
                    if(location_input.value){
                        $('.search-location').html(data.responseText);
                        $('.search-location').addClass('active');
                    }
                },
                success: function (data) {
                    
                },
            })
            
        }else{
            console.dir('FALSE');
            $('.search-location').removeClass('active');
        }

    };

    /* ADULTS PLUS MINUS */

    let adults_calculate = $('.adults-calculate .value');
    let adults_data = 0;

    if(adults_calculate){
        $('.adults-calculate .minus').click(function(){
            if(Number($('.adults-calculate .value').attr('data')) === 0){
                return;
            }
            adults_data = Number($('.adults-calculate .value').attr('data')) - 1;
            $('.adults-calculate .value').attr('data', adults_data);
            $('.adults-calculate .value').html(adults_data);
        });
    
        $('.adults-calculate .plus').click(function(){
            adults_data = Number($('.adults-calculate .value').attr('data')) + 1;
            $('.adults-calculate .value').attr('data', adults_data);
            $('.adults-calculate .value').html(adults_data);
        });
    }

    /* ADULTS PLUS MINUS */

    /* CHILDREN PLUS MINUS */

        let children_calculate = $('.children-calculate .value');
        let children_data = 0;
    
        if(children_calculate){
            $('.children-calculate .minus').click(function(){
                if(Number($('.children-calculate .value').attr('data')) === 0){
                    return;
                }
                children_data = Number($('.children-calculate .value').attr('data')) - 1;
                $('.children-calculate .value').attr('data', children_data);
                $('.children-calculate .value').html(children_data);
            });
        
            $('.children-calculate .plus').click(function(){
                children_data = Number($('.children-calculate .value').attr('data')) + 1;
                $('.children-calculate .value').attr('data', children_data);
                $('.children-calculate .value').html(children_data);
            });
        }
    
    /* CHILDREN PLUS MINUS */

    /* ROOMS PLUS MINUS */

    let rooms_calculate = $('.rooms-calculate .value');
    let rooms_data = 0;

    if(rooms_calculate){
        $('.rooms-calculate .minus').click(function(){
            if(Number($('.rooms-calculate .value').attr('data')) === 0){
                return;
            }
            rooms_data = Number($('.rooms-calculate .value').attr('data')) - 1;
            $('.rooms-calculate .value').attr('data', rooms_data);
            $('.rooms-calculate .value').html(rooms_data);
        });
    
        $('.rooms-calculate .plus').click(function(){
            rooms_data = Number($('.rooms-calculate .value').attr('data')) + 1;
            $('.rooms-calculate .value').attr('data', rooms_data);
            $('.rooms-calculate .value').html(rooms_data);
        });
    }

    /* ROOMS PLUS MINUS */



  });