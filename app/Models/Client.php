<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model{
  use HasFactory;

  protected $guarded = [];
  protected $table = "Client";
  protected $primarykey = "id";
  protected $fillable=[
    "name",
    "last_name",
    "email",
    "phone",
    "address"
  ];
  public $timestamps=false;
}
