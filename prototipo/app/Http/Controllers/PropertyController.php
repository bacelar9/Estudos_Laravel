<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");
        return view('property.index')->with('properties', $properties);
    }

    public function show($name)
    {
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

        if (!empty($property)) {
            return view('property.show')->with('property', $property);
        } else {
            return redirect()->action('PropertyController@index');
        }
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        $propertySlug = $this->setName($request->title);
        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->rental_price,
            $request->sale_price
        ];

        DB::insert("INSERT INTO properties (title, name, description, rental_price, sale_price)VALUES(
            ?,?,?,?,?)", $property);

        return redirect()->action('PropertyController@index');
    }

    public function edit($name)
    {

        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

        if (!empty($property)) {
            return view('property.edit')->with('property', $property);
        } else {
            return redirect()->action('PropertyController@index');
        }
    }

    public function update(Request $request, $name)
    {
        $propertySlug = $this->setName($request->title);
        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->rental_price,
            $request->sale_price,
            $name
        ];

        DB::update("UPDATE properties SET title = ?, name = ?, description = ?, rental_price = ?, sale_price = ? WHERE name = ?", $property);
        return redirect()->action('PropertyController@index');
    }

    public function destroy($name)
    {
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

        if (!empty($property)) {
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }
        return redirect()->action('PropertyController@index');
    }

    private function setName($title)
    {
        /**Não permitir duplicidade de URL */
        $propertySlug = str_slug($title); //converter caracteres
        $properties = DB::select("SELECT * FROM properties");

        $repeated = 0;
        foreach ($properties as $property) {
            if (str_slug($title) === $propertySlug) {
                $repeated++;
            }
        }
        if ($repeated > 1) {
            $propertySlug = $propertySlug . "-" . $repeated;
        }
        return $propertySlug;
    }
}
