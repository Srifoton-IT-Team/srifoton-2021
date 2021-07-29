<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $allowedFields = ["email", "password", "full_name", "nim", "university", "whatsapp_num", "image_cp", "image_uiux", "image_photo", "valid_cp", "valid_uiux", "valid_photography"];
    protected $useTimestamps = true;
}
