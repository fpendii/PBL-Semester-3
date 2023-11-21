<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\ArtikelModel;

class ManajementArtikel extends BaseController
{
    protected $DataAlamat;
    protected $DataArtikel;

    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
        $this->DataArtikel = new ArtikelModel();
    }

    public function MajanementArtikel()
    {
        $alamat = $this->DataAlamat->findAll();
        $artikel = $this->DataArtikel->orderBy('id_artikel', 'DESC')->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'artikel' => $artikel
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementArtikel", $data);
        echo view('layout/footer');
    }

    public function detailArtikel($id){
        $artikel = $this->DataArtikel->getArtikel($id);
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Artikel PPKS Politala',
            'artikel' => $artikel,
            "alamat" => $alamat
        ];
        
        echo view('layout/header-admin', $data);
        echo view("pages/User/detailArtikel", $data);
        echo view('layout/footer');
    }

    public function TambahArtikel(){
        $data = [
            'judul' => 'Form Tambah Artikel'
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/form/tambahArtikel");
    }

    public function SimpanArtikel(){

        $this->DataArtikel->save([
            'judul' => $this->request->getVar('judul'),
            'isi_artikel' => $this->request->getVar('artikel'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');

        return redirect()->to('/manajement artikel');
    }

    // public function uploadGambar(){
    //     if($this->request->getFile('file')){
    //         $dataFile = $this->request->getFile('file');
    //         $fileName = $dataFile->getRandomName();
    //         $dataFile->move("/img/", $fileName);
    //         echo base_url("/img/$fileName");
    //     }
    // }
}
