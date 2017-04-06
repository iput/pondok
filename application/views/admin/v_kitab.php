  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bagian Tata Usaha Pondok pesantren Sabilurrosyad
        <small>Official Gasek Community</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kitab invertaris</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
            <div class="alert alert-success"  style="display: none;"></div>
              <button type="button" class="btn btn-primary btn-flat" id="btnTambah">Tambah Kitab</button>
              <h3>Data Santri</h3>
              <table class="table table-responsive table-bordered table-hover" id="tabel_kitab">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Nama Kitab</td>
                    <td>Pengarang</td>
                    <td>Harga</td>
                    <td>Tanggal Masuk</td>
                    <td>Stok</td>
                    <td>Operasi</td>
                  </tr>
                </thead>
                <tbody id="dataKitab">
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Official Gasek Community
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalKitab">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="" id="formKitab">
            <div class="form-group">
              <label class="control-label col-md-3">Nama Kitab</label>
              <div class="col-md-9">
                <input type="hidden" name="txtId" value="0">
                <input type="text" name="txtNamaKitab" class="form-control" placeholder="nama kitab">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Pengarang</label>
              <div class="col-md-9">
                <input type="text" name="txtPengarang" class="form-control" placeholder="nama pengarang">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Harga</label>
              <div class="col-md-9">
                <input type="text" name="txtHarga" class="form-control" placeholder="harga kitab">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Stok</label>
              <div class="col-md-9">
                <input type="text" name="txtStok" class="form-control" placeholder="jumlah kitab yang ada">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Batal</button>
          <button type="button"  class="btn btn-default btn-flat" id="btnSimpan">Simpan Kitab</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="modalHapus">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-red">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Konfirmasi Hapus Data</h3>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin akan menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger btn-flat" id="btnHapus">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(function() {
      showDataKitab();
      $('#tabel_kitab').dataTable();
      $('#btnTambah').click(function() {
        $('#modalKitab').modal('show');
        $('#modalKitab').find('.modal-title').text('Tambah kitab baru');
        $('#formKitab').attr('action','<?php echo base_url('c_kitab/insertKitab') ?>');
      });

          $('#btnSimpan').click(function(){
          var url = $('#formKitab').attr('action');
          var data = $('#formKitab').serialize();

          var namaKitab = $('input[name=txtNamaKitab]');
          var pengarang = $('input[name=txtPengarang]');
          var harga = $('input[name=txtHarga]');
          var stok = $('input[name=txtStok]');
          var result = '';

          if (namaKitab.val()=='') {
            namaKitab.parent().parent().addClass('has-error');
          }else{
            namaKitab.parent().parent().removeClass('has-error');
            result += '1';
          }
          if (pengarang.val()=='') {
            pengarang.parent().parent().addClass('has-error');
          }else{
            pengarang.parent().parent().removeClass('has-error');
            result += '2';
          }
          if (harga.val()=='') {
            harga.parent().parent().addClass('has-error');
          }else{
            harga.parent().parent().removeClass('has-error');
            result += '3';
          }
          if (stok.val()=='') {
            stok.parent().parent().addClass('has-error');
          }else{
            stok.parent().parent().removeClass('has-error');
            result += '4';
          }

          if (result == '1234') {
            $.ajax({
              type : 'ajax',
              method : 'post',
              url : url,
              data : data,
              async : false,
              dataType : 'json',
              success: function(response){
                if (response.success) {
                  $('#modalKitab').modal('hide');
                  $('#formKitab')[0].reset();
                  if (response.type =='add') {
                    var type = 'ditambahkan';
                  }else if (response.type =='update'){
                    var type ='diperbarui';
                  }
                  $('.alert-success').html('Kitab berhasil '+type+'').fadeIn().delay(4000).fadeOut('slow');
                  showDataKitab();
                }else{
                  alert('ada yang salah');
                }
              },
              error: function(){
                alert('data tidak bisa di simpan');
              }
            });
          }
        });

          $('#dataKitab').on('click','.item-edit', function(){
            var id = $(this).attr('data');
            $('#modalKitab').modal('show');
            $('#modalKitab').find('.modal-title').text('edit data kitab');
            $('#formKitab').attr('action', '<?php echo base_url('c_kitab/updateKitab') ?>');
            $.ajax({
              type : 'ajax',
              method : 'get',
              url : '<?php echo base_url('c_kitab/editKitab') ?>',
              data: {id : id},
              async : false,
              dataType : 'json',
              success: function(data){
                $('input[name=txtNamaKitab]').val(data.nama_kitab);
                $('input[name=txtPengarang]').val(data.pengarang_kitab);
                $('input[name=txtHarga]').val(data.harga_kitab);
                $('input[name=txtStok]').val(data.stok_kitab);
                $('input[name=txtId]').val(data.id_kitab);
              },
              error: function(){
                alert('data tidak bisa diperbarui');
              }
            });  
          });

          $('#dataKitab').on('click', '.item-hapus', function(){
            var id = $(this).attr('data');
            $('#modalHapus').modal('show');
            $('#btnHapus').unbind().click(function(){
              $.ajax({
                type : 'ajax',
                method : 'get',
                url : '<?php echo base_url('c_kitab/hapusDataKitab') ?>',
                data : {id: id},
                dataType : 'json',
                success : function(response){
                  if (response.success) {
                    $('#modalHapus').modal('hide');
                    $('.alert-success').html('data berhasil dihapus').fadeIn().delay(2000).fadeOut('slow');
                    showDataKitab();
                  }
                }
              });
            });
          });

          function showDataKitab() {
            $.ajax({
              type : 'ajax',
              url : '<?php echo base_url('c_kitab/getDataKitab') ?>',
              async : false,
              dataType : 'json',
              success: function(data){
                var html = '';
                var i;
                for (var i = 0; i < data.length; i++) {
                  html += '<tr>'+
                  '<td>'+data[i].id_kitab+'</td>'+
                  '<td>'+data[i].nama_kitab+'</td>'+
                  '<td>'+data[i].pengarang_kitab+'</td>'+
                  '<td>'+data[i].harga_kitab+'</td>'+
                  '<td>'+data[i].tanggal_beli+'</td>'+
                  '<td>'+data[i].stok_kitab+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id_kitab+'">Edit</a>&nbsp;'+
                    '<a href="javascript:;" class="btn btn-danger item-hapus" data="'+data[i].id_kitab+'">Hapus</a>'+
                  '</td>'+
                  '</tr>';
                }
                $('#dataKitab').html(html);
              },
              error: function(){
                alert('data tidak bisa di tampilkan');
              }
            });
          }
    });
  </script>
