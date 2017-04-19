<section class="content-header">
          <h1>
            DATA INDIKATOR MUTU RUANGAN
            
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
                    //echo anchor('rekap/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'));

                    ?>
                      <!-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modal">Tambah Data</button> -->
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <!-- <th></th> -->
                        <th>No.</th>
                        <th>Tanggal Awal</th>
                        <th>Tanggal Akhir</th>
                        <th>Ruang</th>
                        <th>Indikator</th>                     
                        <th>Jumlah Nemurator</th>
                        <th>Jumlah Denumerator</th>
                        <th>Formula</th>
                        <th>Target</th>
                        <th >Kesimpulan</th>
                        <th >Analisa</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $no=1;
                          foreach ($record as $r){
                            print "<tr>";
                            print "<td width='10'>".anchor("indikator/cetak_analisa/".$r->kd_analisa,"<span class='glyphicon glyphicon-print'></span>",array('title'=>'edit data','target' => '_blank'));
                            //print "<td width='10'>".anchor("report/hapus_analisa/".$r->kd_analisa,"<span class='glyphicon glyphicon-trash'></span>",array('title'=>'hapus data'));
                            print "<td>";
                            print $no;

                            print "<td>";
                            print format_date($r->tanggal_awal,'id');  

                            print "<td>";
                            print format_date($r->tanggal_akhir,'id'); 

                            print "<td>";
                            print $r->ruangan;

                            print "<td>";
                            print $r->nama_indikator;
                          
                            print "<td>";
                            print $r->jml_num;

                            print "<td>";
                            print $r->jml_denum;
                            
                            print "<td>";
                            print round($r->jumlah,2).'%';
                            
                            print "<td>";
                            print $r->simbol.$r->standar.'%';


                            if ($r->rumus=='1'){
                                  if ($r->jumlah==$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                                  
                            } else if ($r->rumus=='2'){
                                   if ($r->jumlah<=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            } else if ($r->rumus=='3'){
                                   if ($r->jumlah<$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            }else if ($r->rumus=='4'){
                                   if ($r->jumlah>=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            }else if ($r->rumus=='5'){
                                   if ($r->jumlah>$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
                                  }
                                }

                            print "<td>";
                            print $r->analisa;

                            ?><?

                            
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