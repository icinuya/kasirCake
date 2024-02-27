<div class="col-12">
    <b>Bulan :</b> <?= $bulan ?> <b>Tahun :</b> <?= $tahun ?>
    <table class="table table-bordered">
    <tr class="text-center bg-primary">
        <th>NO</th>
        <th>Tanggal</th>
      
        <th>Total Harga</th>
        <th>Total Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($databulanan as $key => $value) { 
        $grandtotal[] = $value['subtotal'];
        $granduntung[] = $value['untung'];
        ?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td class="text-center"><?= $value['tgl_penjualan'] ?></td>
        <td class="text-right">Rp. <?= $value['subtotal'] ?></td>
        <td class="text-right">Rp. <?= $value['untung'] ?></td>
</tr>
<?php } ?>
<tr>
    <td class="text-center bg-gray" colspan="2">
        <h5>Grand Total</h5>
    </td>
    <td class="text-right">
       Rp. <?= $databulanan == null ? '' : number_format(array_sum($grandtotal), 0) ?>
    </td>
    <td class="text-right">
    Rp. <?= $databulanan == null ? '' : number_format(array_sum($granduntung), 0) ?> 
    </td>
</tr>
</table>
    </div>
    </div>