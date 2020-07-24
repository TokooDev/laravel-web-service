<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributs = $request->all();
        $attributs["user_id"]=10;
        $article = Article::create($attributs);
        return $article;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return $article->load('user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param Article $article
     * @return Response
     */
    public function loadTags(Article $article){
        return response($article->load('tags'));
    }

    public function addTag(Article $article, Tag $tag){
        $article->tags()->save($tag);
        return $article;
    }
    public function removeTag(Article $article, Tag $tag){
        $article->tags()->detach($tag);
        return $article;
    }

    public function commentArticle(Request $request, Article $article){
        $article->comments()->create($request->all());
        return $article;
    }
}
