<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open_multipart('akreditasi/post')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                     <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nomor Dokumen</label>
                      <input type="text" class="form-control"  placeholder="Nomor Dokumen" id="nomor" onBlur="get_data(this.value)" name="nomor_dokumen" >
                    </div>
                    </div>

                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Judul Dokumen</label>
                      <input type="text" class="form-control"  placeholder="Judul Dokumen" name="judul_dokumen">
                    </div>
                    </div>


                    <div class="row col-md-6">
                        <label >Tanggal Terbit</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd" required>
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_terbit" required>
                        </div>
                      </div>

                      <div class="row col-md-12">
                     <div class="form-group">
                    <label>Kelompok Kerja</label>
                    <select required name="kd_pokja" id="kd_pokja" class="satu form-control select2" style="width: 100%;">
                      <option value="" disable>Kelompok Kerja</option>
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
                      <option value="" disable>Standar</option>
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
                      <option value="" disable>Elemen Penilaian</option>
                      <?php foreach ($data_ep as $k){
                       echo "<option value='$k->kd_ep'>$k->ep</option>";
                       }?> 


                    </select>
                  </div>
                  </div>

                  <div class="row col-md-12">
                  <div class="form-group">
                    <label>Jenis Dokumen</label>
                    <select required name="kd_jenis_dok" id="kd_jenis_dok" class="dua form-control select2" style="width: 100%;">
                      <option value="" disable>Jenis Dokumen</option>
                      <?php foreach ($data_jenis as $k){
                       echo "<option value='$k->kd_jenis_dok'>$k->jenis_dok</option>";
                       }?> 
                    </select>
                  </div>
                  </div>


                 <div class="row col-md-12">
                  <div class="form-group">
                    <label>Nama File <i><u>(Hanya Untuk Upload Dokumen Yang Sudah Ada)</u></i></label>
                    <select name="nama_file" id="nama_file" class="form-control select2" style="width: 100%;">
                      <option value="" disable>Nama File</option>
                      <?php foreach ($data_file as $k){
                       echo "<option value='$k->nama_file'>$k->nama_file</option>";
                       }?> 
                    </select>
                  </div>
                  </div>
                   
                      <div class="row col-md-12">
                     <div class="form-group">
                      <label >File  <i><u>(Hanya Untuk Upload Dokumen Baru)</u></i></label>
                      <input type="file" name="file">
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

    <script type="text/javascript">
function get_data(v_id){
  $.ajax({
    url :"<? echo base_url('akreditasi/get_data')?>",
    data:{id : v_id},
    success: function(data)
    {
      var dt = JSON.parse(data);
      $("input[name=judul_dokumen]").val(dt.judul_dokumen);
      $("input[name=tgl_terbit]").val(dt.tgl_terbit);
      //$("#kd_pokja").val(dt.kd_pokja).trigger("change");
      $("#nama_file").val(dt.nama_file).trigger("change");
      $("#kd_jenis_dok").val(dt.kd_jenis_dok).trigger("change");
    }
  });
  
}
 </script>