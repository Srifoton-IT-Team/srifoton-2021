<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields = ["email", "password", "fullname", "nim_nisn", "universitas_sekolah", "nomor_telephone_whatsapp"];
    protected $useTimestamps = false;
}
