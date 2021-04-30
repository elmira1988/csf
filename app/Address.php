<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    public function fullAddress()
    {
        return $this->index.', '. $this->city.', '.$this->street.', '.$this->house;
    }
}
