<!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Entry Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                    echo form_open('rekap/post')
                 ?>
                <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
              
                    <div class="row col-md-6">
                        <label >Tanggal</label>
                      <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tanggal" required>
                        </div>
                      </div>
                    <div class="row col-md-12">
                      <div class="form-group">
                      <label >Nomor RM</label>
                      <input type="number" class="form-control" id="kode" onBlur="get_data(this.value)" placeholder="Nomor RM" name="no_rm" required>
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group">
                      <label >Nama Pasien</label>
                      <input type="text" class="form-control" placeholder="Nama Pasien" name="nama_pas" required>
                    </div>
                    </div>
                    <div class="row col-md-12">
                    <div class="form-group">
                      <label >Umur</label>
                      <input type="text" class="form-control"  placeholder="Umur" name="umur" required>
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group">
                    <label >Jenis Kelamin</label><br>
                    <label>
                      <input type="radio" name="jekel" id="jekel" value="Laki-Laki" class="flat-red" checked required <?php if(!empty($jekel) && $jekel == "Laki-Laki") echo 'checked'; ?>>
                      Laki - Laki
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="jekel" id="jekel" value="Perempuan" class="flat-red" required <?php if(!empty($jekel) && $jekel == "Perempuan") echo 'checked'; ?>>
                      Peremuan
                    </label>
                   
                  </div>
                  </div>
                  <div class="row col-md-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Diagnosa</label>
                      <input type="text" class="form-control"  placeholder="Diagnosa" name="diagnosa" required>
                    </div>
                    </div>
                    <div class="row col-md-12">
                     <div class="form-group ">
                    <label >Tindakan</label><br>
                    <table width="300px">
                    <td>
                      <label>
                      <input type="checkbox" name="tindakan" value="UC" class="flat-red" checked  <?php if(!empty($tindakan) && $tindakan == "UC") echo 'checked'; ?>>
                      UC
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan2" value="IVL" class="flat-red"  <?php if(!empty($tindakan2) && $tindakan2 == "IVL") echo 'checked'; ?>>
                      IVL
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan3" value="OP" class="flat-red"  <?php if(!empty($tindakan3) && $tindakan3 == "OP") echo 'checked'; ?>>
                      OP
                    </label></td>
                        <td><label>
                      <input type="checkbox" name="tindakan4" value="ETT" class="flat-red"  <?php if(!empty($tindakan4) && $tindakan4 == "ETT") echo 'checked'; ?>>
                      ETT/V
                    </label></td>
                    </table>
               
                  </div>
                  </div>
                  <div class="row col-md-12">
                   <div class="form-group ">
                    <label >Infeksi Rumah Sakit</label><br>
                    <table width="400px">
                      <td>  <label>
                      <input type="radio" name="infeksi" value="ISK" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "ISK") echo 'checked'; ?>>
                      ISK
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="PLEB" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "PLEB") echo 'checked'; ?>>
                      PLEB
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="IDO" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "IDO") echo 'checked'; ?>>
                      IDO
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="VAP" class="flat-red" required <?php if(!empty($infeksi) && $infeksi == "VAP") echo 'checked'; ?>>
                      VAP
                    </label></td>
                      <td><label>
                      <input type="radio" name="infeksi" value="" class="flat-red" checked <?php if(!empty($infeksi) && $infeksi == "") echo 'checked'; ?>>
                      Tidak Ada
                    </label></td>

                    </table>  
                  
                    
                    
                  </div>
                  </div>

                    <div class="row col-md-12">
                   <div class="form-group">
                    <label >Decubitus</label><br>
                    <label>
                      <input type="radio" name="decubitus" value="Ya" class="flat-red" checked required <?php if(!empty($decubitus) && $decubitus == "Ya") echo 'checked'; ?>>
                      Ya
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="decubitus" value="Tidak" class="flat-red" required <?php if(!empty($decubitus) && $decubitus == "Tidak") echo 'checked'; ?>>
                      Tidak
                    </label>
                   
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                    <label >Tirah Baring</label><br>
                    <label>
                      <input type="radio" name="tirah" value="Ya" class="flat-red" checked required <?php if(!empty($tirah) && $tirah == "Ya") echo 'checked'; ?>>
                      Ya
                    </label>
                    &nbsp
                    &nbsp
                    <label>
                      <input type="radio" name="tirah" value="Tidak" class="flat-red" required <?php if(!empty($tirah) && $tirah == "Tidak") echo 'checked'; ?>>
                      Tidak
                    </label>
                   
                  </div>
                  </div>
                <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Hasil Kultur</label>
                      <input type="text" class="form-control"  placeholder="Hasil Kultur" name="kultur" >
                  </div>
                  </div>
                  <div class="row col-md-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Antibiotik</label>
                      <input type="text" class="form-control"  placeholder="Antibiotik" name="antibiotik" >
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

 <script type="text/javascript">
function get_data(v_id){
  $.ajax({
    url :"<? echo base_url('rekap/get_data')?>",
    data:{id : v_id},
    success: function(data)
    {
      var dt = JSON.parse(data);
      $("input[name=nama_pas]").val(dt.nama_pas);
      $("input[name=umur]").val(dt.umur);
      $("input[name=jekel]").val(dt.jekel);
      
    }
  });
  
}
</script>