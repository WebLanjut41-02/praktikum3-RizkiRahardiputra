
 <form action="<?php echo base_url('pemesanan/daftarmenu') ?>" method="post">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">kodemenu</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
      $datamenu = $this->session->all_menu;
      $x = 1;
      foreach ($datamenu as $data) {  ?>


        <tr>
          <th scope="row"><?php echo $x++ ; ?></th>
          <td><?php echo $data->namamenu ?></td>
          <td><?php echo $data->harga ?></td>
          <td>
            <a href="<?php base_url() ?>/pemesanan/beli?kodemenu = <?php echo $data->kodemenu ?>" class="btn btn-info">PESAN</a>
          </td>
        </tr>
      
<?php } ?>
  

  </tbody>
</table>
</form>