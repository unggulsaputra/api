$(document).ready(function(){
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

//tambah barang
	$('#tambah').click(function(){
		$('#plus-po').append(
			'<div class="row">'+
                '<div class="col-xs-4">'+
	                '<label>Jenis Barang</label>'+
	                '<div class="form-group">'+
	                	'<select name="jenis_barang[]" class="form-control" required>'+
	                		'<option disabled selected>Pilih Jenis Barang</option>'+
	                		'<option value="Solar Industri">Solar Industri</option>'+
	                		'<option value="Kontainer">Kontainer</option>'+
	                	'</select>'+
	                '</div>'+
                '</div>'+
                '<div class="col-xs-2">'+
	                '<label>Satuan</label>'+
	                '<div class="form-group">'+
	                	'<input type="text" class="form-control" name="satuan[]" placeholder="liter/buah" required>'+
	                '</div>'+
                '</div>'+
                '<div class="col-xs-3">'+
	                '<label>Harga Barang</label>'+
	                '<div class="form-group">'+
	                	'<input type="text" class="form-control" name="harga_barang[]" placeholder="Harga Barang" required>'+
	                '</div>'+
                '</div>'+
                '<div class="col-xs-2">'+
	                '<label>Jumlah Barang</label>'+
	                '<div class="form-group">'+
	                	'<input type="text" class="form-control" name="jumlah_barang[]" placeholder="Jumlah Barang" required>'+
	                '</div>'+
                '</div>'+
                '<div class="col-xs-1">'+
                	'<button type="button" style="margin-top: 25px;" id="kurang" class="btn btn-danger">-</button>'+
                '</div>'
		);
	});
// end tambah barang

	$(document).on('click','#kurang',function(){
		$(this).parent().parent().remove();
	});

//tambah po
	$('#post-po').on('submit',function(e){
		e.preventDefault();
		data = $(this).serialize();
		$.post('/po/post',data,function(datas){
			$.each(datas,function(i,val){
				console.log(val);
			});
		});
	});
// end tambah po

// validasi create po

	$.validator.setDefaults({
		highlight:function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error');
		},
		unhighlight:function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error');
		}
	});

	$('#post-po').validate({
	  rules: {
	    nama_perusahaan: {
	      required: true,
	      minlength: 2
	    },
	    telp_perusahaan: {
	      required: true,
	      number:true
	    },
	    fax: {
	      required: true,
	      number:true
	    },
	    alamat_perusahaan: {
	      required: true,
	    },
	    npwp: {
	      required: true,
	    },
	    nomer_po: {
	      required: true,
	    },
	    tanggal_po: {
	      required: true,
	    },
	    tujuan_pengiriman: {
	      required: true,
	    },
	    cara_pembayaran: {
	      required: true,
	    },
	    lama_pembayaran_bulan: {
	      required: true,
	      number : true
	    },
	    lama_pembayaran_hari: {
	      required: true,
	      number : true
	    },
	    "jenis_barang[]": {
	      required: true,
	    },
	    "satuan[]": {
	      required: true
	    },
	    "harga_barang[]": {
	      required: true,
	      number : true
	    },
	    "jumlah_barang[]": {
	      required: true,
	      number : true
	    }

	  },
	  messages: {
	    nama_perusahaan: {
	    	required :"nama perusahaan harus diisi",
	    	minlength :"minimal 2 karakter",
	    },
	    telp_perusahaan: {
	    	required :"telepon perusahaan harus diisi",
	    	number :"hanya menggunakan angka",
	    },
	    fax: {
	    	required :"telepon perusahaan harus diisi",
	    	number :"hanya menggunakan angka",
	    },
	    alamat_perusahaan: {
	      required: "alamat perusahaan harus diisi",
	    },
	    npwp: {
	      required: "npwp harus diisi",
	    },
	    nomer_po: {
	      required: "nomer po harus diisi",
	    },
	    tanggal_po: {
	      required: "tanggal po harus diisi",
	    },
	    tujuan_pengiriman: {
	      required: "tujuan pengiriman harus diisi",
	    },
	    cara_pembayaran: {
	      required: "cara pembayaran harus diisi",
	    },
	    lama_pembayaran_bulan: {
	      required: "diisi!",
	      number : "hanya angka!"
	    },
	    lama_pembayaran_hari: {
	      required: "diisi",
	      number : "hanya angka!"
	    },
	    "jenis_barang[]": {
	      required: "jenis barang harus diisi",
	    },
	    "satuan[]": {
	      required: "satuan harus diisi"
	    },
	    "harga_barang[]": {
	      required: "harga harus diisi"
	    },
	    "jumlah_barang[]": {
	      required: "Jumlah harus diisi",
	      number : "harus angka!"
	    }
	  }
	});
	// end validasi create po

	var data;

	//detail
	// $(document).on('click','detail',function(){
	// 	id = $(this).data('id');
	// 	$.post('/po/detail',{id:id},function(datas){
	// 		data = datas;
	// 	});
	// });

	//edit
	// $('#edit').click(function(){
	// 	$.each(data,function(i,val){

	// 	});
	// });
});