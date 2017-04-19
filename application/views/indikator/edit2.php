<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('indikator2/edit')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                    
                     <div class="form-group">
                    <label>Indikator Mutu</label>
                    <select name="kd_inmut" class="form-control select2" style="width: 100%;">
                      <option value='0' disable>Indikator Mutu</option>
                      <?php foreach ($data_indikator as $k){
                       echo "<option value='$k->kd_inmut'>$k->nama_indikator</option>";

                       }?>
                        
                    </select>
                  
                  </div><!-- /.box-body -->

                    <div class="row col-md-6">
                        <label >Tanggal</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd" >
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tanggal" required value="<?php echo $row ['tanggal']; ?>">
                        </div>
                      </div>
                    <div class="row col-md-12">
                      <div class="form-group">
                      <label >Numerator</label>
                      <input type="number" class="form-control"  placeholder="Numerator" name="num" required value="<?php echo $row ['num']; ?>">
                      <input type="hidden" class="form-control"  placeholder="id" name="id" required value="<?php echo $row ['id']; ?>">
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Denumerator</label>
                      <input type="number" class="form-control"  placeholder="Denumerator" name="denum" required value="<?php echo $row ['denum']; ?>">
                    </div>
                    </div>
                  
                  <br/>
                 
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    <?php 
                        echo anchor('indikator2','Kembali',array('class'=>'btn btn-primary btn-sm'));

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