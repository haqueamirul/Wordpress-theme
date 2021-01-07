jQuery(document).ready(function($){

	var mediaUploader;
	$( 'button#upload-button' ).on('click',function(e){
		e.preventDefault();

		if ( mediaUploader ) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose your Client picture',
			button: {
				text: 'Choose picture'
			},
			multiple: false
		});
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('input#client-picture').val(attachment.url);
		});
		mediaUploader.open();
	})
});