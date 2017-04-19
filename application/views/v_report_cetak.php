

    <html>
    <head>
     <title>Cek 2</title>
     

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
   				<td ><h2>Laporan Suerveilans</h2>
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
                         <th>Ruangan</th>                     
                         <th>Tindakan (<?php echo $tindakan; ?>)</th>
                         <th>Infeksi</th>
                         <th>Rate (‰)</th>
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
                            echo "<tr>";
          echo "<td>".$no."</td>";
          //echo "<td>".$no."</td>";
          if (!empty($r->tindakan3)) {
             echo "<td>".$r->ruangan."</td>"; $tot_tindakan=$r->tindakan+$r->tindakan2+$r->tindakan3+$r->tindakan4; 
          echo "<td>".$tot_tindakan."</td>";  $jml_tindakan+=$tot_tindakan; $tindakan=$tot_tindakan;
          echo "<td>".$r->infeksi."</td>"; $jml_infeksi+=$r->infeksi; $infeksi=$r->infeksi;
          echo $tot_presentase=round(($infeksi/$tot_tindakan)*100,2);
          echo  "<td>".$tot_presentase."%"."</td>";
          } else {
            echo "<td>".$r->ruangan."</td>"; $tot_tindakan=$r->tindakan+$r->tindakan2+$r->tindakan3+$r->tindakan4; 
          echo "<td>".$tot_tindakan."</td>";  $jml_tindakan+=$tot_tindakan; $tindakan=$tot_tindakan;
          echo "<td>".$r->infeksi."</td>"; $jml_infeksi+=$r->infeksi; $infeksi=$r->infeksi;
          echo $tot_presentase=round(($infeksi/$tot_tindakan)*1000,2);
          echo  "<td>".$tot_presentase."‰"."</td>";
          }
          
        
         
          
           
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
                    <tfoot>
                        <tr>
                          <td colspan="2" align="center"><b><i>Jumlah</i></b></td>
                          
                          <td><?php echo $jml_tindakan ?></td>
                          <td><?php echo $jml_infeksi ?></td>
                          <?php 
                          if ($tindakan=='OP'){
                            ?>
                            <td><?php echo round(($jml_infeksi/$jml_tindakan)*1000,2).'‰' ?></td>
                            <?php
                          } else {
                            ?>
                            <td><?php echo round(($jml_infeksi/$jml_tindakan)*100,2).'‰' ?></td>
                            <?php
                          }
                           ?>
                          
                        </tr>
                    </tfoot>
      

    </table>
    <br/>
<br/>
<br/>
  
    <table>
      <tr>
      <td width="250px" align="center">
        Ketua Komite PPI <br/> Indikator Mutu Unit <br/><br/><br/><br/><br/><br/> (dr. Irmitasari, Sp.OG) 
      </td>
      <td width="250px" align="center">
        
      <td align="center">
        Sekretaris <br/><br/><br/><br/><br/><br/><br/> (Wahyu Ariani, AMK)
      </td>
      </tr>
    </table>
    </div>
</body>
</html>
