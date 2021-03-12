 <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Pohon Keputusan Menggunakan Algoritma 
                                <span>C4.5</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

              <section class="statistic statistic2">
                <div class="container">
                   
<?php

switch($_GET['act']){
    default:
		//echo "<h2>Pohon Keputusan Menggunakan Algoritma C45</h2>";
		echo "<font face='Courier New' size='2'>";
		echo "<a href='print-pohon.php' class='btn btn-success btn-sm'>Print Pohon Keputusan</a> <a href='hapus-pohon.html' class='btn btn-danger btn-sm'>Hapus Pohon Keputusan</a> <br> ";
		generatePohonC45('0', 0);
		echo "</font>";
    break;
}

function generatePohonC45($idparent, $spasi){
    $result = mysql_query("select * from pohon_keputusan_c45 where id_parent= '$idparent'");
    while($row=mysql_fetch_row($result)){
        for($i=1;$i<=$spasi;$i++){
            echo "|&nbsp;&nbsp;";
        }
        
        if ($row[6] === 'Laris') {
            $keputusan = "<font color=green>$row[6]</font>";
        } elseif ($row[6] === 'Tidak Laris') {
            $keputusan = "<font color=red>$row[6]</font>";
        } elseif ($row[6] === '?') {
            $keputusan = "<font color=blue>$row[6]</font>";
        } else {
            $keputusan = "<b>$row[6]</b>";
        }
        echo "<font color=red>$row[1]</font> = $row[2] (Laris = $row[4], Tidak Laris = $row[5]) : <b>$keputusan</b><br>";

        /*panggil dirinya sendiri*/
        generatePohonC45($row[0], $spasi + 1);
    }
}
		echo "<br><br>
		<table>
		<h2>Keterangan Hasil dari Pohon Keputusan:</h2><hr>
		<tr><td width='80px;' style='color:green;'>Laris</td> <td>:</td><td>Produk Laris jauh lebih banyak dari Tidak Laris..</td></tr>
		<tr><td style='color:red;'>Tidak Laris</td> <td>:</td><td>Produk Tidak Laris jauh lebih banyak dari Laris..</td></tr>
		<tr><td style='color:black;'>Kosong</td> <td>:</td><td>Produk Laris tidak ada, dan Tidak Laris Pun Tidak ada,.</td></tr>
		<tr><td style='color:blue;'>?</td> <td>: </td><td>Jumlah Produk Laris dan Tidak Laris Beda Tipis,.</td>
		</tr></table>";
	echo "<br><br><br><br><br>"; ?>


                </div>
            </section>
            <!-- END STATISTIC-->