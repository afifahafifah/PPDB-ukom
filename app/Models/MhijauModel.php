<?php namespace App\Models;

use CodeIgniter\Model;

class MhijauModel extends Model
{
    protected $table = 'mhijau';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama','lahir','jenis','nohp',
        'agama','alamat','nisn', 'mtk', 'bing','status','gambar','created_by',
        'created_date','updated_by'
    ];
    protected $returnType = 'App\Entities\Mhijau';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('mhijau');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('mhijau')->like('nama', $keyword);
    }
}