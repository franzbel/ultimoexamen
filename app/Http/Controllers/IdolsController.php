<?php

namespace App\Http\Controllers;

use App\Idol;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IdolsController extends Controller
{

    public function store(Request $request)
    {
        $idolo = new Idol($request->all());
        $idolo->save();
        return (redirect()->back());
    }
}
