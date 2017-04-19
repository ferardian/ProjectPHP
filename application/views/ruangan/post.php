<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('master_user/post')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                    
                    <!-- /.box-body -->

                    <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nama Ruangan</label>
                      <input type="text" class="form-control"  placeholder="username" name="nama_user" required>
                    </div>
                    </div>
                   
                   <div class="form-group">
                    <label>Kategori Ruang</label>
                    <select required name="id_ruang_inmut" class="form-control select2" style="width: 100%;">
                      <option value="" disable>Kategori Ruang</option>
                      <?php foreach ($data_inmut as $k){
                       echo "<option value='$k->id_ruang_inmut'>$k->kategori</option>";

                       }?>
                        
                    </select>
                  
                  </div>
                  
                  <br/>
                 
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('master_user','Kembali',array('class'=>'btn btn-primary btn-sm'));

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