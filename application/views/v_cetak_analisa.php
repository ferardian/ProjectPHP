    <html>
    <head>
     <title>Indikator Mutu</title>
     

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
   				<td ><h2>Laporan Indikator Mutu</h2>
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
            <td><?php 
            foreach ($record as $r){
            echo format_date($r->tanggal_awal,'id');
            echo ' - ';
            echo format_date($r->tanggal_akhir,'id');
            } ?></td>
          </tr>
          <tr>
            <td><p><strong>Ruangan </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            foreach ($record as $r){
            echo $r->ruangan;
            } ?></td>
          </tr> 
          <tr>
            <td><p><strong>Indikator </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            foreach ($record as $r){
            echo $r->kd_sub_inmut;
            } ?></td>
          </tr> 
        </table>
   			
   			
   			
   		</div>
   		
   	
      <table width="22cm" class="tb" cellspacing="0">
        <thead >

        	<tr>
          
                         <th>Indikator</th>  
                         <th>Jumlah Num</th>
                         <th>Jumlah Denum</th> 
                         <th>Formula</th> 
                         <th>Target</th> 
                         <th>Kesimpulan</th> 
                          <th>Analisa</th>                 
                                             
                                              
                         
                          <!-- <th>Indikator</th> -->
           <!-- <th> No. Identitas</th> -->
           </tr>
       </thead>
    
                    <tbody>
                       <?php 
                       
                       $jml_tindakan=0;
                       $jml_infeksi=0;
                       $infeksi=0;
                       $tindakan=0;
                       $tot_tindakan=0;


                          foreach ($record as $r){
                            echo "<tr>";
          
          echo "<td>".$r->nama_indikator."</td>";
          echo "<td>".$r->jml_num."</td>";
          echo "<td>".$r->jml_denum."</td>";
          echo "<td>".round($r->jumlah,2).'%'."</td>";
          echo "<td>".$r->simbol.$r->standar.'%'."</td>";
           if ($r->rumus=='1'){
                                  if ($r->jumlah==$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
                                  }
                                  
                            } else if ($r->rumus=='2'){
                                   if ($r->jumlah<=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
                                  }
                            } else if ($r->rumus=='3'){
                                   if ($r->jumlah<$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
                                  }
                            }else if ($r->rumus=='4'){
                                   if ($r->jumlah>=$r->standar) {
                                    print "<td>";
                                    print 'Tercapai';
                                  } else {
                                    print "<td>";
                                    print 'Belum Tercapai';
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
          echo "<td>".$r->analisa."</td>";
          
          
          // echo "<td>".$r->indikator."</td>";
         
          
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
                          

                          
                         
                        }?>
                    </tbody>
                    
      

    </table>
<br/>
<br/>
<br/>
  
    <table>
      <tr>
      <td width="250px" align="center">
        Verifikator Indikator Mutu Utama <br/> Indikator Mutu Unit <br/><br/><br/><br/><br/><br/> (..............................) 
      </td>
      <td width="250px" align="center">
        Koordinator Instalasi / Unit <br/><br/><br/><br/><br/><br/><br/> (..............................)
      </td>
      <td align="center">
        PIC/Penanggung Jawab Data Instalasi <br/><br/><br/><br/><br/><br/> (..............................)
      </td>
      </tr>
    </table>

    </div>
</body>
</html>