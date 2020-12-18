<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use function MongoDB\BSON\toJSON;

class NoticiasController extends Controller
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
        $noticias = Noticia::all();
        return View('noticias.index',[
            'noticias'  =>$noticias
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia= new Noticia();
        return View('noticias.save',[
            'noticia'   =>$noticia
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
        $noticia = new Noticia();
        $noticia->titulo=$request->titulo;
        $noticia->texto=$request->texto;
        $noticia->categoria_id=$request->categoria_id;
        $noticia->save();
        return Redirect::to('noticias')->with('notice', 'Se ha creado la noticia correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return View('noticias.show',[
            'noticia'   =>$noticia
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
        $noticia = Noticia::find($id);
        return View('noticias.save',[
            'noticia'=>$noticia
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
        $noticia = Noticia::find($id);
        $noticia->titulo =$request->titulo;
        $noticia->texto = $request->texto;
        $noticia->categoria_id = $request->categoria_id;
        $noticia->save();
        return Redirect::to('noticias')->with('notice', 'La noticia ha sido modificada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return Redirect::to('noticias')->with('notice', 'La noticia ha sido eliminada correctamente.');
    }
    public function subirArchivo(Request $request)
    {
        $file = $request->file('archivo');
        $nombre=$file->getClientOriginalName();
        //$file->storeAs('public',$nombre);
        $file->move(public_path().'/imagenes/',$nombre);
        return Redirect::to('noticias');
    }
    public function mostrarNoticiaCompleta($id){
        $noticia=Noticia::find($id);
        $categoria=$noticia->getCategoria()->first();
        return $categoria;
    }
    public function mostarCategoriasNoticia($id){
        $categoria=Categoria::find($id);
        $noticias=$categoria->getNoticias()->get();
        return $noticias;
    }

}
