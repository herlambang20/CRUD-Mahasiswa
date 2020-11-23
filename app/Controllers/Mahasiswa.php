<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;


class Mahasiswa extends BaseController
{

    protected $mahasiswaModel;


    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }


    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $mahasiswa

        ];



        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [];

        return view('mahasiswa/create', $data);
    }

    public function save()
    {
        $this->mahasiswaModel->insert([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'kota' => $this->request->getVar('kota'),
            'ttl' => $this->request->getVar('ttl'),
            'ortu' => $this->request->getVar('ortu'),
            'aortu' => $this->request->getVar('aortu'),
            'kodePos' => $this->request->getVar('kodePos'),
            'nomor' => $this->request->getVar('nomor'),
            'status' => $this->request->getVar('status')

        ]);

        return redirect()->to('/mahasiswa');
    }

    public function delete($nim)
    {

        $this->mahasiswaModel->delete($nim);
        return redirect()->to('/mahasiswa');
    }

    public function edit($nim)
    {


        $data = [
            'mahasiswa' =>  $this->mahasiswaModel->where(['nim' => $nim])->first()
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update()
    {
        $this->mahasiswaModel->save([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'kota' => $this->request->getVar('kota'),
            'ttl' => $this->request->getVar('ttl'),
            'ortu' => $this->request->getVar('ortu'),
            'aortu' => $this->request->getVar('aortu'),
            'kodePos' => $this->request->getVar('kodePos'),
            'nomor' => $this->request->getVar('nomor'),
            'status' => $this->request->getVar('status')

        ]);

        return redirect()->to('/mahasiswa');
    }
}
