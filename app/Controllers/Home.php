<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/index', [
            'uri' => $this->request->getUri()
        ]);
    }

    public function contact(): string
    {
        return view('pages/contact', [
            'uri' => $this->request->getUri(),
            'key' => 'AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8'
        ]);
    }

    public function service(): string
    {
        return view('pages/service', [
            'uri' => $this->request->getUri()
        ]);
    }

    public function gallery(): string
    {
        return view('pages/gallery', [
            'uri' => $this->request->getUri()
        ]);
    }
}
