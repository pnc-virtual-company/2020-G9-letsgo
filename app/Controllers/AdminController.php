<?php namespace App\Controllers;
use App\Models\CategoryModel;
class AdminController extends BaseController
{

	public function showCategory()
	{
		$model = new CategoryModel();
		$data['showCategory'] = $model->findAll();
		return view('manages/category',$data);
	}

	//  Insert new Category
	public function insert()
	{	
		helper(['form']);
		if($this->request->getMethod() == "post"){
			$model = new CategoryModel();
			$name = $this->request->getVar('name');
			$newData = ['name' => $name];

			$model->insert($newData);
			return redirect()->to('/category');
		}
	}
		//   Delete Category
	public function deleteCategory()
	{
		$model = new CategoryModel();
		$id = $this->request->getVar('delete_id');
		$model->delete($id);
		return redirect()->to('/category');
	}

	// Update Category
	public function updateCategory()
    {
		helper(['form']);
		if($this->request->getMethod() == "post"){
			$model = new CategoryModel();
			$id = $this->request->getVar('update_id');
			$data = [
				'name'=> $this->request->getVar('name'),
			];
				
			$model->update($id,$data);
			return redirect()->to('/category');
		}
	}

}