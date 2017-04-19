

    <html>
    <head>
     <title>LAPAORAN IKP</title>
     

     <link href="<?php echo base_url() ?>assets/mpdf.css" rel="stylesheet">
     <style type="text/css">
     .tb th {
          background-color: #4CAF50;
          color: white;
          text-align: center;
      }
     .tb tr:nth-child(even) {background-color: #f2f2f2}
      
     .tb th, .tb td {
        border-bottom: 1px solid #ddd;
         padding: 15px;
        
          border: 1px solid #ddd;
          font-size: 12pt;
      }
     </style>
   </head>
   <body>
   	<div class="row">
   		<table width="100%">
   			<tr>
   				<td><img src="<?php echo base_url() ?>assets/gambar/rssk.png" width="100px" height="70px" >
   			</td>
   				<td ><h2>Laporan IKP</h2>
   					<h3>Rumah Sakit Siti Khodijah Pekalongan</h3>
   				</td>
   			</tr>
   		</table>
   		<hr>
   		<div class="col-md">
   			<table>
          <tr>
            <td><p><strong>Tanggal </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php  echo format_date($tgl_awal,'id'); ?> - <? echo format_date($tgl_akhir,'id')?></td>
          </tr> 
        </table>
   			
   			
   			
   		</div>
   		
   	
      <table width="22cm" class="tb" cellspacing="0">
        <thead >

        	<tr>
          <th>No.</th>
                         <th>Tanggal Insiden</th>                     
                         <th>Nama Pasien</th>
                         <th>Umur</th>
                         <th>Lokasi Insiden</th>
                         <th>Tipe Insiden</th>
                         <th>Grading Resiko Kejadian</th>
                         <th>Sentinel</th>
                         <th>KTD</th>        
                         <th>KNC</th>
                         <th>KTC</th>
                         <th>KPC</th>
                         <th>Tindak Lanjut</th>
           <!-- <th> No. Identitas</th> -->
           </tr>
       </thead>
    
                    <tbody>
                       <?php 
                       $no=1;
                       $jml_tindakan=0;
                       $jml_infeksi=0;
                       $infeksi=0;
                       $tindakan=0;
                       $tot_tindakan=0;


                          foreach ($record as $r){
                            print "<tr>";
                            print "<td>";
                            print $no;

                          print "<td>";
                            print format_date($r->tanggal,'id'); 
                          
                          if ($r->nama_pasien=="") {
                            print "<td>";
                            print "---";
                          } else {
                            print "<td>";
                            print $r->nama_pasien;
                          }
                            
                            if ($r->umur=="") {
                              print "<td>";
                            print "---";
                            } else {
                              print "<td>";
                            print $r->umur;
                            }
                             
                             
                             if  ($r->nama_pasien==""){
                              print "<td>";
                            print "---";
                             } else {
                              print "<td>";
                            print $r->ruangan;
                             }
                             
                            
                            print "<td>";
                            print $r->insiden; 
                            
                            print "<td>";
                            print $r->grading; 
                            
                            print "<td>";
                            print $r->sentinel;
                          
                            print "<td>";
                            print $r->ktd;

                            print "<td>";
                            print $r->knc;
                            //$jek = trim($r->jekel)=='P'?'Perempuan':'Laki - Laki';
                            print "<td>";
                            print $r->ktc;

                            print "<td>";
                            print $r->kpc;

                            print "<td>";
                            print $r->tindak_lanjut;
          
        
         
          
           
          //echo "<td>".$r->total_nilai."</td>";
          echo "</tr>";
                          /*  print "<tr>";
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
                          */  
                          

                          
                          $no++;
                        }?>
                    </tbody>
                       </table>
    </div>
</body>
</html>
