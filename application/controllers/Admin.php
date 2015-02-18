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

    function add()
    {
        $quote = $this->quotes->create();
        $this->present($quote);
    }
    function index()
    {
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
        $this->data['pagebody'] = 'admin_list';
        $this->render();
    }
}

