  <div class="row col-md-12">

      <?php 
      $no=1;

      foreach ($record as $r){?>
    <div class="col-md-4">


      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $r->pokja ?></h3>
        </div>
        <div class="icon">
          <i class="ion ion-folder"></i>
        </div>
        <a href="<?php echo base_url().'akreditasi/lihat_pokja/'.$r->kd_pokja ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>

  </div>
      <?

      $no++;
    }?>

          </div><!-- /.row -->