<?php

namespace App\Controllers;
use App\Models\modelbarang;

class Data extends BaseController
{
    function __construct() {
        $this->model = new modelbarang();
    }
    public function listdata()
    {
        $data['models'] =$this->model->findAll();
        return view('databarang',$data);
    }
    public function halamantambah()
    {
        return view('tambahdata');
    }
    public function hapus($id=null)
    {
        $this->model->where('id_barang' ,$id)->delete();
        return redirect()->to(site_url('list'));
    }
    public function update($id=null)
    {

        $validation = $this->validate([
            'gambarbaru' => [
                'uploaded[gambarbaru]',
                'mime_in[gambarbaru,image/jpg,image/jpeg,image/png]'
            ]
        ]);
 
        if ($validation == FALSE) {
            $data =[
                "namabarang"=>$this->request->getPost('namabarang'),
                "deskripsi"=>$this->request->getPost('deskripsi'),
                "harga"=>$this->request->getPost('harga'),
                "stok"=>$this->request->getPost('stok'),
                "gambar"=>$this->request->getPost('gambar'),
            ] ;
        }
        else {
            $upload = $this->request->getFile('gambarbaru');
            $upload->move('assets/img');

            $namagambar = $upload->getName();

            $data =[
                "namabarang"=>$this->request->getPost('namabarang'),
                "deskripsi"=>$this->request->getPost('deskripsi'),
                "harga"=>$this->request->getPost('harga'),
                "stok"=>$this->request->getPost('stok'),
                "gambar"=>$namagambar,
            ] ;
        }
        $this->model->update($id, $data);
        return redirect()->to('list');
    }

    public function halamanupdate($id=null)
    {
        $data['models'] =$this->model->where('id_barang' ,$id)->first();
        return view('halamanupdate',$data);      
    }
    public function tambah()
    {
        $filegambar =$this->request->getFIle('gambar');
        $filegambar->move('assets/img');
        $namagambar = $filegambar->getName();

        $data =[
            "namabarang"=>$this->request->getPost('namabarang'),
            "deskripsi"=>$this->request->getPost('deskripsi'),
            "harga"=>$this->request->getPost('harga'),
            "stok"=>$this->request->getPost('stok'),
            "gambar"=>$namagambar,
        ] ;
        $this->model->insert($data);
        return redirect()->to(site_url('/'));
    }
}
