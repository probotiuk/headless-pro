<?php

namespace Probotiuk\HeadlessPro\Http\Controllers;

use Illuminate\Http\Request;
use Probotiuk\HeadlessPro\Models\Collection;

class CollectionController extends Controller
{
    public function index() {
        $collections = Collection::all();

        return view('headless-pro::index', [
            'collections'   => $collections,
        ]);
    }
}
