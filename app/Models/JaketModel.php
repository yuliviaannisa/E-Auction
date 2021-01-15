<?php namespace App\Models;

use CodeIgniter\Model;

class JaketModel extends Model
{
    protected $table = 'jaket';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama','harga','stok','gambar','created_by',
        'created_date','updated_by','updated_date'
    ];
    protected $returnType = 'App\Entities\Jaket';
    protected $useTimestamps = false;
}