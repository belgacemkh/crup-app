<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {   
        return view('welcome',[
            'countries' => DB::table('countries')
            ->orderBy('id','desc')
            ->get()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        DB::table('countries')->insert([
            'name' => $request->name
        ]);

        return redirect()
            ->route('country.index')
            ->with('success','Country creared');
    }

    public function edit($id)
    {
        $country = DB::table('countries')->find($id);

        return view('edit',['country' => $country]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        DB::table('countries')
                ->where('id',$id)
                ->update([
                    'name' => $request->name
                ]);

        return redirect()
            ->route('country.index')
            ->with('success','Country updated');
    }

    public function show($id)
    {
        $country = DB::table('countries')->find($id);

        return view('show',['country' => $country]);
    }

    public function destroy($id)
    {
        DB::table('countries')->where('id',$id)->delete();

        return redirect()
            ->route('country.index')
            ->with('success','Country deleted');
    }
}