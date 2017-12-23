<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Validator;
use Auth;

class PostsController extends Controller
{

    public function index()
    {

    }

    public function get(App\Post $post)
    {
        return $post;
    }

    public function update(Request $request, App\Post $post)
    {
        $updated = "false";
        // Creating the rules
        $rules = ["id" => "required|numeric"];

        if($request->input("title") != null)
            $rules = array_add($rules, "title", "string");

        if($request->input("content") != null)
            $rules = array_add($rules, "content", "string");

        if($request->input("user_id") != null)
            $rules = array_add($rules, "user_id", "numeric");

        if($request->input("img") != null)
            $rules = array_add($rules, "img", "string");

        // First, validate the inputs
        $validator = Validator::make($request->all(), $rules);

        // Ok, the rules passes, now we can update
        // if the requester is the author of the post (or an admin)
        if((Auth::user()->role === 'admin' or Auth::id() == $request->input("user_id")) and $validator->passes())
        {
            $updated = $post->update($request->all());
        }
        return $updated;
    }

    public function delete(App\Post $post)
    {

    }

    /**
     * TODO: arranger cette fonction
     * Inserts an article based on a POST HTTP request.
     * @param Request $request
     * @return string wheter the insert operation suceeded or not.
     */
    public function insert(Request $request)
    {
        $title   = $request->input('title');
        $content = $request->input('content');
        $userId  = 2;

        $resultInsert = false;

        $rules = [
            'title'   => 'required|string',
            'content' => 'required|string',
            'user_id'  => 'required|numeric'
        ];

        // Vérification des paramètres
        $validator = Validator::make($request->all(), $rules);

        // Si les paramètres sont OK, on insère
        if($validator->passes())
        {
            $article = new App\Post([
                'title'   => $title,
                'content' => $content,
                'user_id' => $userId
            ]);

            $resultInsert = $article->save();
            // Si l'article a bien été inséré,
            // on insère les catégories asociées.
            if($resultInsert)
            {
                $articleCategories = array();
                $categoryIds = $request->input('categories');

                foreach ($categoryIds as $category_id)
                {
                    $articleCategories[] = array(
                        'article_id' => $article->id,
                        'category_id' => $category_id
                    );
                }
                $resultInsert = App\PostCategory::insert($articleCategories);
            }
        }

        return (string) $resultInsert;
    }
}
