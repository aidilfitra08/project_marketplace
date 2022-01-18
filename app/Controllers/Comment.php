<?php namespace App\Controllers;


use App\Models\CommentModel;

class Comment extends BaseController
{
	protected $commentModel;
	public function __construct()
	{
		$this->commentModel = new CommentModel();
	}
	public function publish() {
        $session = session();
        $data = array(
			'user_name' => $session->get('user_name'),
			'comment_text' => $this->request->getPost('komentar'),
			'product_id' => $this->request->getPost('product_id')

        );
        
        $this->commentModel->tambah_comment($data);
        $url = '/products/baju/'.$data['product_id'];
        return redirect()->to($url);
    }

    public function delete($komentar_id, $product_id){
        // $session = session();
        $this->commentModel->delete_comment($komentar_id);
        $url = '/products/baju/'.$product_id;
        return redirect()->to($url);
    }

    
}