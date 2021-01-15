<?php namespace App\Models;

use CodeIgniter\Model;

class KopiModel extends Model
{
    protected $table = 'kopi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama','harga','stok','gambar','created_by',
        'created_date','updated_by','updated_date'
    ];
    protected $returnType = 'App\Entities\Kopi';
    protected $useTimestamps = false;
}