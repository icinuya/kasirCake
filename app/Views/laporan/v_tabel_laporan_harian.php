<div class="col-12">
    <b>Tanggal :</b> <?= $tgl ?>
<table class="table table-bordered">
    <tr class="text-center bg-primary">
        <th>NO</th>
        <th>Barcode/Kode</th>
        <th>Nama Produk</th>
        
        <th>Harga Jual</th>
        <th>QTY</th>
        <th>Total Harga</th>
        <th>Total Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($dataharian as $key => $value) { 
        $grandtotal[] = $value['subtotal'];
        $granduntung[] = $value['untung'];
        ?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td class="text-center"><?= $value['kode_produk'] ?></td>
        <td><?$value['nama_produk'] ?></td>
        <td class="text-right">Rp. <?= $value['harga'] ?></td>
        <td class="text-center"> <?= $value['qty'] ?></td>
        <td class="text-right">Rp. <?= $value['subtotal'] ?></td>
        <td class="text-right">Rp. <?= $value['untung'] ?></td>
</tr>
<?php } ?>
<tr class="bg-success">
    <td class="text-center" colspan="5">
        <h5>Grand Total</h5>
    </td>
    <td class="text-right">
       Rp. <?= $dataharian == null ? '' : number_format(array_sum($grandtotal), 0) ?>
    </td>
    <td class="text-right">
    Rp. <?= $dataharian == null ? '' : number_format(array_sum($granduntung), 0) ?> 
    </td>
</tr>
</table>
    </div>
    </div>