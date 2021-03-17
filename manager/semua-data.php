<head>
  <title>Pagination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
 <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Data Penjualan</h3>
                            
                                
<?php
switch($_GET['act']){
    default:
       
		   break;
		    case "hapus_semua_data";
        mysql_query("TRUNCATE data_survey");
        header('location:data_survey.php');
    break;

    case "edit_data_survey";
        include "edit_data_survey.php";
    break;
    case "hapus_data_survey";
        mysql_query("DELETE FROM data_survey WHERE id = '$_GET[id]'");
        header('location:data_survey.php');
    break;
} ?>                                    
                                   
                                  
                               
                                <div class="table-data__tool-right">
                                    <a href="media.php?module=input_dummy" class="btn btn-warning btn-sm">Input Dummy</a>
                                	<a href="input-data.html" class="btn btn-success btn-sm">Tambah Data</a>
                                    
                                   
                                    <a href="hapus-data.html" class="btn btn-danger btn-sm">Hapus Semua Data</a>
                                   
                                </div>
                           
                               <table class="table table-stripped table-hover datatab">
                                    <thead>
                                     <tr>
                                            
                                            <th>NO </th>
                                            <th>Kode</th>
                                            <th>Jenis</th>
                                            <th>Merk</th>
                                            <th>Tahun</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>      
                                    <?php  $no = 1; 
      								  $sql=mysql_query("SELECT * FROM data_survey ORDER BY id DESC");
        								while ($data=mysql_fetch_array($sql)){       ?>               	
                                        <tr class="tr-shadow">                                        
                                        <td><?php echo $no ?></td>
                  						<td>BRG_<?php echo $data[kode_barang] ?></td>
                 						<td><?php echo $data[jenis_barang] ?></td>
                  						<td><?php echo $data[merek] ?></td>
                  						<td><?php echo $data[tahun]?></td>
                 						<td>Rp <?php echo $data[harga] ?></td>
                  						<td><b><?php echo $data[status] ?></b></td>
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>                                                   
                                                </div>
                                            </td>
                                        </tr>
									<?php  $no++;       }?>
                                    </tbody>
                                </table>
                           
                      
                    
                </div>
            </section>
            <!-- END DATA TABLE-->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</html>