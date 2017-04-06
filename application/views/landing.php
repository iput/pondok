<?php
function random($panjang) {
    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter{$pos};
    }
    return $string;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>landing </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/bootstrap/css/font-awesome.css') ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/bootstrap/css/style.css') ?>" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Landing : </strong>Gasek Admin
                    &nbsp;&nbsp;
                    <strong>Support : </strong>Gasek Multimedia
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
        </div>
    </div>

    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav navbar-right nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Beranda</a></i>
                            <li class=""><a href="#profile" data-toggle="tab">Informasi</a></li>
                            <li class=""><a href="#messages" data-toggle="tab">Santri baru</a></li>
                            <li class=""><a href="#settings" data-toggle="tab">Alumni</a></li>
                            <li class=""><a href="<?php echo base_url('login') ?>">Login</a></li>
                            </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Alhamudlillah</h4>
                                    <p>Akan Segera Rilis website admin pertama pondok pesntren sabilurrosyad. semga dengan di rilisnya website ini akan memberikan kemudahan kepada pengurus. serta pihak ndalem dalam melakukan manajemen terhadap data santri dan proses bisnis yang dilaksanakan oleh pondok</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Informasi Pendaftaran</h4>
                                    <p>informasi pendaftaran pondok pesantren sabilurrosyad selengkapnya bisa anda kunjungi di link berikut ini <a href="https://www.ponpesgasek.com">Pondokku</a> </p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Form untuk santri Baru</h4>
                                    <p>Silakan isi form berikut ini untuk melakukan proses pendaftaran</p>
                                    <form class="form-vertical" method="POST" action="<?php echo base_url('c_santri/daftarSantriBaru') ?>" id="formPendaftaran">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="txtNamaSantri" class="form-control" placeholder="nama lengkap anda">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <label class="radio-inline"><input type="radio" name="gender" value="laki-laki">Laki-laki</label>
                                            <label class="radio-inline"><input type="radio" name="gender"  value="perempuan">Perempuan</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <textarea class="form-control" name="txtTLahir"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tanggalLahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea class="form-control" name="txtAlamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" name="txtNoTelp" class="form-control" placeholder="nomor hp aktif">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="txtEmail" class="form-control" placeholder="email aktif">
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="txtFacebook" class="form-control" placeholder="nama facebook">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan sekarang</label>
                                            <input type="text" name="txtPendidikan" class="form-control" placeholder="pendidikan yang sekarang di tempuh">
                                        </div>
                                        <div class="alert alert-success" style="display: none;"></div>
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-defaut">Bersihkan</button>
                                            <button type="button" class="btn btn-primary" id="btndaftar">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Pendataan Alumni</h4>
                                    <p>Untuk pengisian berkas alumni silahkan isi sesuai dengan data yang sebenarnya</p>
                                    <form class="form-horizontal" method="POST" action="<?php echo base_url('c_santri/addAlumni') ?>" id="form_alumni">
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Nama Lengkap</label>
                                            <div class="col-md-8">
                                                <input type="text" name="txtNamaLengkapAlumni" class="form-control" placeholder="Nama lengkap anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Nama Panggilan</label>
                                            <div class="col-md-8">
                                                <input type="text" name="txtNamaPanggilanAlumni" class="form-control" placeholder="Nama panggilan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Jenis Kelamin</label>
                                            <div class="col-md-8">
                                                <label class="radio-inline"><input type="radio" name="jenisKelaminAlumni" value="laki-laki">Laki-laki</label>
                                                <label class="radio-inline"><input type="radio" name="jenisKelaminAlumni" value="Perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tempat Lahir</label>
                                            <div class="col-md-8">
                                                <input type="text" name="txtKelahiranAlumni" class="form-control" placeholder="Tempat lahir">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tanggal lahir</label>
                                            <div class="col-md-8">
                                                <input type="date" name="tglLahirAlumni" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Alamat Lengkap</label>
                                            <div class="col-md-8">
                                                <textarea name="txtAlamatAlumni" class="form-control" placeholder="masukan alamat selengkap-lengkapnya" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Nomor Telepon</label>
                                            <div class="col-md-8">
                                                <input type="text" name="txtTeleponAlumni" class="form-control" placeholder="masukan nomor telepon aktif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" name="txtEmailAlumni" class="form-control" placeholder="masukan email aktif anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Nama Facebook</label>
                                            <div class="col-md-8">
                                                <input type="text" name="txtFacebookAlumni" class="form-control" placeholder="nama facebook anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tahun Masuk Pondok</label>
                                            <div class="col-md-8">
                                                <input type="date" name="txtTahunMasukPondok" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tahun Boyong</label>
                                            <div class="col-md-8">
                                                <input type="date" name="txtTahunBoyong" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="alert alert-info" style="display: none;"></div>
                                        <div class="col-md-2"></div>
                                        <input type="hidden" name="password" id="password" value="<?php echo random(8)?>" style="text-transform: uppercase">
                                            <div class="col-md-8">
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <button type="button" class="btn btn-primary" id="btnSimpanAlumni">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <p><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Mohon maaf jika informasi yang ditampilkan kurang menarik. karena website ini masih dalam tahap pengembangan.</p>
                    </div>
                </div>

            </div>    
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; Gasek Multimedia | By : <a href="" target="_blank">GM</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
            <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-2.2.3.min.js') ?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript">
        $(function() {
            $('#btndaftar').click(function(){
                var url = $('#formPendaftaran').attr('action');
                var data = $('#formPendaftaran').serialize();

                var namasantri = $('input[name=txtNamaSantri]');
                var jenisKelamin = $('input[name=gender]');
                var kelahiran =$('textarea[name=txtTLahir]');
                var tglLahir = $('input[name=tanggalLahir]');
                var alamat = $('textarea[name=txtAlamat]');
                var telp = $('input[name=txtNoTelp]');
                var email = $('input[name=txtEmail]');
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
                                $('#formPendaftaran')[0].reset();
                                $('.alert-success').html('selamat bergabung dengan admin ponpes gasek, gunakan email anda untuk melengkapi data').fadeIn().delay(5000).fadeOut('slow');
                            }
                        },
                        error: function(){
                            alert('data tidak bisa disimpan');
                        }
                    });
                }                
            });

            $('#btnSimpanAlumni').click(function(){
                var url2 = $('#form_alumni').attr('action');
                var data2 = $('#form_alumni').serialize();
                
                var namaAlumni = $('input[name=txtNamaLengkapAlumni]');
                var password = $('input[name=password]');
                var tempatLahirAlumni = $('input[name=txtKelahiranAlumni]');
                var TLahirAlumni = $('input[name=tglLahirAlumni]');
                var alamatAlumni = $('textarea[name=txtAlamatAlumni]');
                var telponAlumni = $('input[name=txtTeleponAlumni]');
                var facebookAlumni = $('input[name=txtFacebookAlumni]');
                var emaiLAlumni = $('input[name=txtEmailAlumni]');
                var tahunMasukA = $('input[name=txtTahunMasukPondok]');
                var tahunBoyong = $('input[name=txtTahunBoyong]');
                var result = '';

                if (namaAlumni.val() == '') {
                    namaAlumni.parent().parent().addClass('has-error');
                }else{
                    namaAlumni.parent().parent().removeClass('has-error');
                    result += '0';
                }

                if (tempatLahirAlumni.val() == '') {
                    tempatLahirAlumni.parent().parent().addClass('has-error');
                }else{
                    tempatLahirAlumni.parent().parent().removeClass('has-error');
                    result += '1';
                }

                if (TLahirAlumni.val()=='') {
                    TLahirAlumni.parent().parent().addClass('has-error');
                }else{
                    TLahirAlumni.parent().parent().removeClass('has-error');
                    result += '2';
                }

                if (alamatAlumni.val()=='') {
                    alamatAlumni.parent().parent().addClass('has-error');
                }else{
                    alamatAlumni.parent().parent().removeClass('has-error');
                    result +='3';
                }

                if (telponAlumni.val()=='') {
                    telponAlumni.parent().parent().addClass('has-error');
                }else{
                    telponAlumni.parent().parent().removeClass('has-error');
                    result += '4';
                }

                if (facebookAlumni.val()=='') {
                    facebookAlumni.parent().parent().addClass('has-error');
                }else{
                    facebookAlumni.parent().parent().removeClass('has-error');
                    result += '5';
                }
                if (emaiLAlumni.val()=='') {
                    emaiLAlumni.parent().parent().addClass('has-error');
                }else{
                    emaiLAlumni.parent().parent().removeClass('has-error');
                    result +='6';
                }
                if (result=='0123456') {
                    $.ajax({
                        type : 'ajax',
                        method : 'post',
                        url : url2,
                        data : data2,
                        async : false,
                        dataType : 'json',
                        success: function(response){
                            if (response.success) {
                                $('#form_alumni')[0].reset();
                                $('.alert-info').html('data anda telah masuk ke dalam sistem kami,<br/> gunakan email dan sandi berikut '+password.val()+'  untuk login dan melengkapi persyaratan').fadeIn().delay(10000).fadeOut('slow');
                            }
                        },
                        error: function(){
                            alert('data tidak bisa disimpan');
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>
