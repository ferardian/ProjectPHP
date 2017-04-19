 <section class="content-header">
          <h1>

            DATA RUANGAN
            
          </h1>
         
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <div class='row col-md-3'>

                 <button class='btn btn-primary btn-sm', onclick='tambah()'>Tambah Data</button>
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Ruangan</th>                     
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                          foreach ($record as $r){
                            print "<tr>";
                            print "<td>";
                            print $no;
                            print "<td>";
                            print $r->ruangan;
                          
                            ?><?

                            //print "<td width='10' align='center'>".anchor("indikator/edit/".$r->id,"<span class='glyphicon glyphicon-edit'></span>",array('title'=>'edit data'));
                            //print "<td width='10' align='center'>".anchor("indikator/delete/".$r->id,"<span class='glyphicon glyphicon-trash'></span>",array('title'=>'hapus data'));
                          $no++;

                        }

                        
                        ?>
                    </tbody>
                    
                  </table>
                  <input type="hidden" id="jml" value="<?php echo sprintf("%02d",$no); ?>">
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->



<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Sub Kriteria</h4>
      </div>
      <div class="modal-body">
         <section class="content">
          <div class="row">
            <!-- left column -->
           
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Input Sub Krietria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div>
                <form role="form" method="POST" action="<?php echo site_url("master_ruang/post") ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="periode_kerja">Kode Ruang</label>
                      <input type="text" class="form-control" id="kode" name="kd_ruang" placeholder="Kode" readonly>
                    </div>
                    <div class="form-group">
                      <label for="periode_kerja">Nama Ruang</label>
                      <input type="text" class="form-control" name="ruangan" placeholder="Nama Ruangan">
                    </div>
                    <div class="form-group">
                    <label>Kategori Ruang</label>
                    <select name="id_ruang_inmut" class="form-control select2" style="width: 100%;">
                      <option value="" disable>Kategori Ruang</option>
                      <?php foreach ($data_inmut as $k){
                       echo "<option value='$k->id_ruang_inmut'>$k->kategori</option>";

                       }?>
                        
                    </select>
                  
                  </div>
                    </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->

          
        </section>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
<script type="text/javascript">
  function tambah(){
      var jml=$("#jml").val();
      $("#kode").val(jml);
      $('#modal').modal("show");
    }

</script>
   

<script type="text/javascript">
    function detail (id) {
      console.log("<?php echo site_url('admin/Data_karyawan/detail').'/'; ?>"+id);
      $.ajax({
        url: "<?php echo site_url('admin/Data_karyawan/detail').'/'; ?>"+id,
        success: function  (data) {
          $('.konten').html(data);
        }

      });
    }
</script>