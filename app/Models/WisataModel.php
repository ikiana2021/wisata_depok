<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class WisataModel extends Model{
        protected $table = 'tempat_wisata';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nama','alamat','latlong','jenis_id','skor_rating','harga_tiket','foto1','foto2','foto3','kecamatan_id','website','fasilitas'];

        public function getAll(){
            
            $sql = "SELECT tempat_wisata.nama as wisata_nama, tempat_wisata.id, tempat_wisata.alamat, tempat_wisata.fasilitas, kecamatan.nama as kecamatan_nama, jenis_wisata.nama as jenis_nama 
            FROM tempat_wisata 
            INNER JOIN kecamatan  ON kecamatan.id = tempat_wisata.kecamatan_id 
            INNER JOIN jenis_wisata ON tempat_wisata.jenis_id = jenis_wisata.id";
            
            $faskes =  $this->db->query($sql)->getResultArray();
            return $faskes;
        }

        public function setAll(){
            return $this->findAll();
        }

        public function PilihWisata($id){
            $query = $this->getWhere(['id' => $id])->getRow();
            return $query;
            // var_dump($query);
        }

        public function SimpanWisata($data){
            $query = $this->db->table($this->table)->insert($data);
            var_dump($query);
            return $query;
        }

        public function EditWisata($id,$data){
            $query = $this->db->table($this->table)->update($data, array('id'=>$id));
            return $query;
        }

        public function HapusWisata($id){
            $query = $this->db->table($this->table)->delete(array('id'=>$id));
            return $query;
        }
    }