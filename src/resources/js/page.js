
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('slick-carousel');
require('magnific-popup');
// require('jquery-bar-rating');
require('jquery.mmenu');
window.toastr = require('toastr');
window.intlTelInput = require('intl-tel-input');

// const WOW = require('wowjs');

// window.wow = new WOW.WOW({
//     live: false
// });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function openMiniCart() {
    $.ajax({
        url: '/ajax/cart',
        type: 'get',
        dataType: 'html',
        beforeSend: function () {
            $('#mini-cart-body').html('<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">' +
                '<span class="sr-only">Loading...</span></div>');
        },
        success: function ( response ) {
            $('#side-cart').fadeIn();
            $('#mini-cart-body').html(response);
        },
        error: function(  jqXHR,  textStatus,  errorThrown){

        }
    });
}

jQuery(document).ready(function(){
    // window.wow.init();

    $('.popover').popover();

    var input = document.querySelector("#phone");
    if( input ){
        window.intlTelInput(input);
    }

    $("#mobile-nav").mmenu({
        "navbars": [
            {
                "position": "top",
                "content": [
                    "searchfield"
                ]
            }
        ]
    });

    // $(window).scroll(function() {
    //     if ($(this).scrollTop() > 200) {
    //         $('header').addClass("sticky");
    //     }else{
    //         $('header').removeClass("sticky");
    //     }
    // });

    $('.scroll-to').on('click', function(e){
        e.preventDefault();
        var target = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top - 84
        }, 500);
    });


    $('#btn-login').on( 'click', function(e){
        e.preventDefault();
        var form = $('#frm-login');
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: $(form).serializeArray(),
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                if( response.auth ){
                    console.log( response );
                    return window.location.href = response.intended;
                }
            },
            error: function(  jqXHR,  textStatus,  errorThrown){
                $('body').removeClass('loading');
                var alert = $(form).find('#alert');
                $(alert).html('').addClass('alert alert-danger');
                if( jqXHR.responseJSON.errors ){

                    for (var k in jqXHR.responseJSON.errors){
                        alert.append( jqXHR.responseJSON.errors[k]+'<br/>' );
                    }
                }
            }
        });

    });

    $('#btn-register').on( 'click', function(e){
        e.preventDefault();
        var form = $('#frm-register');
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: form.serializeArray(),
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                console.log(response);
                if( response.success ){
                    window.location.reload();
                }
            },
            error: function(  jqXHR,  textStatus,  errorThrown){
                $('body').removeClass('loading');
                var msg = '';
                var alert = $(form).find('#alert');
                $(alert).addClass('alert alert-danger');
                $(alert).html('');
                if( jqXHR.responseJSON.errors ){
                    for (var k in jqXHR.responseJSON.errors){
                        alert.append( jqXHR.responseJSON.errors[k]+'<br/>' );
                    }

                }
            }
        });

    });






    $('#sl-cities').on('change', function (e) {
        var data = $(this).val();
        $.ajax({
            url: '/ajax/district',
            dataType: 'json',
            method: 'get',
            data:{
                id: data
            },
            success: function(response){
                if( response.success ){
                    $('#sl-district').html('');
                    response.data.map(function (item, index) {
                        $('#sl-district').append('<option value="'+item.id+'">'+item.text+'</option>');
                    })
                }

            }
        });

    });

    $('select[name="address_id"]').on('change', function (event) {
        //alert(event.type + ' callback');
        if( $(this).val() == '0' ){
            $('#new-address').collapse("show");
        }else{
            $('#new-address').collapse("hide");
        }
    });





});

