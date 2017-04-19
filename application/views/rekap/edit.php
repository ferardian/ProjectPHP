<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('rekap/edit')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                        <div class="row col-md-6">
                        <label >Tanggal</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tanggal" value="<?php echo $row ['tanggal']; ?>"required>
                        </div>
                      </div>
                      <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nomor RM</label>
                      <input type="text" class="form-control"  placeholder="Nomor RM" name="no_rm" required value="<?php echo  $row['no_rm']?>">
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Nama Pasien</label>
                      <input type="hidden" name="id_pas" value="<?php echo $row ['id_pas']; ?>">
                      <input type="text" class="form-control"  placeholder="Nama Pasien" name="nama_pas" required  value="<?php echo $row['nama_pas']?>">
                    </div>
                    </div>
                    <div class="row col-md-12">
                    <div class="form-group">
                      <label >Umur</label>
                      <input type="text" class="form-control"  placeholder="Umur" name="umur" required value="<?php echo  $row['umur']?>">
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group">
                    <label >Jenis Kelamin</label><br>
                    <label>
                      <?php $jekel= $row['jekel']; ?>
                      <input type="radio" name="jekel" value="Laki-Laki" class="flat-red" checked required <?php echo ($jekel=='Laki-Laki') ? "checked":""; ?>>
                      Laki - Laki
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="jekel" value="Perempuan" class="flat-red" required <?php echo ($jekel=='Perempuan') ? "checked":""; ?>>
                      Peremuan
                    </label>
                   
                  </div>
                  </div>
                  <div class="row col-md-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Diagnosa</label>
                      <input type="text" class="form-control"  placeholder="Diagnosa" name="diagnosa" required value="<?php echo  $row['diagnosa']?>">
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group ">
                    <label >Tindakan</label><br>
                    <table width="300px">
                      <?php $tindak= $row['tindakan']; ?>
                      <?php $tindak2= $row['tindakan2']; ?>
                      <?php $tindak3= $row['tindakan3']; ?>
                      <?php $tindak4= $row['tindakan4']; ?>
                        <td>
                      <label>
                      <input type="checkbox" name="tindakan" value="UC" class="flat-red" <?php echo ($tindak=='UC') ? "checked":""; ?>>
                      UC
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan2" value="IVL" class="flat-red"  <?php echo ($tindak2=='IVL') ? "checked":""; ?>>
                      IVL
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan3" value="OP" class="flat-red"  <?php echo ($tindak3=='OP') ? "checked":""; ?>>
                      OP
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan4" value="ETT" class="flat-red"  <?php echo ($tindak4=='ETT') ? "checked":""; ?>>
                      ETT/V
                    </label></td>
                    </table>
               
                  </div>
                  </div>
                  <div class="row col-md-12">
                   <div class="form-group ">
                    <label >Infeksi Rumah Sakit</label><br>
                    <table width="400px">
                      <?php $infek= $row['infeksi']; ?>
                      <td>  <label>
                      <input type="radio" name="infeksi" value="ISK" class="flat-red" required <?php echo ($infek=='ISK') ? "checked":""; ?>>
                      ISK
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="PLEB" class="flat-red" required <?php echo ($infek=='PLEB') ? "checked":""; ?>>
                      PLEB
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="IDO" class="flat-red" required <?php echo ($infek=='IDO') ? "checked":""; ?>>
                      IDO
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="VAP" class="flat-red" required <?php echo ($infek=='VAP') ? "checked":""; ?>>
                      VAP
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="" class="flat-red" <?php echo ($infek=='') ? "checked":""; ?>>
                      Tidak Ada
                    </label></td>

                    </table>  
                  
                    
                    
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                    <label >Decubitus</label><br>
                    <label>
                      <?php $decu= $row['decubitus']; ?>
                      <input type="radio" name="decubitus" value="Ya" class="flat-red" checked required <?php echo ($decu=='Ya') ? "checked":""; ?>>
                      Ya
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="decubitus" value="Tidak" class="flat-red" required <?php echo ($decu=='Tidak') ? "checked":""; ?>>
                      Tidak
                    </label>
                   
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                    <label >Tirah Baring</label><br>
                    <label>
                      <?php $tirah= $row['tirah']; ?>
                      <input type="radio" name="tirah" value="Ya" class="flat-red" checked required <?php echo ($tirah=='Ya') ? "checked":""; ?>>
                      Ya
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="tirah" value="Tidak" class="flat-red" required <?php echo ($tirah=='Tidak') ? "checked":""; ?>>
                      Tidak
                    </label>
                   
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Hasil Kultur</label>
                      <input type="text" class="form-control"  placeholder="Hasil Kultur" name="kultur" value="<?php echo $row ['kultur'] ?>">
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Antibiotik</label>
                      <input type="text" class="form-control"  placeholder="Antibiotik" name="antibiotik" value="<?php echo $row ['antibiotik'] ?>">
                  </div>
                  </div>
                  <br/>
                 
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('rekap','Kembali',array('class'=>'btn btn-primary btn-sm'));

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