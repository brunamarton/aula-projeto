<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller {
    public function index() {
        return view('primeiraView.index');
    }

    public function segundaView() {
        return view('segundaView.segunda');
    }
}
