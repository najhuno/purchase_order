<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
  protected $table = 'ctl_category';
  protected $primarykey = 'id_category';
  protected $fillable = ['Nama_category'];
  public $timestamps = false;
  
}