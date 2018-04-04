<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use sistemaLaravel2\Duplicata;
use Illuminate\Support\Facedes\Redirect; 
use sistemaLaravel2\Http\requests\DuplicataFormRequest;
use dbsistemalaravel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
