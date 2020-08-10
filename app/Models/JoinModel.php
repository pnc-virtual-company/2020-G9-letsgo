<?php namespace App\Models;

use CodeIgniter\Model;

    class JoinModel extends Model
    {
        protected $table      = 'joins';
        protected $primaryKey = 'join_id';
        protected $returnType     = 'array';
        protected $allowedFields = ['user_id','event_id'];
        public function getJoin() 
        {
            return $this->db->table('joins')->get()->getResultArray();
        }

    }
