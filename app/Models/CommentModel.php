<?php 

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    // protected $table = 'product';
    
    public function getComment($id = false)
    {
        // return $this->db->table('product')->get()->getResultArray();
        return $this->db->table('user_comment')->get()->getResultArray();
        // if ($id === false) {
            
        //     return $this->db->table('product')
        //     ->join('detail', 'product.product_id = detail.product_id')
        //     ->get()->getResultArray();
        // } 
        // else {
        //     return $this->db->table('product')
        //     ->join('detail', 'product.product_id = detail.product_id')
        //     ->where('product.product_id', $id)
        //     ->get()->getResultArray();
        // }
    }

    public function tambah_comment($data){
        $query = $this->db->table('user_comment')->insert($data);
        return $query;
    }

    public function update_comment($data, $komentar_id){
        $query = $this->db->table('user_comment')->update($data, array('id' => $komentar_id));
        return $query;
    }

    public function delete_comment($komentar_id){
        $query = $this->db->table('user_comment')->delete(array('komentar_id'=>$komentar_id));
        return $query;
    }
    
}
