<?php
    namespace App\Controllers;
    use App\Models\WisataModel;
    use App\Models\JenisWisataModel;
    use App\Models\KecamatanModel;
    use App\Models\KomentarModel;

    class DataWisata extends BaseController{
        public function __construct(){
            $this->session = \Config\Services::session();;
        }

        public function index(){
            if (!$this->session->has('LogginNow')) {
                return redirect()->to('/auth/login');
            }
            $wisata = new WisataModel();
            if(!$this->validate([])){
                $data['validation'] = $this->validator;
                $data['wisata'] = $wisata->getAll();
            }
            
            return view('admins/wisata/index',$data);
        }

        public function AddDataWisata(){
            $jenis_wisata = new JenisWisataModel();
            $kecamatan = new KecamatanModel();
            if(!$this->validate([])){
                $data['validation'] = $this->validator;
                $data['jenis'] = $jenis_wisata->getAll();
                $data['kecamatan'] = $kecamatan->getAll();
            }
            return view('admins/wisata/tambah',$data);
        }

        public function SaveDataWisata(){
            $wisata = new WisataModel();
            // if(!$this->request->getMethod() !== 'post'){
            //     return redirect()->to(base_url('/datawisata/adddatawisata'));
            // }
            $validation = $this->validate([
                'foto1' => 'mime_in[foto1,image/jpg,image/jpeg,image/gif,image/png]',
                'foto2' => 'mime_in[foto2,image/jpg,image/jpeg,image/gif,image/png]',
                'foto3' => 'mime_in[foto3,image/jpg,image/jpeg,image/gif,image/png]'
            ]);
            if ($validation == FALSE) {
                $data = array(
                    'nama'  => $this->request->getPost('nama'),
                    'alamat' => $this->request->getPost('alamat'),
                    'latlong' => $this->request->getPost('latlong'),
                    'jenis_id' => $this->request->getPost('jenis_id'),
                    'harga_tiket' => $this->request->getPost('harga_tiket'),
                    'skor_rating' => $this->request->getPost('skor_rating'),
                    'kecamatan_id' => $this->request->getPost('kecamatan_id'),
                    'website' => $this->request->getPost('website'),
                    'fasilitas' => $this->request->getPost('fasilitas'),
                );
            } else {
                $foto1 = $this->request->getFile('foto1');
                $foto1->move(WRITEPATH . '../public/images/datawisata');
                $foto2 = $this->request->getFile('foto2');
                $foto2->move(WRITEPATH . '../public/images/datawisata');
                $foto3 = $this->request->getFile('foto3');
                $foto3->move(WRITEPATH . '../public/images/datawisata');
                $data = array(
                    'nama'  => $this->request->getPost('nama'),
                    'alamat' => $this->request->getPost('alamat'),
                    'latlong' => $this->request->getPost('latlong'),
                    'jenis_id' => $this->request->getPost('jenis_id'),
                    'harga_tiket' => $this->request->getPost('harga_tiket'),
                    'skor_rating' => $this->request->getPost('skor_rating'),
                    'kecamatan_id' => $this->request->getPost('kecamatan_id'),
                    'website' => $this->request->getPost('website'),
                    'fasilitas' => $this->request->getPost('fasilitas'),
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName()
                );
            }
            $wisata->SimpanWisata($data);
            return redirect()->to('/datawisata')->with('berhasil', 'Data Wisata berhasil di tambahkan');
        }

        public function EditDataWisata($id){
            $wisata = new WisataModel();
            $jenis = new JenisWisataModel();
            $kecamatan = new KecamatanModel();
            $data['wisata'] = $wisata->PilihWisata($id);
            $data['jenis'] = $jenis->getAll();
            $data['kecamatan'] = $kecamatan->getAll();
            return view('admins/wisata/edit',$data);
        }

        public function EditDataWisataProses(){
            $wisata = new WisataModel();
            // if ($this->request->getMethod() !== 'post') {
            //     return redirect()->to(base_url('/datawisata/adddatawisata'));
            // }
            $id = $this->request->getPost('id');
            $validation = $this->validate([
                'foto1' => 'mime_in[foto1,image/jpg,image/jpeg,image/gif,image/png]',
                'foto2' => 'mime_in[foto2,image/jpg,image/jpeg,image/gif,image/png]',
                'foto3' => 'mime_in[foto3,image/jpg,image/jpeg,image/gif,image/png]'    
            ]);
     
            if ($validation == FALSE) {
            $data = array(
                'nama'  => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'latlong' => $this->request->getPost('latlong'),
                'jenis_id' => $this->request->getPost('jenis_id'),
                'harga_tiket' => $this->request->getPost('harga_tiket'),
                'skor_rating' => $this->request->getPost('skor_rating'),
                'kecamatan_id' => $this->request->getPost('kecamatan_id'),
                'website' => $this->request->getPost('website'),
                'fasilitas' => $this->request->getPost('fasilitas')
            );
            } else {
            $dt = $wisata->PilihWisata($id);
            $gambar1 = $dt->foto1;
            $gambar2 = $dt->foto2;
            $gambar3 = $dt->foto3;
            $path = '../public/images/datawisata/';
            @unlink($path.$gambar1);
            @unlink($path.$gambar2);
            @unlink($path.$gambar3);
                $foto1 = $this->request->getFile('foto1');
                $foto1->move(WRITEPATH . '../public/images/datawisata');
                $foto2 = $this->request->getFile('foto2');
                $foto2->move(WRITEPATH . '../public/images/datawisata');
                $foto3 = $this->request->getFile('foto3');
                $foto3->move(WRITEPATH . '../public/images/datawisata');
            $data = array(
                'nama'  => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'latlong' => $this->request->getPost('latlong'),
                'jenis_id' => $this->request->getPost('jenis_id'),
                'harga_tiket' => $this->request->getPost('harga_tiket'),
                'skor_rating' => $this->request->getPost('skor_rating'),
                'kecamatan_id' => $this->request->getPost('kecamatan_id'),
                'website' => $this->request->getPost('website'),
                'fasilitas' => $this->request->getPost('fasilitas'),
                'foto1' => $foto1->getName(),
                'foto2' => $foto2->getName(),
                'foto3' => $foto3->getName()
            );
            }
            $wisata->EditWisata($id,$data);
            return redirect()->to('/datawisata')->with('berhasil', 'Data Wisata Berhasil di Ubah');
            
        }

        public function HapusDataWisata($id){
            $wisata = new WisataModel();
            $komen = new KomentarModel();
            $dt = $wisata->PilihWisata($id);
            $komen->HapusKomenPost($id);
            $wisata->HapusWisata($id);
            $gambar1 = $dt->foto1;
            $gambar2 = $dt->foto2;
            $gambar3 = $dt->foto3;
            $path = '../public/assets/images/';
                @unlink($path.$gambar1);
                @unlink($path.$gambar2);
                @unlink($path.$gambar3);
            return redirect()->to('/datawisata')->with('menghapus', 'Data Berhasil di Hapus');
        }
    }