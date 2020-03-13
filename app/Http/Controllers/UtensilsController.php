<?php

namespace App\Http\Controllers;

use App\Utensil;
use App\UtensilCategory;
use Illuminate\Http\Request;

class UtensilsController extends Controller
{
    public function index()
    {
        $utensils = Utensil::all();
        return view('utensils.index', compact('utensils'));
    }

    public function create()
    {
        $categories = UtensilCategory::all();
        return view('utensils.create', compact('categories'));
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'unit' => 'required',
            'quantity' => 'required',
            'utensil_category_id' => 'required',
        ]);
        Utensil::create(request()->only([
            'name', 'unit', 'quantity', 'utensil_category_id'
        ]));

        return redirect('/utensils');
    }
}
