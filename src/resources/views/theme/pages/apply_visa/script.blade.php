<link rel="stylesheet" href="{{ url('libs/datepicker/css/bootstrap-datepicker3.css') }}">
<script src="{{ url('libs/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    function getCart(){
        $.ajax({
            url: '{{ route('apply.visa.get') }}',
            method: 'GET',
            beforeSend: function(){
                $('body').addClass('loading');
            },
            success: function( response ){
                $('body').removeClass('loading');
                $('#cart').html(response);
            }
        }).fail(function () {
            $('body').removeClass('loading');
        })
    }
    function updateCart( element, action ) {
        var data = $('#frm-visa').serializeArray();
        data.push({name: 'action', value: action });
        $.ajax({
            url: '{{ route('apply.visa.post') }}',
            method: 'POST',
            data: data ,
            beforeSend: function(){
                $('body').addClass('loading');
            },
            success: function( response ){
                $('body').removeClass('loading');
                $('#cart').html(response);
            }
        }).fail(function () {
            $('body').removeClass('loading');
        })
    }

    $(document).ready(function(){

        getCart();

        $('.input-daterange').datepicker({
            startDate: 'today',
            format: 'yyyy-mm-dd'

        });

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });


    });
</script>