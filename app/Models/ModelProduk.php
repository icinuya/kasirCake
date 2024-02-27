<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProduk extends Model
{
   protected $table = 'produk';
   protected $primaryKey = 'id_produk';
   protected $allowedFields = [
      'kode_produk', 'nama_produk', 'id_kategori',  'id_satuan', 'harga_beli',
      'harga_jual', 'stok'
   ];

   public function AllData()
   {
      $produk = new ModelProduk;
      $produk->select('produk.kode_produk, produk.nama_produk,kategori.id_kategori, satuan.id_satuan, kategori.nama_kategori,  produk.harga_jual, produk.harga_beli, produk.stok, produk.id_produk,
                  satuan.nama_satuan');
      $produk->join('kategori', 'kategori.id_kategori=produk.id_kategori');
      $produk->join('satuan', 'satuan.id_satuan=produk.id_satuan');
      $produk->orderBy('id_produk', 'DESC');
      return $produk->findAll();
   }

   public function InsertData($data)
   {
      $this->db->table('produk')->insert($data);
   }

   public function UpdateData($data)
   {
      $this->db->table('produk')
         ->where('id_produk', $data['id_produk'])
         ->update($data);
   }

   public function DeleteData($data)
   {
      $this->db->table('produk')
         ->where('id_produk', $data['id_produk'])
         ->delete($data);
   }
}
