<?php
    namespace App\Controllers;
    use App\Models\JenisWisataModel;

    class JenisWisata extends BaseController{
        public function __construct(){
            $this->session = \Config\Services::session();;
        }

        public function index(){
            if (!$this->session->has('LogginNow')) {
                return redirect()->to('/auth/login');
            }
            $jeniswisata = new JenisWisataModel();
            if(!$this->validate([])){
                $data['validation'] = $this->validator;
                $data['jeniswisata'] = $jeniswisata->getAll();
            }
            
            return view('admins/jeniswisata/index',$data);
        }

        public function SaveDataWisata(){
            $jenis = new JenisWisataModel();
            // if(!$this->request->getMethod() !== 'post'){
            //     return redirect()->to(base_url('/jenisfaskes'));
            // }
                $data = array(
                    'nama'  => $this->request->getPost('nama'),
                );
            $jenis->SimpanJenisWisata($data);
            return redirect()->to('/jeniswisata')->with('berhasil', 'Data Wisata berhasil di tambahkan');
        }

        public function EditJenisWisata($id){
            $jeniswisata = new JenisWisataModel();
            $data['jeniswisata'] = $jeniswisata->PilihJenisWisata($id)->getRow();
            return view('admins/jeniswisata/edit',$data);
        }

        public function EditJenisWisataProses(){
            $jeniswisata = new JenisWisataModel();
            if ($this->request->getMethod() !== 'post') {
                return redirect()->to(base_url('/jeniswisata/addjeniswisata'));
            }
            $id = $this->request->getPost('id');
            $data = array(
                'nama'  => $this->request->getPost('nama')
            );
            $jeniswisata->EditJenisWisata($id,$data);
            return redirect()->to('/jeniswisata')->with('berhasil', 'Data Wisata Berhasil di Ubah');
            
        }

        public function HapusJenisWisata($id){
            $jenis = new JenisWisataModel();
            $dt = $jenis->PilihJenisWisata($id)->getRow();
            $jenis->HapusJenisWisata($id);
            return redirect()->to('/jeniswisata')->with('menghapus', 'Data Berhasil di Hapus');
        }
    }