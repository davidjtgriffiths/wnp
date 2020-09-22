<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Elector extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pd_e',
        'ElectorNumberPrefix',
        'ElectorNumber',
        'ElectorNumberSuffix',
        'ElectorMarkers',
        'ElectorDOB',
        'ElectorSurname',
        'ElectorForename',
        'PostCode',
        'Address1',
        'Address2',
        'Address3',
        'Address4',
        'Address5',
        'Address6',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'ElectorDOB',
    ];

    public function electordata()
    {
        return $this->belongsTo('App\Electordata');
    }
}
