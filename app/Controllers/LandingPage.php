<?php

namespace App\Controllers;

use App\Models\educationModel;

class LandingPage extends BaseController
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

        return view('landing-page/index', $data);
    }
}
