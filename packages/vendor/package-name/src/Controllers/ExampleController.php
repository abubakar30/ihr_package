<?php
namespace Vendor\PackageName\Controllers;

use Illuminate\Http\Request;
use Vendor\PackageName\Models\ExampleModel;

class ExampleController
{
    public function index()
    {
        return view('package::index', ['examples' => ExampleModel::all()]);
    }

    public function store(Request $request)
    {
        ExampleModel::create($request->all());
        return redirect()->back();
    }
}
