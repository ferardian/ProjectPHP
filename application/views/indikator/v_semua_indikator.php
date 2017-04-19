<div class="row">
<h2 align="center"><strong>INDIKATOR MUTU</strong></h2>
  <div class="row col-md-12">

      <?php 
      $no=1;

      foreach ($record as $r){?>
    <div class="col-md-4">


      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $r->ruangan ?></h3>
        </div>
        <div class="icon">
          <i class="ion ion-folder"></i>
        </div>
        <a href="<?php echo base_url().'indikator/lihat_ruangan/'.$r->kd_ruang ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>

  </div>
      <?

      $no++;
    }?>

          </div><!-- /.row -->
</div>