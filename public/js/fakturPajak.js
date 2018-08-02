$(document).ready(function(){
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	//btn edit
	$(document).on('click','#edit_faktur',function(){
		$('#btn-post-update').text('Update Faktur').removeClass("btn-primary").addClass("btn-success");
	});

	//btn create
	$(document).on('click','#create_faktur',function(){
		$('#btn-post-update').text('Tambah Faktur').removeClass("btn-success").addClass("btn-primary");
	});

});