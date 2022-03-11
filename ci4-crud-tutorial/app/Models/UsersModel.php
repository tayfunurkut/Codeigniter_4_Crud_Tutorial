<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'customer';
    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone', 'designation', 'created_at'];

}