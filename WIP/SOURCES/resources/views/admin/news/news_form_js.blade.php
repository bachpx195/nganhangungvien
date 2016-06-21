<script>
$(function() {
	jQuery("body")
	.on("click", "#btn-save", function(){

		$form = $(this).closest('form');

		var validator = $form.validate({
			ignore		: "",
			errorClass	: 'help-block has-error'
		});
	    if(validator.form()) {
	    	$form.submit();
	    } else {
	    }
	});
});
$(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')     }
    });

    $('#noi_dung').summernote({
	  height: 300,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,             // set maximum height of editor
	  focus: true,                  // set focus to editable area after initializing
	   toolbar: [
	    ['style', ['style']],
	    ['font', ['bold', 'italic', 'underline', 'clear']],
	    ['fontname', ['fontname']],
	    ['color', ['color']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['height', ['height']],
	    ['table', ['table']],
	    ['insert', ['link', 'picture', 'hr']],
	    ['view', ['fullscreen', 'codeview']],
	    ['help', ['help']]
	  ],
        onImageUpload: function(files) {
        	console.log('onImageUpload');
            sendFile(files[0]);
        }
    });
        function sendFile(file, editor, welEditable) {

        	console.log('sendFile');

            data = new FormData();
            data.append("file", file);//You can append as many data as you want. Check mozilla docs for this

            console.log('Ok');
            $.ajax({
                data: data,
                type: "POST",
                url: "{{ URL::to('news/upload') }}",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {

                	console.log('success');

console.log(url);


                    $('#noi_dung').summernote('editor.insertImage', url);
                },
                faild: function(response) {
                	console.log(response);
                },
                error: function(error) {
                	console.log(error);
                }
            });
        }
    $('#mieu_ta').summernote({
	  height: 100,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,             // set maximum height of editor
	  focus: false,                  // set focus to editable area after initializing summernote
	  toolbar: [
	    ['style', ['style']],
	    ['font', ['bold', 'italic', 'underline', 'clear']],
	    ['fontname', ['fontname']],
	    ['color', ['color']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['height', ['height']],
	    ['help', ['help']]
	  ],
	});
});
</script>