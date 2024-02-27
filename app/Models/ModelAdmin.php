<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table = 'detailpenjualan';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = [
        'id_detail', 'no_faktur', 'kode_produk',   'harga',
        'qty', 'subtotal', 'untung'
    ];

    public function Grafik()
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('month(penjualan.tgl_penjualan)', date('m'))
            ->where('year(penjualan.tgl_penjualan)', date('Y'))
            ->select('penjualan.tgl_penjualan')
            ->groupBy('penjualan.tgl_penjualan')
            ->selectSum('detailpenjualan.subtotal')
            ->selectSum('detailpenjualan.untung')
            ->get()
            ->getResultArray();
    }

    public function Todayincome()
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('penjualan.tgl_penjualan', date('Y-m-d'))
            ->groupBy('penjualan.tgl_penjualan')
            ->selectSum('detailpenjualan.subtotal')
            ->get()->getRowArray();
    }

    public function Monthincome()
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('month(penjualan.tgl_penjualan)', date('m'))
            ->where('year(penjualan.tgl_penjualan)', date('Y'))
            ->groupBy('penjualan.tgl_penjualan')
            ->selectSum('detailpenjualan.subtotal')
            ->get()->getRowArray();
    }

    public function Yearincome()
    {
        return $this->db->table('detailpenjualan')
            ->join('penjualan', 'penjualan.no_faktur=detailpenjualan.no_faktur')
            ->where('year(penjualan.tgl_penjualan)', date('Y'))
            // ->select('jual.tgl_jual')
            ->groupBy('year(penjualan.tgl_penjualan)')
            ->selectSum('detailpenjualan.subtotal')
            ->get()
            ->getRowArray();
    }

    public function jlhproduk()
    {
        return $this->db->table('produk')->countAll();
    }

    public function jlhkategori()
    {
        return $this->db->table('kategori')->countAll();
    }
    
    public function jlhsatuan()
    {
        return $this->db->table('satuan')->countAll();
    }

    public function jlhuser()
    {
        return $this->db->table('user')->countAll();
    }
}
