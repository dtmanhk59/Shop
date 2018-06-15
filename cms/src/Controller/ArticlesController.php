<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;

class ArticlesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    
    public function index()
    {
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }
    
    /**
     * Rest Api articles
     */
    public function indx2()
    {
        $articles = $this->Articles->find();
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
        
    }
    
    public function viw3()
    {
        
    }
    
    public function page1()
    {
        
    }
    
    public function page2()
    {
        
    }
    
    public function page3()
    {
        
    }
    public function page4()
    {
    
    }
    
    
    public function viewId($id){
        $data = file_get_contents("https://jsonplaceholder.typicode.com/posts/".$id);
        $data = (isset($data) && $data != '') ? json_decode($data, true) : array();
        $this->set('data', $data);
    }
    
    
    
    public function view($slug = null)
    {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->set(compact('article'));
    }
    
    
    public function apiGetId($id){
        try{
            $articles = $this->Articles->get($id);
            $this->set([
                'articles' => $articles,
                '_serialize' => ['articles']
            ]);
        }catch(RecordNotFoundException $e){
            // 404 error
        }
    }
    
    public function apiAdd(){
        print_r($this->request->getData());
        $article = $this->Articles->newEntity($this->request->getData());
        $article->user_id = 1;
        if($this->Articles->save($article)){
            $message = 'You article has been saved';
        }else{
            $message = 'Unable to add your article.';
        }
        $this->set([
            'message' => $message,
            'article' => $article,
            '_serialize' => ['message', 'article']
        ]);
    }
    
    public function add()
    {
        $article = $this->Articles->newEntity();
        if($this->request->is('post')){
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = 1;
            if ($this->Articles->save($article)){
                $this->Flash->success(__('You article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $tags = $this->Articles->Tags->find('list');
        $this->set('tags', $tags);
        $this->set('article', $article);
    }
    
    public function edit($slug)
    {
        #$article = $this->Articles->findBySlug($slug)->firstOrFail();
        $article = $this->Articles
        ->findBySlug($slug)
        ->contain('Tags')
        ->firstOrFail();
        if($this->request->is(['post', 'put'])){
            $this->Articles->patchEntity($article, $this->request->getData());
            if($this->Articles->save($article)){
                $this->Flash->success(__('Your article has bên updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        
        //add
        $tags = $this->Articles->Tags->find('list');
        $this->set('tags', $tags);
        $this->set('article', $article);
    }
    
    public function apiEdit($id)
    {
        $article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            'article' => $article,
            '_serialize' => ['message', 'article']
        ]);
    }
    
    public function apiDelete($id)
    {
        $recipe = $this->Articles->get($id);
        $message = 'Deleted';
        if (!$this->Articles->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
    
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The {0} article has been deleted.', $article->title));
            return $this->redirect(['action' => 'index']);
        }
    }
    
    public function tags()
    {
        $tags = $this->request->getParam('pass');
        $articles = $this->Articles->find('tagged', [
            'tags' => $tags
        ]);
        $this->set([
            'articles' => $articles,
            'tags' => $tags
            
        ]);
    }
    
}