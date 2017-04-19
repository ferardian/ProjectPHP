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
                    echo anchor('rekap/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'));

                    ?>
                      <!-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modal">Tambah Data</button> -->
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>No RM</th>
                         <th>Nama Pasien</th>                     
                         <th>Umur</th>
                         <th>Diagnosa</th>
                         <th>Jenis Kelamin</th>
                         <th >T 1</th>
                         <th >T 2</th>
                         <th >T 3</th>
                         <th >T 4</th>
                         <th>Infeksi Rumah Sakit</th>
                         <th>Tirah Baring</th>
                         <th>Decubitus</th>
                         <th>Hasil Kultur</th>        
                         <th>Antibiotik</th>
                          <th></th>
                    
                          
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
                            print format_date($r->tanggal,'id'); 

                            print "<td>";
                            print $r->no_rm;
                          
                            print "<td>";
                            print $r->nama_pas;

                            print "<td>";
                            print $r->umur;
                            //$jek = trim($r->jekel)=='P'?'Perempuan':'Laki - Laki';
                            print "<td>";
                            print $r->diagnosa;

                            print "<td>";
                            print $r->jekel;

                            print "<td>";
                            if ($r->tindakan=='0'){
                              echo "-";
                            }else{
                              print $r->tindakan;
                            }
                             
                              print "<td>";
                              if ($r->tindakan2=='0'){
                               echo "-";
                             }else{
                               print $r->tindakan2;
                             }
                              print "<td>";
                              if ($r->tindakan3=='0'){
                               echo "-";
                             }else{
                               print $r->tindakan3;
                             }
                              print "<td>";
                              if ($r->tindakan4=='0'){
                               echo "-";
                             }else{
                               print $r->tindakan4;
                             }
                             

                            print "<td>";
                            print $r->infeksi;

                            print "<td>";
                            print $r->tirah;

                            print "<td>";
                            print $r->decubitus;

                            print "<td>";
                            print $r->kultur;

                            print "<td>";
                            print $r->antibiotik;

                            ?><?

                            print "<td width='10'>".anchor("Rekap/edit/".$r->id_pas,"<span class='glyphicon glyphicon-edit'></span>",array('title'=>'edit data'));
                            //print "<td width='10'>".anchor("Rekap/delete/".$r->id_pas,"<span class='glyphicon glyphicon-trash'></span>",array('title'=>'hapus data'));
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