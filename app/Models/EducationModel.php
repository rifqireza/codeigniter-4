<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table = 'education';
    protected $useTimeStamps = true;
    protected $allowedFields = ['name', 'level', 'description'];
}