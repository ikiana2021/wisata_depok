<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UsersModel extends Model{
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $allowedFields = ['username','email','password','created_at','last_login','status','role'];
        
        public function getAll(){
            
            $query = $this->findAll();
            return $query;

            // var_dump($query);
        }
    }