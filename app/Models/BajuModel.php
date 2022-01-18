<?php 

namespace App\Models;

use CodeIgniter\Model;

class BajuModel extends Model
{
    // protected $table = 'product';
    
    public function getBaju($id = false)
    {
        // return $this->db->table('product')->get()->getResultArray();
        if ($id === false) {
            
            return $this->db->table('product')
            ->join('detail', 'product.product_id = detail.product_id')
            ->get()->getResultArray();
        } 
        else {
            return $this->db->table('product')
            ->join('detail', 'product.product_id = detail.product_id')
            ->where('product.product_id', $id)
            ->get()->getResultArray();
        }
    }

    // public function tambah($data){
    //     $query = $this->db->table($this->table)->insert($data);
    //     return $query;
    // }

    // public function updateData($data, $id){
    //     $query = $this->db->table($this->table)->update($data, array('id' => $id));
    //     return $query;
    // }

    // public function hapus($id){
    //     $query = $this->db->table($this->table)->delete(array('id'=>$id));
    //     return $query;
    // }
    
}
