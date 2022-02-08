<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Get the full name
     *
     * @return string
     */
    public function getStageName() {
        return $this->stage_name;
    }

    public function getBirthName() {
        return $this->irl_name;
    }

}