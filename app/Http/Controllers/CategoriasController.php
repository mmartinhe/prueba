<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use function MongoDB\BSON\toJSON;

class CategoriasController extends Controller
{
    public function __contruct(){
       // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return View('categorias.index',[
            'categorias'  =>$categorias
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria= new Categoria();
        return View('categorias.save',[
            'categoria'   =>$categoria
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->titulo=$request->titulo;
        $categoria->descripcion=$request->descripcion;
        $categoria->save();
        return Redirect::to('categorias')->with('categoria', 'Se ha creado la noticia correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return View('categoria.show',[
            'categoria'   =>$categoria
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return View('categorias.save',[
            'categoria'=>$categoria
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->titulo =$request->titulo;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return Redirect::to('categorias')->with('notice', 'La categoria ha sido modificada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return Redirect::to('categorias')->with('notice', 'La categoria ha sido eliminada correctamente.');
    }

}
