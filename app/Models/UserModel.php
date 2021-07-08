<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $allowedFields = ["email", "password", "full_name", "nim", "university", "whatsapp_num"];
    protected $useTimestamps = true;
}
