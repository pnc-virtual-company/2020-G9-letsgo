<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'categorys';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name'];
    protected $validationRules    = [
        'name'        => 'required|is_unique[categorys.name]',
    ];

}