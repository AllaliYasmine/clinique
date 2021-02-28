<?php

namespace App;
use illuminate\database\Eloquent\model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class utilisateur extends model implements Authenticatable {

   use BasicAuthenticatable;

}