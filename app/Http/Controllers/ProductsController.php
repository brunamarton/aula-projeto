<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function index() {
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        //
    }

    public function show(Products $products) {
        return view('products.show');
    }

    public function edit(Products $products) {
        //
    }

    public function update(Request $request, Products $products) {
        return view('products.update');
    }

    public function destroy(Products $products) {
        return view('products.delete');
    }
}
