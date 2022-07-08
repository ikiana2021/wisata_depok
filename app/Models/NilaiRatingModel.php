<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class NilaiRatingModel extends Model{
        protected $table = 'nilai_rating';
        protected $primaryKey = 'id';
        protected $allowedFields = 'nama';
        
        public function getAll(){
            
            $query = $this->findAll();
            return $query;
        }
    }