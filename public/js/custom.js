$(document).ready(function(){
	$(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
});

/*------------------*/

$('.radio-group .media').click(function(){
	$(this).parent().parent().find('.media').removeClass('active-class');
	$(this).addClass('active-class');
	var val = $(this).attr('data-value');
	$(this).parent().parent().find('input').val(val);
});

/*------------------*/


/*------------------*/
var manualUploader = new qq.FineUploader({
	element: document.getElementById('fine-uploader-manual-trigger'),
	template: 'qq-template-manual-trigger',
	request: {
		endpoint: '/server/uploads'
	},
	thumbnails: {
		placeholders: {
			waitingPath: '/images/placeholders/waiting-generic.png',
			notAvailablePath: '/images/placeholders/not_available-generic.png'
		}
	},
	autoUpload: false,
	debug: true
});

qq(document.getElementById("trigger-upload")).attach("click", function() {
	manualUploader.uploadStoredFiles();
});
        /*----------------*/