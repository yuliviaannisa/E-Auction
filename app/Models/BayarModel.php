<?php namespace App\Models;

use CodeIgniter\Model;

class BayarModel extends Model
{
    protected $table = 'bayar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_barang','nama_pemesan','bayar_via','an_rekeningtrxr','tgl_trx','jam_trx',
        'bukti','created_date','updated_by','updated_date'
    ];
    protected $returnType = 'App\Entities\Kopi';
    protected $useTimestamps = false;
}