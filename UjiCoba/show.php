<!DOCTYPE html>

<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kp";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Unable to connect Database" . mysqli_connect_error());
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="show_all/style.css">
    <link rel="stylesheet" href="show_all/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="show_all/bootstrap/css/dataTables.bootstrap.min.css">

    <title>Data Table</title>
  </head>
  <body>
    <div class="container">
      <table id="University" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr id="thUniversity">
            <th>No</th>
            <th>Kawasan</th>
            <th>Witel</th>
            <th>Ndem</th>
            <th>Ncli</th>
            <th>Ndos</th>
            <th>Status</th>
            <th>Alpro</th>
            <th>ND</th>
            <th>No Internet</th>
            <th>Citem</th>
            <th>Kecepatan</th>
            <th>MDF</th>
            <th>Deskripsi</th>
            <th>Chanel</th>
            <th>Status Demand</th>
            <th>Tgl Reg</th>
            <th>Tgl Status</th>
            <th>Umur</th>
            <th>Nama</th>
            <th>Kcontact</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kawasan</th>
            <th>Witel</th>
            <th>Ndem</th>
            <th>Ncli</th>
            <th>Ndos</th>
            <th>Status</th>
            <th>Alpro</th>
            <th>ND</th>
            <th>No Internet</th>
            <th>Citem</th>
            <th>Kecepatan</th>
            <th>MDF</th>
            <th>Deskripsi</th>
            <th>Chanel</th>
            <th>Status Demand</th>
            <th>Tgl Reg</th>
            <th>Tgl Status</th>
            <th>Umur</th>
            <th>Nama</th>
            <th>Kcontact</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $sql = "SELECT * FROM monitoring";
            $query = mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($query)){
              echo "<tr>";
              echo "<td>".$data['no']."</td>";
              echo "<td>".$data['kawasan']."</td>";
              echo "<td>".$data['witel']."</td>";
              echo "<td>".$data['ndem']."</td>";
              echo "<td>".$data['ncli']."</td>";
              echo "<td>".$data['ndos']."</td>";
              echo "<td>".$data['status']."</td>";
              echo "<td>".$data['alpro']."</td>";
              echo "<td>".$data['nd']."</td>";
              echo "<td>".$data['no_internet']."</td>";
              echo "<td>".$data['citem']."</td>";
              echo "<td>".$data['kecepatan']."</td>";
              echo "<td>".$data['mdf']."</td>";
              echo "<td>".$data['deskripsi']."</td>";
              echo "<td>".$data['chanel']."</td>";
              echo "<td>".$data['status_demand']."</td>";
              echo "<td>".$data['tgl_reg']."</td>";
              echo "<td>".$data['tgl_status']."</td>";
              echo "<td>".$data['umur']."</td>";
              echo "<td>".$data['nama']."</td>";
              echo "<td>".$data['kcontact']."</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

    <script type="text/javascript" src="show_all/bootstrap/JQuery/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="show_all/bootstrap/JQuery/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="show_all/bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#University').DataTable();
      } );
    </script>
  </body>
</html>
