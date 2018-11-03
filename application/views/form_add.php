<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>

        <h1>Tambah Data Mahasiswa</h1>
        <form method="post" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
          <table>
            <tr>
              <td> No Induk </td>
              <td><input type="text" name="nim"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="simpan" value="Tambah"></td>
            </tr>
          </table>
      </form>
    </body>
</html>
