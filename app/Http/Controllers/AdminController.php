<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use View;


class AdminController extends Controller
{
    /**
     * @param string $action
     * @return \Illuminate\Contracts\View\View
     */
    public function index(string $action) {
        $view = null;

        if($action === 'articles')
            $view = View::make('admin-views.articles')->with('posts', Post::all());
        elseif($action === 'users')
            $view = View::make('admin-views.users')->with('users', User::all());
        else
            $view = View::make('admin-views.articles')->with('posts', Post::all());


        return $this->renderView("admin", 'admin', "Page d'administration", [], [
            // On charge CKEDITOR
            url('plugins/ckeditor/ckeditor.js')
        ], [ 'view' => $view, 'action' => $action ]);
    }

}
