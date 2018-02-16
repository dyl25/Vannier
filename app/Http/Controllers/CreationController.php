<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creation;

class CreationController extends Controller
{
    public function index() {
        $creations = Creation::latest('id')->paginate(9);

        return view('creation.index', compact('creations'));
    }

    public function show(Creation $creation) {
        return view('creation.show', compact('creation'));
    }
}
