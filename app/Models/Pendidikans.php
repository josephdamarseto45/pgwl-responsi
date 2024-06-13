<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pendidikans extends Model
{
    use HasFactory;
    protected $table = 'table_PendidikanJakartaSelatanfix';


    protected $guarded = ['id'];


    public function admins()
    {
        return $this->select(DB::raw('id, geom, remark'))->get();
    }
    public function admin($id)
    {
        return $this->select(DB::raw('id, geom, remark'))->where('id', $id)->get();
    }
}
