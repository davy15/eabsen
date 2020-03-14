<html>
  <head>
    <title>E-ABSEN</title>
  </head>
  <body>
    <h1>Absen Siswa</h1>
    <hr>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("humas/tambah/".$siswa->nis); ?>
      <table cellpadding="8">
        <tr>
          <td>NIS</td>
          <td><input type="text" name="input_nis" value="<?php echo set_value('input_nis', $siswa->nis); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $siswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Mulai PKL</td>
          <td>
            <input type="date" name="mulai_pkl">
          </td>
        </tr>
        <tr>
          <td>Selesai PKL</td>
          <td>
            <input type="date" name="selesai_pkl">
          </td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td><input type="text" name="kelas" value="<?php echo set_value('kelas', $siswa->kelas); ?>"></td>
        </tr>
        <tr>
          <td>Upload</td>
          <td><input type="file" name="berkas"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Absen">
      <a href="<?php echo base_url('humas'); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>