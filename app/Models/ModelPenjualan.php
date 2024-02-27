<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenjualan extends Model
{
   protected $table = 'penjualan';
   protected $primaryKey = 'id_penjualan';
   protected $allowedFields = [
      'id_penjualan', 'no_faktur', 'tgl_penjualan', 'time', 'grand_total',
      'dibayar', 'kembalian', 'id_user'
   ];

   public function NoFaktur()
   {
      $tgl = date('Ymd');
      $query = $this->db->query("SELECT MAX(RIGHT(no_faktur,4)) as no_urut from penjualan where DATE (tgl_penjualan)='$tgl'");
      $hasil = $query->getRowArray();
      if ($hasil['no_urut'] > 0) {
         $tmp = $hasil['no_urut'] + 1;
         $kd = sprintf("%04s", $tmp);
      } else {
         $kd = "0001";
      }
      $no_faktur = date('Ymd') . $kd;
      return $no_faktur;
   }


   public function CekProduk($kode_produk)
   {
      return $this->db->table('produk')
         ->join('kategori', 'kategori.id_kategori=produk.id_kategori')
         ->join('satuan', 'satuan.id_satuan=produk.id_satuan')
         ->where('kode_produk', $kode_produk)
         ->get()
         ->getRowArray();
   }

   public function AllProduk()
   {
      $produk = new ModelProduk;
      $produk->select('produk.kode_produk, produk.nama_produk,kategori.id_kategori, satuan.id_satuan, kategori.nama_kategori,  produk.harga_jual, produk.stok, produk.id_produk,
                  satuan.nama_satuan');
      $produk->join('kategori', 'kategori.id_kategori=produk.id_kategori');
      $produk->join('satuan', 'satuan.id_satuan=produk.id_satuan');
      $produk->where('stok > 0');

      return $produk->findAll();
   }

   public function InsertJual($data)
   {
      $this->db->table('penjualan')->insert($data);
   }

   public function InsertDetailJual($data)
   {
      $this->db->table('detailpenjualan')->insert($data);
   }
}
