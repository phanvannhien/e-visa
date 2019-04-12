if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
    CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 150;
CKEDITOR.config.width = 'auto';

// var initSample = ( function() {
//     var wysiwygareaAvailable = isWysiwygareaAvailable(),
//         isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );
//
//     return function() {
//         var editorElement = CKEDITOR.document.getById( 'editor' );
//
//         // :(((
//         if ( isBBCodeBuiltIn ) {
//             editorElement.setHtml(
//                 'Hello world!\n\n' +
//                 'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
//             );
//         }
//
//         // Depending on the wysiwygare plugin availability initialize classic or inline editor.
//         if ( wysiwygareaAvailable ) {
//             CKEDITOR.replace( 'editor' );
//         } else {
//             editorElement.setAttribute( 'contenteditable', 'true' );
//             CKEDITOR.inline( 'editor' );
//
//             // TODO we can consider displaying some info box that
//             // without wysiwygarea the classic editor may not work.
//         }
//     };
//
//     function isWysiwygareaAvailable() {
//         // If in development mode, then the wysiwygarea must be available.
//         // Split REV into two strings so builder does not replace it :D.
//         if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
//             return true;
//         }
//
//         return !!CKEDITOR.plugins.get( 'wysiwygarea' );
//     }
// } )();
//
// initSample();


// function selectImageWithCKFinder( elementId ) {
//     CKFinder.popup( {
//         chooseFiles: true,
//         width: 800,
//         height: 600,
//         onInit: function( finder ) {
//             finder.on( 'files:choose', function( evt ) {
//                 var file = evt.data.files.first();
//                 console.log( file );
//                 var img = jQuery( elementId ).find('img');
//                 var fileinput = jQuery( elementId ).find('input[name="image"]');
//                 $(img).attr('src', file.getUrl() );
//                 $( fileinput ).val( file.getUrl() );
//
//             } );
//
//             finder.on( 'file:choose:resizedImage', function( evt ) {
//                 var output = document.getElementById( elementId );
//                 output.value = evt.data.resizedUrl;
//             } );
//         }
//     } );
// }

(function( $ ){

    $.fn.filemanager = function(type, options) {
        type = type || 'file';



        this.on('click', function(e) {
            var that = this;
            var route_prefix = (options && options.prefix) ? options.prefix : '/file-manager';
            var select = (options && options.select) ? options.select : 'single';
            window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1200,height=600');


            window.SetUrl = function (items) {

                console.log(options);
                if( items.length > 0 ){

                    if( select == 'single' ){
                        console.log(items[0].thumb_url );
                        var target_input = $('#' + $(that).data('input'));
                        var target_preview = $('#' + $(that).data('preview'));
                        // set the value of the desired input to image url
                        target_input.val('').val( items[0].thumb_url ).trigger('change');
                        // clear previous preview
                        target_preview.html('');
                        target_preview.attr('src', items[0].thumb_url );
                        // trigger change event
                        target_preview.trigger('change');

                    }else{
                        var target_preview = $('#' + $(that).data('preview'));
                        items.forEach( function( file ) {
                            var item = '<div class="text-center col-sm-3 border-dark">' +
                                '<img width="100" src="'+file.thumb_url+'" />' +
                                '<input type="hidden" name="galleries[]" value="'+ file.thumb_url+'">' +
                                '<a class="btn btn-block btn-danger" onclick="$(this).closest(\'div\').remove() ">Xoá<a>' +
                                '</div>';

                            $(target_preview).append(item);

                        } );
                    }

                }
            };
            return false;
        });
    }

})(jQuery);

// Define function to open filemanager window
var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/file-manager';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = cb;
};

// Define LFM summernote button
// var LFMButton = function(context) {
//     var ui = $.summernote.ui;
//     var button = ui.button({
//         contents: '<i class="note-icon-picture"></i> ',
//         tooltip: 'Chèn ảnh',
//         click: function() {
//             lfm({type: 'image', prefix: '/administration/file-manager'}, function(lfmItems, path) {
//                 lfmItems.forEach(function (lfmItem) {
//                     context.invoke('insertImage', lfmItem.url);
//                 });
//             });
//
//         }
//     });
//     return button.render();
// };


$(function () {

    var options = {
        filebrowserImageBrowseUrl: '/administration/file-manager?type=image',
        filebrowserImageUploadUrl: '/administration/file-filemanager/upload?type=image&_token=',
        filebrowserBrowseUrl: '/administration/file-filemanager?type=Files',
        filebrowserUploadUrl: '/administration/file-filemanager/upload?type=Files&_token=',
        extraAllowedContent: 'div(*)'
    };

    $('textarea.editor').ckeditor(options);

    $('#lfm').filemanager('image',{
        select: 'single',
        prefix: '/administration/file-manager'
    });

    $('.select-multiple-images').filemanager('image',{
        select: 'multiple',
        prefix: '/administration/file-manager'
    });



    // $('.editor').summernote({
    //     toolbar: [
    //         ['popovers', ['lfm']],
    //         ['style', ['bold', 'italic', 'underline', 'clear']],
    //         ['font', ['strikethrough', 'superscript', 'subscript']],
    //         ['fontsize', ['fontsize']],
    //         ['color', ['color']],
    //         ['para', ['ul', 'ol', 'paragraph']],
    //         ['height', ['height']],
    //         ['misc',['fullscreen','undo','redo','codeview']]
    //     ],
    //     buttons: {
    //         lfm: LFMButton
    //     }
    // });

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green'
    });


    $('#sl-real-cats').select2({
        width: '100%'
    });

    // //Initialize Select2 Elements
    // $('#sl-cities').select2({
    //     placeholder: "Tất cả Thành phố",
    //     width: '100%'
    // });
    // $('#sl-district').select2({
    //     placeholder: "Tất cả Quận/ Huyện",
    //     width: '100%'
    // });
    // $('#sl-ward').select2({
    //     placeholder: "Tất cả Phường/ Xã",
    //     width: '100%'
    // });

    $('#sl-cities').on('change', function (e) {
        $.ajax({
            url: ajax.district,
            dataType: 'json',
            method: 'get',
            data:{
                id: $(this).val()
            },
            success: function(data){
                $('#sl-district').html('');
                $('#sl-ward').html('');
                $.each(data, function(index, item){
                    $('#sl-district').append('<option value="'+item.id+'">'+item.text+'</option>');

                })
            }
        });


    });

    $('#sl-district').on('change', function (e) {

        $.ajax({
            url: ajax.ward,
            dataType: 'json',
            method: 'get',
            data:{
                id: $(this).val()
            },
            success: function(data){
                $('#sl-ward').html('');
                $.each(data, function(index, item){
                    $('#sl-ward').append('<option value="'+item.id+'">'+item.text+'</option>');

                })
            }
        });




    });

})