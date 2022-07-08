<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class KomentarModel extends Model{
        protected $table = 'komentar';
        protected $primarykey = 'id';
        protected $allowedFields = ['tanggal','isi','users_id','wisata_id','nilai_rating_id'];

        public function getKomen($id){
            $sql = "SELECT * FROM komentar WHERE wisata_id='$id'";
            $query =  $this->db->query($sql)->getResultArray();
            return $query;
        }

        public function PilihKomen($komenid){
            $query = $this->getWhere(['id' => $komenid]);
            return $query;
            // var_dump($query);
        }

        public function SimpanKomen($data){
            $query = $this->db->table($this->table)->insert($data);
            return $query;
            // var_dump($query);
        }

        public function HapusKomen($id){
            $query = $this->db->table($this->table)->delete(array('id'=>$id));
            return $query;
        }

        public function HapusKomenPost($id){
            $query = $this->db->table($this->table)->delete(array('wisata_id'=>$id));
            return $query;
        }
    }