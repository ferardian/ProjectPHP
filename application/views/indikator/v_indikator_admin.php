 <section class="content-header">
          <h1>
            DATA INDIKATOR MUTU
            
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
                    echo anchor('indikator/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'));

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
                         <th>Indikator Utama</th>                     
                         <th>Nama Indikator</th>
                         <th>Ruangan</th>
                         <th>Numerator</th>
                         <th>Denumerator</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                          foreach ($record as $r){
                            print "<tr>";
//print "<td width='10' align='center'>".anchor("indikator/edit/".$r->id,"<span class='glyphicon glyphicon-edit'></span>",array('title'=>'edit data'));
//print "<td width='10' align='center'>".anchor("indikator/delete/".$r->id,"<span class='glyphicon glyphicon-trash'></span>",array('title'=>'hapus data'));
                            print "<td>";
                            print $no;

                            print "<td>";
                             print format_date($r->tanggal,'id'); 

                            print "<td>";
                            print $r->kd_sub_inmut; 

                            print "<td>";
                            print $r->nama_indikator;
                          
                            print "<td>";
                            print $r->ruangan;

                            print "<td >";
                            print $r->num;
                            //$jek = trim($r->jekel)=='P'?'Perempuan':'Laki - Laki';
                            print "<td>";
                            print $r->denum;

                           

                            
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