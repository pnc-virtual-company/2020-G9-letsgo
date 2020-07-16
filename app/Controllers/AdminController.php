<?php namespace App\Controllers;
use App\Models\CategoryModel;
class AdminController extends BaseController
{

	public function showCategory()
	{
		$category = new CategoryModel();
		$data['categories'] = $category->findAll();
		return view('manages/category',$data);
	}

	// add addCategory
	public function addCategory()
	{
		helper(['form']);

		if($this->request->getMethod() == "post"){
			$category = new CategoryModel();
			$newCategory = [
				'name' => $this->request->getVar('name'),
			];
			$category ->save($newCategory);
			return redirect()->to('/category');
		}
		return view('manages/category');
	}

}