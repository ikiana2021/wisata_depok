<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class KecamatanModel extends Model{
        protected $table = 'kecamatan';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nama'];

        public function getAll(){
            
            return $this->findAll();
        }

        public function PilihDataKecamatan($id){
            $query = $this->getWhere(['id' => $id]);
            return $query;
        }

        public function SimpanDataKecamatan($data){
            $query = $this->db->table($this->table)->insert($data);
            return $query;
        }

        public function EditDataKecamatan($id,$data){
            $query = $this->db->table($this->table)->update($data, array('id'=>$id));
            return $query;
        }

        public function HapusDataKecamatan($id){
            $query = $this->db->table($this->table)->delete(array('id'=>$id));
            return $query;
        }
    }