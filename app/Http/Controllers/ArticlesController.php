<?php

namespace App\Http\Controllers;

use App\Models\article;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticlesController extends Controller
{
    // Get Article List

    public function getArticleList()
    {
        try {

               $article = article::orderBy('id','DESC')->get();
               return response()->json($article);
        }
        catch (Exception $e)
        {
            Log::error($e);
        }
    }

    public function create()
    {
        

    }

    public function  store (Request $request){

        $validatearticle =  $request->validate([
            'NomArticle'            => 'required|max:25',
            'DescriptionArticle'    => 'required|max:100',
            'PrixArticle'           => 'required',
            'DateCloture'           => 'required',
        ]);

        $article = article::create($validatearticle);

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }




}
