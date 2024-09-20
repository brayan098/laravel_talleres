<?php

namespace App\Http\Controllers;

use App\Models\Producto;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function vista1()
    {
        return view('prueba.vista1');
    }
    public function vista2()
    {
        return view('prueba.vista2');
    }
    public function nosotros()
    {
        return view('prueba.nosotros');
    }
    public function mostar_calculadora()
    {
        return view('prueba.calculadora');
    }
    public function calcular(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');
        $resultado = null;

        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    print('Error: no se puede dividir por 0');
                }

                break;

            default:
                print('Operacion no valida');
                break;
        }
        return view('prueba.calculadora', compact('resultado'));
    }
    public function create()
    {
        return view('producto.create');
    }
    public function store(Request $request)
    {
        $validado = $request->validate([
            'nombre' => 'required|string|min:1|max:30',
            'descripcion' => 'required|string|min:1|max:255',
            'presentacion' => 'required|string|min:1|max:30',
            'pais_origen' => 'required|string|min:1|max:30',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',

        ]);
        $producto = Producto::create([
            'nombre' => $validado['nombre'],
            'descripcion' => $validado['descripcion'],
            'presentacion' => $validado['presentacion'],
            'pais_origen' => $validado['pais_origen'],
            'precio' => $validado['precio'],
            'stock' => $validado['stock'],

        ]);
        //return redirect()->route('producto.create')->with('success','Producto guardado con éxito');
        return redirect()->back()->with('success', 'Producto guardado con éxito');
    }
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', ['productos' => $productos]);
    }
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    // Actualizar el producto
    public function update(Request $request, $id)
    {
        $validado = $request->validate([
            'nombre' => 'required|string|min:1|max:30',
            'descripcion' => 'required|string|min:1|max:255',
            'presentacion' => 'required|string|min:1|max:30',
            'pais_origen' => 'required|string|min:1|max:30',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($validado);

        return redirect()->route('producto.index')->with('success', 'Producto actualizado con éxito');
    }
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado con éxito');
    }
}
