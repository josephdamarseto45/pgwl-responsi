<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Polygons extends Model
{
    use HasFactory;
    protected $table = 'ADMINISTRASIKECAMATAN_AR_25K';


    protected $guarded = ['id'];


    public function polygons()
    {
        return $this->select(DB::raw('id, namobj, description, ST_AsGeoJSON (geom) as geom, created_at, updated_at, image, remark'))->get();
    }
    public function polygon($id)
    {
        return $this->select(DB::raw('id, namobj, description, ST_AsGeoJSON (geom) as geom, created_at, updated_at, image, remark'))->where('id', $id)->get();
    }
}
