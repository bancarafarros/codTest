<?php

namespace App\Models;

use CodeIgniter\Model;

class MStart extends Model
{
    protected $table = 'identitas';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['name', 'age', 'city'];
}

?>