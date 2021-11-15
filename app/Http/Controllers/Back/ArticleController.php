<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        return view('back.pages.article.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('back.pages.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','max:255','min:3'],
            'category_id' => 'required',
            'description' => ['required','min:5'],
            'image' => ['required','mimes:jpg,png,jpeg'],
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->description = $request->description;
        $article->slug =  Str::slug($request->title);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $article->image = 'uploads/' . $imageName;
        }
        $article->save();
        return redirect()->back()->with('success','Makale başarılı bir şekilde kaydedildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Article::find($id);
        return view('back.pages.article.edit',compact('article'));
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
        $request->validate([
            'title'=>['required','max:255','min:3'],
            'category_id' => 'required',
            'description' => ['required','min:5'],
            'image' => ['mimes:jpg,png,jpeg'],
        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category_id = $request->category_id;
        $article->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $article->image = 'uploads/' . $imageName;
        }
        $article->save();
        return redirect()->back()->with('success','Makale başarılı bir şekilde güncellendi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json(['success'=>'Başarılı bir şekilde silindi']);
    }
    public function switch($id,Request $request){
        $article=Article::find($request->id);
        $article->status=$request->statu=='true' ? 1 : 0;
        $article->save();
    }
}
