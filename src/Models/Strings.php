<?php namespace Amamarul\LaravelJsonLocationsManager\Models;

use Illuminate\Database\Eloquent\Model;

class Strings extends Model
{
    protected $connection = 'locations';
    protected $table = 'strings';
    protected $primaryKey = 'code';

    protected $guarded = [];
}
