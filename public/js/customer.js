$(document).ready(function(){
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	$(document).on('click','#customer-edit',function(){
		nama_perusahaan = $(this).parent().parent().find('#nama_perusahaan').text();
		telp_perusahaan = $(this).parent().parent().find('#telp_perusahaan').text();
		alamat_perusahaan = $(this).parent().parent().find('#alamat_perusahaan').text();
		fax = $(this).parent().parent().find('#fax').text();
		npwp = $(this).parent().parent().find('#npwp').text();

		$('#enama_perusahaan').val(nama_perusahaan);
		$('#etelp_perusahaan').val(telp_perusahaan);
		$('#efax').val(fax);
		$('#enpwp').val(npwp);
		$('#ealamat_perusahaan').val(alamat_perusahaan);
	});

});