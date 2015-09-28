$(function(){
	// get click of the userlite create button
	$('.modalButton').click(function(){
		$('.modal').modal('show')
			.find('.modalContent')
			.load($(this).attr('value'));
	})
})