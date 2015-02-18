<?php

/*
 * Admin controller
 */

class Admin extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['pagebody'] = 'homepage';
        $this->render();
    }
}

