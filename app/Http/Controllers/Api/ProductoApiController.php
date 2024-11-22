<?php

namespace App\Http\Controllers\Api;
use App\models\producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    /**
     * Captura
     */
    {
        $productos = producto::all ();
        return response()->json($productos,);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    /**
     * Captura
     */
    {
        $producto = Producto::create( [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price

        ]);
        return response()->json(
            $producto
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json(
            $producto
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::where('id', $id)->delete();
        return response()->json(
            $producto
        );

    }
}
