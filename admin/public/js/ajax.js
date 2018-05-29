// var btn = document.getElementById('button');

$('.btn-delete').click(function(ev){

	ev.preventDefault();

	var href = $(this).attr('href');
	var title = $(this).data('title');
	$('#delete-item').attr('href',href);
	$('#modal-delete .modal-title').html('Are you sure delete ' +title);
	$('#modal-delete').modal('show');
	// alert(href);
});