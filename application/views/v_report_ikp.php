<!-- general form elements -->
<div class="row col-md-5">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Cetak Laporan IKP</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="row" >
      <div class="col-md-12">

        <form role="form" method="POST" class="nilai" action="<?php echo site_url('Report/cetak_ikp'); ?>" target="_blank">
          <div class="col-md-12">
            <div class="form-group">  
              <label >Tanggal</label>
            <table>
                <td width="150px"> 
                      
                         <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                        
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_awal" required>
                        </div>
                    </td>
            <td width="40px" align="center"> sd </td>
            

                <td width="150px" align="right">
                         <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control input-group-addon"  type="text" name="tgl_akhir" required>
                        </div>
                   </td>
            </table>        
                  

                  </div>
            <div class="box-body with-border">

              <div class="row box-footer">
                <div class="col-md-12">
                  <div class="col-md">
                    <button  type="submit" name="submit" class="btn btn-primary btn-sm pull-right">Cetak</button>
                  </div>
                  <div class="col-md-9">
                    <!-- <button  type="button" onclick='lihat_nilai()' class="btn btn-primary btn-sm pull-right select">Lihat</button> -->
                  </div>
                </div>

              </div>
            </div>
          </div>
        </form>


      </div>

    </div>
  </div><!-- /.box -->

</div>

<div class="konten1">

</div>



<script type="text/javascript">
function lihat_nilai() {
  $.ajax({
    type: "POST",
    data:$('.nilai').serialize(),
    url: "<?php echo site_url('admin/laporan/lihat'); ?>",
    success: function  (data) {
      $('.konten1').html(data);

    }
  });

}
</script>
 <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap-datepicker3.js"></script>
<script>

  //options method for call datepicker
  $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
  
    </script>