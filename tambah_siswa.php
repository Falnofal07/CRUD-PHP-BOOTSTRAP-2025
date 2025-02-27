<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header" style="background-color: lightblue;">
              TAMBAH SISWA

            </div>
            <div class="card-body">
              <form action="simpan_siswa.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="e.g., 123456789" class="form-control">

                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="e.g., John Doe" class="form-control">

                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="e.g., Jl. Merdeka No. 1" rows="4"></textarea>

                </div>
                
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">SIMPAN</button>

                <div id="formFeedback" class="mt-2"></div>

                <button type="reset" class="btn btn-warning" style="background-color: #ffc107; border-color: #ffc107;">RESET</button>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
