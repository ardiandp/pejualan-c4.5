 <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Data Penjualan</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
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
                                   
                                  
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="input-dataset.html" class="btn btn-warning btn-sm">DataSet</a>
                                	<a href="input-data.html" class="btn btn-success btn-sm">Tambah Data</a>
                                    
                                   
                                    <a href="hapus-data.html" class="btn btn-danger btn-sm">Hapus Semua Data</a>
                                   
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->