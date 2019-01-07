<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class group extends Model
{
  protected $table = 'group';
  protected $primarykey = 'id';
  protected $fillable = ['nama_group','des_group'];
  public $timestamps = false;
  
}