jQuery(document).ready(function () {



	jQuery('.request__btn').click(function () {

		var form = jQuery(this).closest('form');


		jQuery.ajax({
			type: 'post',
			dataType: 'html',
			data: form.serialize()
		});
	})
});
