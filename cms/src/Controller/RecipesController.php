<?php
namespace App\Controller;

class RecipesController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    public function index(){
        
    }
}