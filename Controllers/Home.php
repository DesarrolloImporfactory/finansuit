<?php

class Home extends Controller
{
    public function index()
    {
        $this->views->render($this, "index");
    }
}
