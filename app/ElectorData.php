<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElectorData extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pd_e',
        'elector_id'
        'Do_Not_Contact',
        'Do_Not_Process',
        'PDCode',
        'E_Number',
        'Forename',
        'Surname',
        'Housename',
        'Address1',
        'StreetArea',
        'Town',
        'County',
        'Postcode',
        'Telephone',
        'Email',
        'Mobile',
        'Gender',
        'Constitutional_Preference',
        'Strength_of_Support',
        'Party_LPC',
        'Consider_Plaid',
        'ByElection_Vote19',
        'Vote19',
        'ByElection_Vote18',
        'Vote18',
        'byelection_Vote17',
        'westminster_Vote17',
        'Vote17',
        'byelection_Vote16',
        'Vote16',
        'EURef_Vote16',
        'byelection_Vote15',
        'Vote15',
        'ByElection_Vote14',
        'Vote14',
        'ByElection_Vote13',
        'Vote13',
        'ByElection_Vote12',
        'Vote12',
        'Vote11',
        'Vote_11',
        'Referendum11',
        'Declaration_Signed',
        'Voted_in_ByElection_2019',
        'Voted_in_2019',
        'Voted_in_ByElection_2018',
        'Voted_in_2018',
        'Voted_in_byelection_2017',
        'Voted_in_westminster_2017',
        'Voted_in_2017',
        'Voted_in_byelection_2016',
        'Voted_in_2016',
        'Voted_in_EURef_2016',
        'Voted_in_byelection_2015',
        'Voted_in_2015',
        'Voted_in_ByElection_2014',
        'Voted_in_2014',
        'Voted_In_ByElection_2013',
        'Voted_in_2013',
        'Voted_in_ByElection_2012',
        'Voted_in_2012',
        'Voted_in_2011',
        'Voted_in_2010',
        'Voted_in_Ref_2011',
        'Attainer_DOB',
        'Interests_Held',
        'Occupation',
        'Welsh_Speaker',
        'Postal_Vote',
        'Comments',
        'Entitlement',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function elector()
    {
        return $this->hasOne('App\Elector');
    }
}
