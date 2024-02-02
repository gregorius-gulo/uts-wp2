 <!doctype HTML>
<html>
<head>
    <title>Data Dokter</title> <!-- UBAH -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Dokter</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Dokter</th><th>Spesialisasi</th><th>Alamat</th><th>Telepon</th><th>Email</th><th>Tanggal Lahir</th><!-- UBAH -->
                <th>
                    <a href="input-dokter.php"> <!-- UBAH -->
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from dokter order by nama_dokter ASC"); // UBAH //

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_dokter']?></td>               <!-- UBAH -->
                <td><?php echo $row['spesialisasi']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['telepon']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td>

                <a href="edit-dokter.php?id=<?php echo $row['id_dokter']?>">  <!-- UBAH -->
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-dokter.php?id=<?php echo $row['id_dokter']?>" onclick=" return confirm('Anda yakin menghapus data?')">  <!-- UBAH -->
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>