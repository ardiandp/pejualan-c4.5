 <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Data Penjualan</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                </div>

                                 <div class="table-data__tool-right">                                               
                                   
                                    <a href="hapus-data.html" class="btn btn-danger btn-sm">Hapus Semua Data Perhitungan</a>
                                   
                                </div>
                                 </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>

               <th>No</th> 

			   <th>Att Gain Ratio Max</th>

               <th>Atribut</th>

               <th>Nilai Atribut</th>

               <th>Total Kasus</th>

               <th>Jumlah Laris</th>

               <th>Jumlah Tidak Laris</th>

               <th>Entropy</th>

               <th>Gain</th>

			</tr>";

           

    
<?php
    $warna  = '$warna1'; 

    $sql=mysql_query("SELECT * FROM iterasi_c45");

    while ($data=mysql_fetch_array($sql)){

        if($warna == '$warna1'){ 

            $warna = '$warna2'; 

        } else { 

            $warna = '$warna1'; 

        } 

        echo "<tr>

               <td>$data[iterasi]</td>

               <td>$data[atribut_gain_ratio_max]</td>

			   <td>$data[atribut]</td>

               <td>$data[nilai_atribut]</td>

               <td>$data[jml_kasus_total]</td>

               <td>$data[jml_laris]</td>

               <td>$data[jml_tdk_laris]</td>

               <td>$data[entropy]</td>

               <td>$data[inf_gain]</td>";

        }

        echo "</tr>";

    echo"</table>"; ?>

     </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->