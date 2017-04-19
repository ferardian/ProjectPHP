 <section class="content-header">
          <h1>
            DOKUMEN AKREDITASI
            
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
                        <?php if ($ruang==20){
                            echo anchor('akreditasi/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'));
                            } else if ($ruang==15){
                              echo '';
                            }
                         ?>
                     
                      <!-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modal">Tambah Data</button> -->
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                        <?php if ($ruang==20){
                            echo '
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>';
                            } else if ($ruang==15){
                              echo '<th></th>';
                            }
                         ?>
              
                        <th>No.</th>
                        <th>Nomor Dokumen</th>
                        <th>Judul</th>  
                         <th>Pokja</th>
                         
                         <th>Standar</th>
                         <th>Elemen Penilaian</th>
                         <th>Tanggal Terbit</th>                     
                         
                         <th>Kelompok</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                          foreach ($record as $r){
                            print "<tr>";
                            if ($ruang==20){
                              print "<td width='10' align='center'>".anchor(base_url().'file/'.$r->nama_file,"<span class='glyphicon glyphicon-print'></span>",array('title'=>'edit data','target' => '_blank'));
                              print "<td width='10' align='center'>".anchor("akreditasi/edit/".$r->kd_dokumen,"<span class='glyphicon glyphicon-edit'></span>",array('title'=>'hapus data'));
                              print "<td width='10' align='center'>".anchor("akreditasi/edit_all/".$r->kd_dokumen,"<span class='glyphicon glyphicon-th'></span>",array('title'=>'hapus data'));
                              print "<td width='10' align='center'>".anchor("akreditasi/delete/".$r->kd_dokumen,"<span class='glyphicon glyphicon-trash'></span>",array('title'=>'hapus data'));
                             
                            } else if ($ruang==21){
                                print "<td width='10' align='center'>".anchor(base_url().'file/'.$r->nama_file,"<span class='glyphicon glyphicon-print'></span>",array('title'=>'edit data','target' => '_blank'));
                            }
                            
                            print "<td>";
                            print $no;

                            print "<td>";
                            print $r->nomor_dokumen;

                            print "<td>";
                            print $r->judul_dokumen;
  
                            print "<td>";
                            print $r->pokja;

                            // print "<td>";
                            // print $r->kelompok;

                            print "<td>";
                            print $r->standar;
                          
                            print "<td>";
                            print $r->ep;

                            print "<td>";
                            print format_date($r->tgl_terbit,'id'); 


                            print "<td >";
                            print $r->jenis_dok;
                            
                            ?><?

                            
                          $no++;
                        }?>
                    </tbody>
                    
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