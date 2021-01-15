<?php namespace App\Models;

use CodeIgniter\Model;

class PantsModel extends Model
{
    protected $table = 'pants';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama','harga','stok','gambar','created_by',
        'created_date','updated_by','updated_date'
    ];
    protected $returnType = 'App\Entities\Pants';
    protected $useTimestamps = false;
}