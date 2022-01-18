<?php namespace App\Controllers;

use App\Models\BajuModel;
use App\Models\CommentModel;

class Products extends BaseController
{
	protected $bajuModel;
	protected $commentModel;
	public function __construct()
	{
		$this->bajuModel = new BajuModel();
		$this->commentModel = new CommentModel();
	}
	public function index()
	{
        // $bajuModel = new BajuModel();
		$data['baju'] = $this->bajuModel->getBaju();
		echo view('products',$data);
	}

    public function baju($product_id = false)
	{
		// $bajuModel = new BajuModel();
		if ($product_id === false) {
			$data['baju'] = $this->bajuModel->getBaju();
			echo view('AllBaju',$data);
		} else {
			$data = [
				'baju' => $this->bajuModel->getBaju($product_id),
				'comment' => $this->commentModel->getComment($product_id)
			];
			// $data['baju'] = ;
			echo view('/satuan/baju', $data);
		}
		
		// $data['baju'] = $this->bajuModel->getBaju();
		// echo view('AllBaju',$data);
	}
	
	// public function baju($product_id)
	// {
    //     $data['baju'] = $this->bajuModel->getBaju($product_id);
	// 	echo view('/satuan/baju');
    // }
    
    public function celana()
	{
        // echo "ALL PRODUCTS HERE";
		echo view('AllCelana');
    }

    public function topi()
	{
        // echo "ALL PRODUCTS HERE";
		echo view('AllTopi');
	}
	//--------------------------------------------------------------------

    public function baju1()
	{
        // echo "ALL PRODUCTS HERE";
		echo view('/satuan/baju');
	}
}