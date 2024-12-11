<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index', [
            'uri' => $this->request->getUri()
        ]);
    }

    public function about(): string
    {
        return view('about', [
            'uri' => $this->request->getUri()
        ]);
    }
}
