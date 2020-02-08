<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;

class SnippetsController extends Controller
{
    public function index() {
        $snippets = Snippet::all();

        return view('snippets.index', compact('snippets'));
    }

    public function store() {
        Snippet::create(request(['title', 'description']));
    }
}
