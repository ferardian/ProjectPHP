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
            <td><p><strong>Bulan </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            $sudah='';
            //time = strtotime(str_replace('-', '/', $tanggal));
            $month = date("M",strtotime($tanggal));
            echo $month;
           ?></td>
          </tr>
          <tr>
            <td><p><strong>Ruangan </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            foreach ($record as $r){
              $cetak2 = $r->ruangan == $sudah? '':$r->ruangan;
            echo $cetak2;

            $sudah = $r->ruangan;
            } ?></td>
          </tr> 
          <tr>
            <td><p><strong>Indikator </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            $sudah1='';
            foreach ($record as $r){
              $cetak3 = $r->nama_indikator==$sudah? '' : $r->nama_indikator;
            echo $cetak3;
            $sudah=$r->nama_indikator;
            } ?></td>
          </tr> 
           <tr>
            <td><p><strong>Kode Indikator </strong></p></td>
            <td><p><strong>: </strong></p></td>
            <td><?php 
            $sudah1='';
            foreach ($record as $r){
              $cetak4 = $r->kd_sub_inmut==$sudah1? '' : $r->kd_sub_inmut;
            echo $cetak4;
            $sudah1=$r->kd_sub_inmut;
            } ?></td>
          </tr> 
        </table>
   			
   			
   			
   		</div>
   		
   	
      <table width="22cm" class="tb" cellspacing="0">
        <thead >

        	<tr>
                         <th>Tanggal</th>  
                         <th>Numerator</th>
                         <th>Denumerator</th> 
           </tr>
       </thead>
    
                    <tbody>
                       <?php 
                   foreach ($record as $r){
         echo "<tr>";
          echo "<td>".format_date($r->tanggal,'id')."</td>";
          echo "<td>".$r->num."</td>";
          echo "<td>".$r->denum."</td>";
          echo "</tr>";
                     
                         
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