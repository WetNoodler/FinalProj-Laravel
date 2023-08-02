<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('act14.main')->with([
            'currentPage' => $request->currentPage
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function login(){
        return view('act14.login');
    }

    public function registration(){
        return view('act14.register');
    }

    public function cart(Request $request){
        return view('act14.cart')->with([
            'currentPage' => $request->currentPage
        ]);
    }

    public function review(){
        //
    }

    public function profile(Request $request){
        return view('act14.profile')->with([
            'currentPage' => $request->currentPage
        ]);
    }

    public function details(Request $request){
        return view('act14.detail')->with([
            'currentPage' => $request->currentPage
        ]);
    }
}
