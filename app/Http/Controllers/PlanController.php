<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response([
            'message'=>'this is store method in budget controller'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plans=Plan::all();
        return response($plans);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response([
            'message'=>'this is update method in budget controller'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response([
            'message'=>'this is delete method in budget controller'
        ]);
    }
}
