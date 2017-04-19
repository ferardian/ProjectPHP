 <section class="content-header">
          <h1>
            DATA SURVEILANS HARIAN
            
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

                     <?php  
                    echo anchor('report/cetak','Cetak',array('class'=>'btn btn-primary btn-sm'));

                    ?>
                      <!-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modal">Tambah Data</button> -->
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                         <th>Ruangan</th>                     
                         <th>Tindakan</th>
                         <th>Infeksi</th>
                         <th></th>
                          
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                       $jml_tindakan=0;
                       $jml_infeksi=0;
                       $infeksi=0;
                       $tindakan=0;

                          foreach ($record as $r){

                            print "<tr>";
                            print "<td>";
                            print $no;
                          
                            print "<td>";
                            print $r->ruangan;

                            print "<td>";
                            print $r->tindakan; $jml_tindakan+=$r->tindakan; $tindakan=$r->tindakan;
                            //$jek = trim($r->jekel)=='P'?'Perempuan':'Laki - Laki';
                            print "<td>";
                            print $r->infeksi; $jml_infeksi+=$r->infeksi; $infeksi=$r->infeksi;

                            print "<td>";
                            print ($infeksi/$tindakan)*0.01.'%'; 
                            
                            

                            ?><?

                          
                          $no++;
                        }?>
                    </tbody>
                    <tfoot>
                        <tr>
                          <td></td>
                          <td></td>
                          <td><?php echo $jml_tindakan ?></td>
                          <td><?php echo $jml_infeksi ?></td>
                          <td><?php echo ($jml_infeksi/$jml_tindakan)*1000 ?></td>
                        </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
     <!-- /.content-wrapper -->
     

    <div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Detail Data Karyawan</h4>
      </div>
      <div class="modal-body konten" >
         <section class="content">
          <div class="row">
          
          
        </section>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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