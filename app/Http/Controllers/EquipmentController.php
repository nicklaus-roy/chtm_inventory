<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\EquipmentCategory;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
    	$equipments = Equipment::all();
    	return view('equipment.index', compact('equipments'));
    }

    public function create()
    {
    	$equipment_categories = EquipmentCategory::all();
    	return view('equipment.create', compact('equipment_categories'));
    }

    public function store()
    {
    	// validate the form
    	request()->validate([
    		'serial_number' => 'required',
    		'brand' => 'required',
    		'date_bought' => 'required',
    		'equipment_category_id' => 'required',
    	]);
    	// store the model
    	$equipment = Equipment::create(request()->only([
    		'serial_number', 'brand', 'date_bought', 'equipment_category_id'
    	]));
    	// redirect to equipment index
    	return redirect('/equipment');
    }
}
