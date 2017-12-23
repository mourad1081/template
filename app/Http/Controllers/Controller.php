<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Returns a page included in a layout.
     * @param string $pageName
     * @param string $js
     * @param string $title
     * @param string[] $moreMetas
     * @param string[] $moreScripts
     * @param string[] $pageParams
     * @return \Illuminate\Contracts\View\View
     */
    protected function renderView($pageName, $js, $title, $moreMetas = [], $moreScripts = [], $pageParams = [])
    {
        $header = View::make('shared._header', ['title' => $title, 'metas' => $moreMetas]);
        $footer = View::make('shared._footer', ['scripts' => $moreScripts]);
        $body   = View::make($pageName, $pageParams);

        return View::make('shared._layout', [
            'header' => $header,
            'body'   => $body,
            'footer' => $footer,
            'js'     => $js
        ]);
    }
}
