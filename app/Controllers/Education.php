<?php

namespace App\Controllers;

use App\Models\EducationModel;

class Education extends BaseController
{
    protected $educationModel;
    public function __construct() {
        $this->educationModel = new EducationModel();
    }

    public function index(): string
    {
        $education = $this->educationModel->findAll();

        $data = [
            'title' =>  'education',
            'education' => $education,
        ];

        return view('web/education/index', $data);
    }

    public function add(): string
    {
        return view('web/education/add');
    }

    public function detail($id): string
    {
        $education = $this->educationModel->where(['id' => $id])->first();
        
        $data = [
            'title' =>  'Education',
            'education' => $education,
        ];
        
        return view('web/education/detail', $data);
    }

    public function save() {
        $this->educationModel->save([
            'level' => $this->request->getVar('level'),
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description')
        ]);

        return redirect()->to('/web/education');
    }

    public function edit($id) {
        $this->educationModel->save([
            'id' => $id,
            'level' => $this->request->getVar('level'),
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description')
        ]);
        
        session()->setFlashData('pesan', "Pendidikan berhasil diubah");
        return redirect()->to('/web/education');
    }

    public function delete($id) {
        $this->educationModel->delete($id);
        return redirect()->to('/web/education');
    }
}
