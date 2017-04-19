<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open_multipart('akreditasi/edit_all')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                    
                    <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nomor Dokumen</label>
                      <input type="text" class="form-control"  placeholder="Nomor Dokumen" name="nomor_dokumen" value="<?php echo $row['nomor_dokumen'] ?>" >
                    </div>
                    </div>

                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Judul Dokumen</label>
                      <input type="text" class="form-control"  placeholder="Judul Dokumen" name="judul_dokumen" value="<?php echo $row['judul_dokumen'] ?>">
                    </div>
                    </div>

                      <div class="row col-md-6">
                        <label >Tanggal Terbit</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd"  required>
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_terbit" value="<?php echo $row['tgl_terbit'] ?>" required>
                        </div>
                      </div>

                      <div class="row col-md-12">
                     <div class="form-group">
                    <label>Kelompok Kerja</label>
                    <select required name="kd_pokja" class="form-control select2" style="width: 100%;">
                      <option value="<?php echo $row ['kd_pokja']; ?>" selected><?php echo $row ['pokja']; ?></option>
                      <?php foreach ($data_pokja as $k){
                       echo "<option value='$k->kd_pokja'>$k->pokja</option>";
                       }?>
                       <input type="hidden" >
                    </select>
                  </div>
                  </div>

                  <div class="row col-md-12">
                   <div class="form-group">
                    <label>Standar</label>
                    <select required name="kd_standar" class="form-control select2" style="width: 100%;">
                      <option value="<?php echo $row ['kd_standar']; ?>" selected><?php echo $row ['standar']; ?></option>
                      <?php foreach ($data_standar as $k){
                       echo "<option value='$k->kd_standar'>$k->standar</option>";
                       }?> 
                    </select>
                  </div>
                  </div>

                  <div class="row col-md-12">
                  <div class="form-group">
                    <label>Elemen Penilaian</label>
                    <select required name="kd_ep" class="form-control select2" style="width: 100%;">
                      <option value="<?php echo $row ['kd_ep']; ?>" selected><?php echo $row ['ep']; ?></option>
                      <?php foreach ($data_ep as $k){
                       echo "<option value='$k->kd_ep'>$k->ep</option>";
                       }?> 


                    </select>
                  </div>
                  </div>

                  <div class="row col-md-12">
                  <div class="form-group">
                    <label>Jenis Dokumen</label>
                    <select required name="kd_jenis_dok" class="form-control select2" style="width: 100%;">
                      <option value="<?php echo $row ['kd_jenis_dok']; ?>" selected><?php echo $row ['jenis_dok']; ?></option>
                      <?php foreach ($data_jenis as $k){
                       echo "<option value='$k->kd_jenis_dok'>$k->jenis_dok</option>";
                       }?> 
                    </select>
                  </div>
                  </div>


                 <div class="row col-md-12">
                  <div class="form-group">
                    <label>Nama File</label>
                    <select name="nama_file" class="form-control select2" style="width: 100%;">
                      
                      <option value="" disable>Nama File</option>
                      <?php foreach ($data_file as $k){
                       echo "<option value='$k->nama_file'>$k->nama_file</option>";
                       }?> 
                    </select>
                  </div>
                  </div>

                      <div class="row col-md-12">
                     <div class="form-group">
                      <label >File</label>
                      <input type="file" name="file">
                      <input type="hidden" class="form-control"  placeholder="username" name="nama_file" value="<?php echo $row['nama_file'] ?>" equired>
                      <input type="hidden" class="form-control"  placeholder="username" name="kd_dokumen" value="<?php echo $row['kd_dokumen'] ?>" equired>
                    </div>
                    </div>
                  
                  <br/>
                 
                 <div class="row col-md-12">
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('akreditasi','Kembali',array('class'=>'btn btn-primary btn-sm'));

                     ?>
                   </div>
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