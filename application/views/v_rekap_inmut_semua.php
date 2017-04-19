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

                      <!-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modal">Tambah Data</button> -->
                      
                  </div>
                </div><!-- /.box-header -->
                 <?php 
                    echo form_open('indikator/post_analisa_semua')
                 ?>
                  <form role="form">
                  <div class="box-body">
                     <div class="row col-md-6">
                      <div class="form-group">  
                    <div class="row col-md-12">
                <div class="box-body table-responsive">
                  <table  id="" class="table table-bordered table-striped">
             
                       <?php 
                       $no=1;
                       $jumlah=0;
                       $capaian1='Tercapai';
                       $capaian2='Tidak Tercapai';

                          foreach ($record as $r){
                            $kd_inmut=$r->kd_inmut;
                             print "<tr>";
                            print "<td>";
                            print 'Tanggal';
                            print "<td>";
                            print format_date($tgl_awal,'id');
                            print ' - ';
                            print format_date($tgl_akhir,'id'); $ruang=$r->kd_ruang;
                             //print format_date($r->tanggal,'id'); 
                            print "</tr>";

                            print "<tr>";
                            print "<td>";
                            print 'Ruangan';
                            print "<td>";
                            print $r->ruangan; $ruang=$r->kd_ruang;
                             //print format_date($r->tanggal,'id'); 
                            print "</tr>";

                            print "<tr>";
                            print "<td>";
                            print 'Indikator';

                            print "<td>";
                            print $r->nama_indikator; $nama_indikator=$r->nama_indikator;
                             //print format_date($r->tanggal,'id'); 
                            print "</tr>";

                            print "<tr>";
                            print "<td>";
                            print 'Numerator';
                            print "<td>";
                             print $r->jml_num; $jumlah_num=$r->jml_num;
                             print "</tr>";

                             print "<tr>";
                            print "<td>";
                            print 'Denumerator';
                            print "<td>";
                             print $r->jml_denum; $jumlah_denum=$r->jml_denum; $jumlah=($r->jml_num/$r->jml_denum)*100;
                             print "</tr>";

                             print "<tr>";
                            print "<td>";
                            print 'Formula';
                            print "<td>";
                             print round($jumlah,2).'%';
                             print "</tr>";
                            
                            print "<tr>";
                            print "<td>";
                            print 'Target';
                            print "<td>";
                             print $r->simbol.$r->standar.'%';
                             print "</tr>";


                             print "<tr>";
                            print "<td>";
                            print 'Kesimpulan';
                            if ($r->rumus=='1'){
                                  if ($jumlah==$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                                  
                            } else if ($r->rumus=='2'){
                                   if ($jumlah<=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            } else if ($r->rumus=='3'){
                                   if ($jumlah<$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            }else if ($r->rumus=='4'){
                                   if ($jumlah>=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Tidak Tercapai';
                                  }
                            }else if ($r->rumus=='5'){
                                   if ($jumlah>$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
                                  }
                                }
                          
                            // if ($jumlah==$r->standar) {
                            //    print "<td>";
                            //  print 'Tercapai';
                            //  } else {
                            //   print "<td>";
                            //  print 'Tidak';
                            //  }
                            
                             print "</tr>";

                            ?>
                         

                    <?

                          $no++;
                        }?>
                         </div>
                   <div class="form-group">
                          <label >Analisa</label>
                          <textarea class="form-control" name="analisa"></textarea>
                          <input type="hidden" name="kd_ruang" value="<?php echo $ruang; ?>">
                          <input type="hidden" name="kd_inmut" value="<?php echo $kd_inmut; ?>">
                          <input type="hidden" name="jml_num" value="<?php echo $jumlah_num; ?>">
                          <input type="hidden" name="jml_denum" value="<?php echo $jumlah_denum; ?>">
                          <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                          <input type="hidden" name="tgl_awal" value="<?php echo $tgl_awal; ?>">
                          <input type="hidden" name="tgl_akhir" value="<?php echo $tgl_akhir; ?>">
                    </div>
                  <br/>
                 
                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    
                   </div>
                  </div>
                </form>
                  </table>
                </div><!-- /.box-body -->
                 
                
                  
                   
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
     <!-- /.content-wrapper -->
     

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