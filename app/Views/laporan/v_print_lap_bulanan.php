<div class="col-12">
<table class="table table-bordered table-striped">
    <tr class="text-center">
        <th>NO</th>
        <th>Tanggal</th>
        <th>Sub Total</th>
        <th>Total Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($databulanan as $key => $value) { 
        $grandtotal[] = $value['subtotal'];
        $granduntung[] = $value['untung'];
        ?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td class="text-center"><?= $value['tgl_jual'] ?></td>
        <td class="text-right">Rp. <?= number_format($value['subtotal'], 0) ?></td>
        <td class="text-right">Rp. <?= number_format($value['untung'], 0) ?></td>
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