<?php namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model 
{
    protected $table = 'accounts';
    protected $allowed = [
        'name',
        'nim',
        'university',
        'whatsapp',
        'email',
        'password',
    ];
}