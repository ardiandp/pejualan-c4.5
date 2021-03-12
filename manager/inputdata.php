<!-- MAIN CONTENT-->
              <?php
              //membuat data random 
              $kode= rand(1000,9999);
              ?> 
              <section class="p-t-10">
                    <div class="container-fluid">
                        <div class="row">
                           
                         
                            <div class="col-lg-8">
                                <div class="card" >
                                    <div class="card-header  bg-primary text-white">
                                        <strong>Input Data</strong> Master
                                    </div>
                                    <div class="card-body card-block ">
                                        <form action="simpan-data.html" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Kode</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" readonly id="hf-email" name="kode_barang" value="<?php echo $kode?>" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Jenis</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                	 <select name="jenis_barang" id="select" class="form-control">
                                                	<?php echo "<option value=0 selected>- Pilih Jenis Barang -</option>";
													$tampil=mysql_query("SELECT * FROM atribut WHERE atribut='jenis_barang'");
													while($r=mysql_fetch_array($tampil)){
													echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
													} ?>                                                                   
                                                    </select>
                                                    
                                                </div>
                                                 <div class="col-12 col-md-1">
                                                   <a href="" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-jenis">New</a>
                                                 </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Merek</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="merek" id="select" class="form-control">
                                                      <?php $tampil=mysql_query("SELECT * FROM atribut WHERE atribut='merek'");
				while($r=mysql_fetch_array($tampil)){
				echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
				}?>                             
                                                    </select>
                                                   
                                                </div>
                                                 <div class="col-12 col-md-1">
                                                    <a href="" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-merek">New</a>
                                                 </div>
                                            </div>
                                            

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Tahun</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="tahun" id="select" class="form-control">
                                                       <?php $tampil=mysql_query("SELECT * FROM atribut WHERE atribut='tahun'");
				                                while($r=mysql_fetch_array($tampil)){
				                                echo "<option value='$r[nilai_atribut]'>$r[nilai_atribut]</option>";
				                                }  ?>                      
                                                    </select>
                                                   
                                                </div>
                                                 <div class="col-12 col-md-1">
                                                    <a href="" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-tahun">New</a>
                                                 </div>
                                            </div>                                       
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Harga</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="harga" placeholder="Harga" class="form-control">
                                                    <small class="help-block form-text"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" class="form-control">                   
                                                    <option value='Laris'> Laris </option>
                                                     <option value='Tidak Laris'> Tidak Laris </option>";
                                               </select>
                                                </div>
                                            </div>
                                            
                                          
                                          
                                           
                                            
                                        
                                       
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                 </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-warning text-white">
                                        <strong>Horizontal</strong> Form
                                    </div>
                                    <div class="card-body card-block  ">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control">
                                                    <span class="help-block">Please enter your email</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Please enter your password</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>                                
                            </div>                                     
                           </div>
<!-- modal static -->
            <div class="modal fade" id="modal-tahun" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Tambah Tahun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><form method="post" action="simpan-atribut.html">
                                  <div class="col col-md-3">
                                                   
                                                </div>
                                                 <div class="col-12 col-md-12">
                                                    <input type="hidden" name="a" value="tahun">
                                                    <input type="text" id="hf-email" name="b" placeholder="Input Tahun" class="form-control">
                                                   
                                                </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div></form>
                    </div>
                </div>
            </div>
            <!-- end modal static -->

            <!-- modal static -->
            <div class="modal fade" id="modal-jenis" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Tambah Jenis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><form method="post" action="simpan-atribut.html">
                                  <div class="col col-md-3">
                                                   
                                                </div>
                                                 <div class="col-12 col-md-12">
                                                    <input type="hidden" name="a" value="jenis_barang">
                                                    <input type="text" id="hf-email" name="b" placeholder="Input Jenis" class="form-control">
                                                   
                                                </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div></form>
                    </div>
                </div>
            </div>
            <!-- end modal static -->

            <!-- modal static -->
            <div class="modal fade" id="modal-merek" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h5 class="modal-title" id="staticModalLabel">Tambah Merek</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><form method="post" action="simpan-atribut.html">
                                  <div class="col col-md-3">
                                                    
                                                </div>
                                                 <div class="col-12 col-md-12">
                                                    <input type="hidden" name="a" value="merek">
                                                    <input type="text" id="hf-email" name="b" placeholder="Input Merek" class="form-control">
                                                   
                                                </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div> </form>
                    </div>
                </div>
            </div>
            <!-- end modal static -->