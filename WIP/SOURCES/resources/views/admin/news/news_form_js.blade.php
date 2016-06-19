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
    });
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