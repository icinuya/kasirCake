<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-menu-alt text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Produk</div>
                        <div class="stat-text"><?= $jlhproduk ?></div>
                    </div>
                    <div>
                        <a href="<?= base_url('Produk') ?>" class="small-box footer"><i class="ti ti-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-pencil-alt2 text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Satuan</div>
                        <div class="stat-text"><?= $jlhsatuan ?></div>
                    </div>
                    <div>
                        <a href="<?= base_url('Satuan') ?>" class="small-box footer"><i class="ti ti-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-receipt text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Kategori</div>
                        <div class="stat-text"><?= $jlhkategori ?></div>
                    </div>
                    <div>
                        <a href="<?= base_url('Kategori') ?>" class="small-box footer"><i class="ti ti-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-user text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">User</div>
                        <div class="stat-text"><?= $jlhuser ?></div>
                    </div>
                    <div>
                        <a href="<?= base_url('User') ?>" class="small-box footer"><i class="ti ti-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">daily income</div>
                    <span class="curreny float-left mr-1">Rp. </span>
                <span class="stat-digit"><?= $todayincome == null ? 0 : number_format($todayincome['subtotal'], 0) ?></span> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">monthly income</div>
                    <span class="curreny float-left mr-1">Rp. </span>
                <span class="stat-digit"><?= $monthincome == null ? 0 : number_format($monthincome['subtotal'], 0) ?></span> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">year income</div>
                    <span class="curreny float-left mr-1">Rp. </span>
                <span class="stat-digit"><?= $yearincome == null ? 0 : number_format($yearincome['subtotal'], 0) ?></span> 
                </div>
            </div>
        </div>
    </div>
</div>





<?php
if ($grafik == null){
    $tgl[] = 0;
    $total[] = 0;
    $untung[] = 0;
}else{
    foreach ($grafik as $key => $value) {
        $tgl[] = $value['tgl_penjualan'];
        $total[] = $value['subtotal'];
        $untung[] = $value['untung'];
    }
} ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <canvas id="barChart" width="95px" height="45px"></canvas>
        </div>
    </div>
</div><!-- /# column -->

<script>
    const ctx = document.getElementById('barChart');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: 'Grafik',
            datasets: [{
                label: 'Grafik Pendapatan Penjualan Bulan <?= date('M-Y') ?>',
                data: '',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


