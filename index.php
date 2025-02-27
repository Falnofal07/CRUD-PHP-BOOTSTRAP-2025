<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Data Siswa</title>
    <style>

        .btn {
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .table th, .table td {
            transition: background-color 0.3s;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" style="background-color: lightblue;">
              DATA SISWA

            </div>
            <div class="card-body">
              <div class="mb-3">
                <input type="text" id="searchInput" placeholder="Search by NISN or Name" class="form-control" onkeyup="searchTable()">
              </div>
                <a href="tambah_siswa.php" class="btn btn-md btn-success" style="background-color: #28a745; margin-bottom: 10px">TAMBAH DATA</a>
                <a href="export.php" class="btn btn-md btn-info" style="margin-bottom: 10px; margin-left: 10px;">EXPORT CSV</a>



                <table class="table table-bordered" id="myTable" style="width:100%">

                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody id="tableBody">

                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_siswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nisn'] ?></td>
                      <td><?php echo $row['nama_lengkap'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td class="text-center" style="white-space: nowrap;">

                      <a href="edit_siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary" style="margin-right: 5px;">

                            <i class="fas fa-edit"></i> EDIT
                        </a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $row['id_siswa'] ?>)">
                            <i class="fas fa-trash-alt"></i> HAPUS
                        </a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record?")) {
          window.location.href = "hapus_siswa.php?id=" + id;
        }
      }

      function searchTable() {
        const input = document.getElementById("searchInput");
        const filter = input.value.toLowerCase();
        const table = document.getElementById("myTable");
        const tr = table.getElementsByTagName("tr");

        for (let i = 1; i < tr.length; i++) {
          const tdNisn = tr[i].getElementsByTagName("td")[1];
          const tdName = tr[i].getElementsByTagName("td")[2];
          if (tdNisn || tdName) {
            const txtValueNisn = tdNisn.textContent || tdNisn.innerText;
            const txtValueName = tdName.textContent || tdName.innerText;
            if (txtValueNisn.toLowerCase().indexOf(filter) > -1 || txtValueName.toLowerCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>

    <script>
      $(document).ready(function() {
          $('#myTable').DataTable({
              "paging": true,
              "ordering": true,
              "info": true,
              "searching": true
          });
      });

    </script>
  </body>
</html>
