<?php

    namespace App\Controllers;
    use App\Models\UsersModel;
    use App\Models\WisataModel;
    use App\Models\JenisWisataModel;
    use App\Models\KecamatanModel;
    use App\Models\KomentarModel;
    use App\Models\NilaiRatingModel;

    class Home extends BaseController
    {
        public function __construct(){
            $this->session = session();
        }
        public function index()
        {
            $wisata = new WisataModel();
            if(!$this->validate([])){
                $data['validation'] = $this->validator;
                $data['wisata'] = $wisata->setAll();
            }
            return view('home/index',$data);
        }

        public function Detail($id){
            $wisata = new WisataModel();
            $jenis = new JenisWisataModel();
            $kecamatan = new KecamatanModel();
            $komentar = new KomentarModel();
            $users = new UsersModel();
            $nilai = new NilaiRatingModel();
            $data['wisata'] = $wisata->PilihWisata($id);
            $data['jenis'] = $jenis->getAll();
            $data['kecamatan'] = $kecamatan->getAll();
            $data['komentar'] = $komentar->getKomen($id);
            $data['user'] = $users->getAll();
            $data['nilai'] = $nilai->getAll();
            return view('home/detail',$data);
        }

        public function KirimKomentar(){
            $komentar = new KomentarModel();
            $tanggal = $this->request->getPost('tanggal');
            $isi = $this->request->getPost('isi');
            $users_id = $this->request->getPost('users_id');
            $wisata_id = $this->request->getPost('wisata_id');
            $nilai_rating_id = $this->request->getPost('nilai_rating_id');
            $data = array(
                'tanggal'  => $tanggal,
                'isi' => $isi,
                'users_id' => $users_id,
                'wisata_id' => $wisata_id,
                'nilai_rating_id' => $nilai_rating_id
            );
            $komentar->SimpanKomen($data);
            return redirect()->to(base_url('home/detail/'.$wisata_id));
        }

        public function HapusKomentar($komenid){
            $komen = new KomentarModel();
            $dt = $komen->getKomen($komenid);
            $komen->HapusKomen($komenid);
            return redirect()->to(base_url());
        }
    }
