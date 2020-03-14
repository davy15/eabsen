

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

      

      <div class="content-header">
        <h2 class="content-header-title">Absensi</h2>
      </div> <!-- /.content-header -->

      

      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                KELAS <?= $user['kelas']; ?>
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">           

              <div class="table-responsive">

              <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                data-provide="datatable" 
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true"
              >
                  <thead>
                    <tr>
                      <th class="nomor"  data-sortable="true" data-direction="desc">
                        No Absen
                      </th>
                      <th data-filterable="true" data-direction="desc">NISN</th>
                      <th data-direction="asc" data-filterable="true">Nama Siswa</th>
                      <th>Absen</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no = 1;
                    foreach ($siswa as $data) : ?>
                    <tr>
                      <td class="checkbox-column">
                        <?= $no++ ?>
                      </td>
                      <td><?= $data->nis ?></td>
                      <td>
                        <?= $data->nama ?>
                      </td>
                      
                      <td class="hidden-xs hidden-sm">
                        <a href="<?= base_url("humas/ubah/$data->nis") ?>" class="btn btn-success" role="button">Absen</a>
                      </td>
                    </tr>

                  <?php endforeach; ?>

                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->
              

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        

        </div> <!-- /.col -->

      </div> <!-- /.row -->





        

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->


