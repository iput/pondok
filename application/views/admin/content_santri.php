<div class="container">
	<h3>Data santri Baru</h3>
	<hr/>
	<form class="form-horizontal" method="POST" action="<?php echo base_url('c_santri/daftarSantriBaru') ?>" id="formSantri">
		<div class="form-group">
			<label class="control-label col-md-3">Nama Lengkap</label>
			<div class="col-md-8">
				<input type="text" name="txtNamaSantri" class="form-control" placeholder="nama Santri">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Jenis Kelamin</label>
			<div class="col-md-8">
				<label><input type="radio" name="gender" value="laki-laki">Laki-laki</label>
				<label><input type="radio" name="gender" value="perempuan">Perempuan</label>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Tempat Lahir</label>
			<div class="col-md-8">
				<textarea class="form-control" name="txtTLahir" rows="4"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Tanggal Lahir</label>
			<div class="col-md-8">
				<input type="date" name="tanggalLahir" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3">Alamat Lengkap</label>
			<div class="col-md-8">
				<textarea class="form-control" name="txtAlamat" placeholder="RT/RW, Dusun, desa, kecamatan, kabupaten/kota"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Nomor HP</label>
			<div class="col-md-8">
				<input type="text" name="txtNoTelp" class="form-control" placeholder="nomor aktif">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Email</label>
			<div class="col-md-8">
				<input type="text" name="txtEmail" class="form-control" placeholder="email aktif">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Nama Facebook</label>
			<div class="col-md-8">
				<input type="text" name="txtFacebook" class="form-control" placeholder="nama facebook">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Tanggal Masuk</label>
			<div class="col-md-8">
				<input type="date" name="tanggalMasuk" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-8">
				<a href="<?php echo base_url('c_santri') ?>" class="btn btn-danger">Kembali</a>
				<button type="button" class="btn btn-default" id="btnDaftar">Daftar</button>
			</div>
		</div>
	</form>
</div>
<div class="alert alert-success" style="display: none;"></div>
<script type="text/javascript">
	$(function() {
		$('#btnDaftar').click(function(){
			var url = $('#formSantri').attr('action');
			var data = $('#formSantri').serialize();
			                var namasantri = $('input[name=txtNamaSantri]');
                var jenisKelamin = $('input[name=gender]');
                var kelahiran =$('textarea[name=txtTLahir]');
                var tglLahir = $('input[name=tanggalLahir]');
                var alamat = $('textarea[name=txtAlamat]');
                var telp = $('input[name=txtNoTelp]');
                var email = $('input[name=txtEmail]');
                var tglMasuk = $('input[name=tanggalMasuk]');
                var facebook = $('input[name=txtFacebook]');
                var pendidikan = $('input[name=txtPendidikan]');
                var result = '';

                if (namasantri.val()=='') {
                    namasantri.parent().parent().addClass('has-error');
                }else{
                    namasantri.parent().parent().removeClass('has-error');
                    result += '1';
                }

                if (jenisKelamin.val()=='') {
                    jenisKelamin.parent().parent().addClass('has-error');
                }else{
                    jenisKelamin.parent().parent().removeClass('has-error');
                    result += '2';
                }

                if (kelahiran.val()=='') {
                    kelahiran.parent().parent().addClass('has-error');
                }else{
                    kelahiran.parent().parent().removeClass('has-error');
                    result += '3';
                }

                if (tglLahir.val()=='') {
                    tglLahir.parent().parent().addClass('has-error');
                }else{
                    tglLahir.parent().parent().removeClass('has-error');
                    result += '4';
                }

                if (alamat.val()=='') {
                    alamat.parent().parent().addClass('has-error');
                }else{
                    alamat.parent().parent().removeClass('has-error');
                    result += '5';
                }

                if (telp.val()=='') {
                    telp.parent().parent().addClass('has-error');
                }else{
                    telp.parent().parent().removeClass('has-error');
                    result += '6';
                }
                if (email.val()=='') {
                    email.parent().parent().addClass('has-error');
                }else{
                    email.parent().parent().removeClass('has-error');
                    result += '7';
                }

                if (facebook.val()=='') {
                    facebook.parent().parent().addClass('has-error');
                }else{
                    facebook.parent().parent().removeClass('has-error');
                    result += '8';
                }
                if (result == '12345678') {
                    $.ajax({
                        type : 'ajax',
                        method : 'post',
                        url : url,
                        data : data,
                        async : false,
                        dataType : 'json',
                        success: function(response){
                            if (response.success) {
                                $('#formSantri')[0].reset();
                                $('.alert-success').html('selamat bergabung dengan admin ponpes gasek, gunakan email anda untuk melengkapi data').fadeIn().delay(3000).fadeOut('slow');
                            }
                        },
                        error: function(){
                            alert('data tidak bisa disimpan');
                        }
                    });
                } 
		});
	});
</script>