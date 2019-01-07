<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class blacklist extends Model
{
  protected $table = 'vdr_blacklist';
  protected $primarykey = 'id_vdr';
  protected $fillable = ['Vendor','Reason','Start','End','Evidence','Status'];
  public $timestamps = false;
  
}