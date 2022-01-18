<?php 

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    // protected $table = 'product';
    
    public function getArticle($article_id = false)
    {
        // return $this->db->table('product')->get()->getResultArray();       
        if ($article_id === false) {
            return $this->db->table('article')->get()->getResultArray();
        } 
        else {
            return $this->db->table('article')
            ->where('article_id', $article_id)
            ->get()->getResultArray();
        }
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

    public function updateData($data, $id){
        $query = $this->db->table('article')->update($data, array('article_id' => $id));
        return $query;
    }

    // public function tambah_comment($data){
    //     $query = $this->db->table('user_comment')->insert($data);
    //     return $query;
    // }

    // public function update_comment($data, $komentar_id){
    //     $query = $this->db->table('user_comment')->update($data, array('id' => $komentar_id));
    //     return $query;
    // }

    // public function delete_comment($komentar_id){
    //     $query = $this->db->table('user_comment')->delete(array('komentar_id'=>$komentar_id));
    //     return $query;
    // }
    
}
