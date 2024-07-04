<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();
        return view('dashboard.article.index',['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('dashboard.Article.create',['caregory'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article= new Article();
        $article->code=$request->input('code');
        $article->name=$request->input('name');
        $article->sale_price=$request->input('sale_price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->idCategory=$request->input('caregory');
        $article->save();
        return view('dashboard.article.messege',['msg'=>'Articulo actualizado con Exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article= Article::find($id);
        return view('dashboard.article.edit',['article'=>$article,'category'=>$category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article= Article::find();
        $article->code=$request->input('code');
        $article->name=$request->input('nane');
        $article->sale_price=$request->input('sale_price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->idCategory=$request->input('category');
        $article->save();
        return view('dashboard.article.messege',['msg'=>'Articulo actualizado con Exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article= Aericle::find();
        $article->delete();
        return redirect("dashboard/article");
    }
}
