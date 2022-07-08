<?php
    namespace App\Controllers;
    use App\Models\KecamatanModel;

    class DataKecamatan extends BaseController{
        public function __construct(){
            $this->session = \Config\Services::session();;
        }

        public function index(){
            if (!$this->session->has('LogginNow')) {
                return redirect()->to('/auth/login');
            }
            $kecamatan = new KecamatanModel();
            if(!$this->validate([])){
                $data['validation'] = $this->validator;
                $data['kecamatan'] = $kecamatan->getAll();
            }
            
            return view('admins/kecamatan/index',$data);
        }

        public function SaveDataKecamatan(){
            $kecamatan = new KecamatanModel();
            $data = array(
                'nama'  => $this->request->getPost('nama'),
            );
            $kecamatan->SimpanDataKecamatan($data);
            return redirect()->to('/datakecamatan')->with('berhasil', 'Data Kecamatan berhasil di tambahkan');
        }

        public function EditDataKecamatan($id){
            $kecamatan = new KecamatanModel();
            $data['kecamatan'] = $kecamatan->PilihDataKecamatan($id)->getRow();
            return view('admins/kecamatan/edit',$data);
        }

        public function EditDataKecamatanProses(){
            $kecamatan = new KecamatanModel();
            if ($this->request->getMethod() !== 'post') {
                return redirect()->to(base_url('/datakecamatan/adddatakecamatan'));
            }
            $id = $this->request->getPost('id');
            $data = array(
                'nama'  => $this->request->getPost('nama')
            );
            $kecamatan->EditDataKecamatan($id,$data);
            return redirect()->to('/datakecamatan')->with('berhasil', 'Data Kecamatan Berhasil di Ubah');
            
        }

        public function HapusDataKecamatan($id){
            $kecamatan = new KecamatanModel();
            $dt = $kecamatan->PilihDataKecamatan($id)->getRow();
            $kecamatan->HapusDataKecamatan($id);
            return redirect()->to('/datakecamatan')->with('menghapus', 'Data Berhasil di Hapus');
        }
    }