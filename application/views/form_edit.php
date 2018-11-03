<html>
    <head>
        <title>Edit Data Mahasiswa</title>
    </head>
    <body>

        <h1>Tambah Data Mahasiswa</h1>
        <form method="post" action="<?php echo base_url()."index.php/crud/do_update"; ?>">
          <table>
            <tr>
              <td> No Induk </td>
              <td><input type="text" name="nim" value="<?php echo $nim; ?>" readonly></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><textarea name="alamat"><?php echo $alamat; ?> </textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="simpan" value="Edit"></td>
            </tr>
          </table>
      </form>
    </body>
</html>
