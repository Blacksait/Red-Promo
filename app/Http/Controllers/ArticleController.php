<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use function React\Promise\all;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::all();
        $favorites = false;

        if ($request->favorites == true){
            $articlesQuery = Article::query()->where('favorites','=',true);
        }else{
            $articlesQuery = Article::query();
        }

        if ($request->filled('name')) {//если наш запрос имеет name
            $articlesQuery->where('name', 'like', "%$request->name%");
        }

        if ($request->has('city')) {//если наш запрос имеет name
            $articlesQuery->whereHas('cities', function ($jobs) {//обращение к дочерней таблице
                $jobs->whereIn('name', [request()->city]);//выбор значений и вывод поста,связанный отношением, из дочерней таблицы
            });
        }

        $articles = $articlesQuery->get();

        return view('articles.index')->with('articles', $articles)->with('cities',$cities)->with('favorites',$favorites);
    }

    public function favorites(Request $request)//Только избранные записи
    {
        $articlesQuery = Article::query()
            ->where('favorites','=',true);

        $cities = City::all();
        $favorites = true;
        $articles = $articlesQuery->get();

        return view('articles.index')->with('articles', $articles)->with('cities',$cities)->with('favorites',$favorites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $similars = Article::all()
            ->where('tag','=',$article->tag)
            ->where('id','!=',$article->id)
            ->random(2);

        return view('articles.show')->with('article',$article)->with('similars',$similars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);

        if (!$user->articles()->find($id)){
            $user->articles()->attach($id);//приравниваем к артиклу
        }

        return redirect('/home')->with('success', 'articles был добавлен');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
