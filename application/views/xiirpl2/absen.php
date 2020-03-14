
  <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="active">
          <a href="index.html">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>

          

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->


<div class="container">

  <div class="content">

    <div class="content-container">



      <div class="portlet">
      
        <div class="portlet-header">
      
          <h3>
            <i class="fa fa-tasks"></i>
           Absen
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class="portlet-content">

          <!-- Menampilkan Error jika validasi tidak valid -->
          <div style="color: red;"><?php echo validation_errors(); ?></div>

          <?php echo form_open("siswa/ubah/".$siswa->nis); ?>
      
          <form class="form-horizontal" role="form">

            <div class="form-group">
              <label class="col-md-2">NISN</label>

              <div class="col-md-5">
                <input type="text" class="form-control" value="<?php echo set_value('input_nis', $siswa->nis); ?>"> 
              </div>
            </div>

             <div class="form-group">
              <label class="col-md-2">NAMA</label>

              <div class="col-md-5">
                <input type="text" class="form-control" value="<?php echo set_value('input_nama', $siswa->nama); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Keterangan</label>

              <div class="col-md-10">
                <label class="radio-inline">
                  <input type="radio" name="radioset1" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($siswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Sakit
                </label>
                <label class="radio-inline">
                  <input type="radio" name="radioset1" <?php echo set_radio('jeniskelamin', 'Perempuan', ($siswa->jenis_kelamin == "Perempuan")? true : false); ?>> Izin
                </label>

              </div>

            </div>
           
           <div class="col-md-5">
            <input type="submit" name="submit" value="Ubah">
             <a href="<?= base_url(); ?>" class="btn btn-success" role="button">Absen</a>
            <?php echo form_close(); ?>
          </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->



        

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->


