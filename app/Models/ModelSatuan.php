<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatuan extends Model
{
   protected $table = 'satuan';
   protected $primaryKey = 'id_satuan';
   protected $allowedFields = ['nama_satuan'];


   public function AllData()
   {
      return $this->db->table('satuan')
         ->get()
         ->getResultArray();
   }

   public function InsertData($data)
   {
      $this->db->table('satuan')->insert($data);
   }

   public function UpdateData($data)
   {
      $this->db->table('satuan')
         ->where('id_satuan', $data['id_satuan'])
         ->update($data);
   }

   public function DeleteData($data)
   {
      $this->db->table('satuan')
         ->where('id_satuan', $data['id_satuan'])
         ->delete($data);
   }
}
