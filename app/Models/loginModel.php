<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    protected $table      = "login";
    protected $primaryKey = "id";
    protected $allowedFields = ["id", "username", "password", "hak_akses", ];
}
