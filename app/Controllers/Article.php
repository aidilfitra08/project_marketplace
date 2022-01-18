<?php namespace App\Controllers;

use App\Models\ArticleModel;
class Article extends BaseController
{
    protected $articleModel;
	public function __construct()
	{
		$this->articleModel = new ArticleModel();
	}
	public function index($article_id = null)
	{
        $data['article'] = $this->articleModel->getArticle();
        return view('AllArticle',$data);

        
		
    }
    
    public function bacaan($article_id)
	{
        $data['article'] = $this->articleModel->getArticle($article_id);
        
        return view('article',$data);
        
        
		
    }

    public function edit_bacaan($article_id)
	{
        $data['article'] = $this->articleModel->getArticle($article_id);
        
        return view('article_edit',$data);
        
        
		
    }

    public function edit($article_id)
	{
        $data = array(
            			'judul_article' => $this->request->getPost('judul'),
                        'article_writer' => $this->request->getPost('writer'),
                        'article_text' => $this->request->getPost('tulisan'),
            		);
        $this->articleModel->updateData($data, $article_id);
        $data['article'] = $this->articleModel->getArticle($article_id);
        return view('article',$data);
        
        
		
    }

	//--------------------------------------------------------------------

}