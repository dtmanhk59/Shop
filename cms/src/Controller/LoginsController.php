<?php
namespace App\Controller;

class LoginsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Requesthandler');
    }
    
    public function index()
    {
        
    }
}