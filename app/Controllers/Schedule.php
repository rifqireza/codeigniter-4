<?php

namespace App\Controllers;

use App\Models\ScheduleModel;

class Schedule extends BaseController
{
    protected $scheduleModel;
    public function __construct() {
        $this->scheduleModel = new ScheduleModel();
    }

    public function index(): string
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' =>  'Schedule',
            'schedule' => $schedule,
        ];

        return view('web/schedule/index', $data);
    }

    public function detail($id): string
    {
        $schedule = $this->scheduleModel->where(['id' => $id]);
        
        $data = [
            'title' =>  'Schedule',
            'schedule' => $schedule,
        ];

        return view('web/schedule/detail', $data);
    }
}
