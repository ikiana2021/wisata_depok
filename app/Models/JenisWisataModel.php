<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class JenisWisataModel extends Model{
        protected $table = 'jenis_wisata';
        protected $primaryKey = 'id';
        protected $allowedFields = 'nama';

        public function getAll(){
            
            return $this->findAll();
        }

        public function PilihJenisWisata($id){
            $query = $this->getWhere(['id' => $id]);
            return $query;
        }

        public function SimpanJenisWisata($data){
            $query = $this->db->table($this->table)->insert($data);
            return $query;
        }

        public function EditJenisWisata($id,$data){
            $query = $this->db->table($this->table)->update($data, array('id'=>$id));
            return $query;
        }

        public function HapusJenisWisata($id){
            $query = $this->db->table($this->table)->delete(array('id'=>$id));
            return $query;
        }
    }