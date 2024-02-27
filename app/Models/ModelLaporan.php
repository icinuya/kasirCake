<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaporan extends Model
{
    protected $table = 'detailpenjualan';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = [
        'id_detail', 'no_faktur', 'kode_produk',
        'qty', 'subtotal', 'untung'
    ];

    public function DataHarian($tgl)
    {
        return $this->db->table('detailpenjualan')
            ->join('produk', 'produk.kode_produk=detailpenjualan.kode_produk')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('penjualan.tgl_penjualan', $tgl)
            ->select('detailpenjualan.kode_produk')
            ->select('produk.nama_produk')
            ->select('detailpenjualan.harga')
            ->groupBy('detailpenjualan.kode_produk')
            ->selectSum('detailpenjualan.qty')
            ->selectSum('detailpenjualan.subtotal')
            ->selectSum('detailpenjualan.untung')
            ->get()->getResultArray();
    }

    public function DataBulanan($bulan, $tahun)
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('month(penjualan.tgl_penjualan)', $bulan)
            ->where('year(penjualan.tgl_penjualan)', $tahun)
            ->select('penjualan.tgl_penjualan')
            ->groupBy('penjualan.tgl_penjualan')
            ->selectSum('detailpenjualan.subtotal')
            ->selectSum('detailpenjualan.untung')
            ->get()
            ->getResultArray();
    }

    public function DataTahunan($tahun)
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('year(penjualan.tgl_penjualan)', $tahun)
            ->select('month(penjualan.tgl_penjualan) as bulan')
            ->groupBy('month(penjualan.tgl_penjualan)')
            ->selectSum('detailpenjualan.subtotal')
            ->selectSum('detailpenjualan.untung')
            ->get()
            ->getResultArray();
    }
}
