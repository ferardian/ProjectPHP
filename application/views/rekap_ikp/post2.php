<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('rekap_ikp2/post')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-4">
                      <div class="form-group">  
              
                    <div class="row col-md-12">
                        <label >Tanggal</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tanggal" required>
                        </div>
                      </div>
                        <div class="row col-md-12">
                    <div class="form-group">
                      <label >Nama Pasien</label>
                      <input type="text" class="form-control"  placeholder="Nama Pasien" name="nama_pasien" required>
                    </div>
                    </div>
                       <div class="row col-md-12">
                    <div class="form-group">
                      <label >Umur</label>
                      <input type="text" class="form-control"  placeholder="Umur" name="umur" required>
                    </div>
                    </div>
                     <div class="form-group">
                    <label>Tipe Insiden</label>
                    <select name="kd_insiden" class="form-control select2" style="width: 100%;">
                      <option value='0' disable>Tipe Insiden</option>
                      <?php foreach ($data_insiden as $k){
                       echo "<option value='$k->kd_insiden'>$k->insiden</option>";

                       }?>
                        
                    </select>
                  
                  </div>
                  <div class="form-group">
                  <label for="grading" class="control-label col-sm">Grading</label>
                  <div class="">

                  <?php
                  $style0='class="form-control select2" style="width: 100%;"';
                  echo form_dropdown('grading',$grading,'',$style0);
                  ?>
                  </div>
                    </div>

                    <div class="form-group">
                  <label for="tindak_lanjut" class="control-label col-sm">Tindak Lanjut</label>
                  <div class="">

                  <?php
                  $style0='class="form-control select2" style="width: 100%;"';
                  echo form_dropdown('tindak_lanjut',$tindak_lanjut,'',$style0);
                  ?>
                  </div>
                    </div>
                      </div>
                      </div>

                     <div class="row col-md-8">    
                    <div class="row col-md-2">
                      <div class="form-group">
                      <label >Sentinel</label>
                      <input type="number" class="form-control"  placeholder="Senitnel" name="sentinel" >
                    </div>
                    </div>
                    <div class="row col-md-1">

                    </div>

                    <div class="row col-md-2">
                     <div class="form-group">
                      <label >KTD</label>
                      <input type="number" class="form-control"  placeholder="KTD" name="ktd" >
                    </div>
                    </div>
                    <div class="row col-md-1">

                    </div>
                    <div class="row col-md-2">
                    <div class="form-group">
                      <label >KNC</label>
                      <input type="number" class="form-control"  placeholder="KNC" name="knc" >
                    </div>
                    </div>
                  <div class="row col-md-1">

                    </div>
                  <div class="row col-md-2">
                   <div class="form-group">
                      <label for="exampleInputEmail1">KTC</label>
                      <input type="number" class="form-control"  placeholder="KTC" name="ktc" >
                    </div>
                    </div>
                    <div class="row col-md-1">

                    </div>
                    <div class="row col-md-2">
                   <div class="form-group">
                      <label for="exampleInputEmail1">KPC</label>
                      <input type="number" class="form-control"  placeholder="KPC" name="kpc" >
                    </div>
                    </div>
                    <div class="row col-md-1">

                    </div>

                 <div class="row col-md-12">
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('rekap_ikp2','Kembali',array('class'=>'btn btn-primary btn-sm'));

                     ?>
                   </div>
                 </div>
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