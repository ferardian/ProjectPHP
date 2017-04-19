<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('rekap_ido/post')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                    <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nomor RM</label>
                      <input type="text" class="form-control"  placeholder="Nomor RM" name="no_rm" required>
                    </div>
                    </div>

                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Nama Pasien</label>
                      <input type="text" class="form-control"  placeholder="Nama Pasien" name="nama_pas" required>
                    </div>
                    </div>

                    <div class="row col-md-6">
                        <label >Tanggal Masuk</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">  
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_masuk" required>
                        </div>
                      </div>

                      <div class="row col-md-6">
                        <label >Tanggal Keluar</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">  
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_keluar" required>
                        </div>
                      </div>
                    
                 
                    
                  <div class="row col-md-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Tindakan</label>
                      <input type="text" class="form-control"  placeholder="Tindakan" name="tindakan" required>
                    </div>
                    </div>
                    
                  <div class="row col-md-12">
                   <div class="form-group ">
                    <label >Jenis Operasi</label><br>
                    <table width="400px">
                      <td>  <label>
                      <input type="radio" name="jenis_op" value="B" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "B") echo 'checked'; ?>>
                      B
                    </label></td>
                      <td><label>
                      <input type="radio" name="jenis_op" value="BK" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "BK") echo 'checked'; ?>>
                      BK
                    </label></td>
                      <td><label>
                      <input type="radio" name="jenis_op" value="K" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "K") echo 'checked'; ?>>
                      K
                    </label></td>
                      <td><label>
                      <input type="radio" name="jenis_op" value="KTR" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "KTR") echo 'checked'; ?>>
                      KTR
                    </label></td>
                     <!--  <td>
                        <label>
                      <input type="radio" name="jenis_op" value="" class="flat-red" checked <?php if(!empty($infeksi) && $infeksi == "") echo 'checked'; ?>>
                      Tidak Ada
                    </label></td> -->

                    </table>  
                  </div>
                  </div>

                    <div class="row col-md-12">
                   <div class="form-group ">
                    <label >Klasifikasi</label><br>
                    <table width="400px">
                      <td>  <label>
                      <input type="radio" name="klasifikasi" value="1" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "1") echo 'checked'; ?>>
                      1
                    </label></td>
                      <td><label>
                      <input type="radio" name="klasifikasi" value="2" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "2") echo 'checked'; ?>>
                      2
                    </label></td>
                      <td><label>
                      <input type="radio" name="klasifikasi" value="3" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "3") echo 'checked'; ?>>
                      3
                    </label></td>
                      <td><label>
                      <input type="radio" name="klasifikasi" value="4" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "4") echo 'checked'; ?>>
                      4
                    </label></td>
                     <!--  <td>
                        <label>
                      <input type="radio" name="jenis_op" value="" class="flat-red" checked <?php if(!empty($infeksi) && $infeksi == "") echo 'checked'; ?>>
                      Tidak Ada
                    </label></td> -->

                    </table>  
                  </div>
                  </div>

                    
                  
                <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">T Time</label>
                      <input type="text" class="form-control"  placeholder="T Time" name="waktu" >
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Antibiotik</label>
                      <input type="text" class="form-control"  placeholder="Antibiotik" name="antibiotik" >
                  </div>
                  </div>

                  <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                      <input type="text" class="form-control"  placeholder="Keterangan" name="keterangan" >
                  </div>
                  </div>
                  <br/>
                 
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('rekap_ido','Kembali',array('class'=>'btn btn-primary btn-sm'));

                     ?>
                   </div>
                  </div>
                </form>
              </div><!-- /.box -->

               <!-- this java script must be appear when you use twitter bootstrop -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery.js"></script>
    
    
  <!--this datepicker java script for bootstrap 3-->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap-datepicker3.js"></script>


    
  <script>

  //options method for call datepicker
  $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
  
    </script>