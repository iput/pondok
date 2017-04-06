  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bagian Kesantrian Pondok pesantren Sabilurrosyad
        <small>Official Gasek Community</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Santri</h3>

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
              <a href="<?php echo base_url('C_santri/tambah_data'); ?>" " class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data</a>
              <h3>Data Santri</h3>
              <table class="table table-responsive table-bordered table-hover" id="tabel_santri">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Nama Santri</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Tanggal Lahir</td>
                    <td>Email</td>
                    <td>Nomor HP</td>
                    <td>facebook</td>
                    <td>Tanggal Masuk</td>
                    <td>Operasi</td>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php foreach ($santri as $dataS): ?>
                  <tr>
                  <td><?php echo $dataS['id_santri'] ?></td>
                  <td><?php echo $dataS['nama_santri'] ?></td>
                  <td><?php echo $dataS['jenis_kelamin'] ?></td>
                  <td><?php echo $dataS['alamat_santri'] ?></td>
                  <td><?php echo $dataS['tanggal_lahir'] ?></td>
                  <td><?php echo $dataS['email_santri'] ?></td>
                  <td><?php echo $dataS['noTelpon_santri'] ?></td>
                  <td><?php echo $dataS['facebook_santri'] ?></td>
                  <td><?php echo $dataS['tahun_masuk'] ?></td>
                  <td>
                    <a href="c_santri/tambahSantri" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="c_santri/tambahSantri" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                  </td>
                  </tr>
                  <?php endforeach ?>
                  
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
  <script type="text/javascript">
    $(function(){
      $('#tabel_santri').dataTable();
    });
  </script>