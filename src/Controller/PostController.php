<?php

// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class PostController extends AppController
{
    public function index()
    {
        $postsTable = TableRegistry::getTableLocator()->get('Posts');
        $this->set('posts', $postsTable->find('all'));
    }

    public function add()
    {
        $postsTable = TableRegistry::getTableLocator()->get('Posts');
        $post = $postsTable->newEmptyEntity();
        if ($this->request->is('post')) {
            $post = $postsTable->patchEntity($post, $this->request->getData());
            if ($postsTable->save($post)) {
                $this->Flash->success(__('The post has been saved.', ['key' => 'message']));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post!'));
        }

        $this->set('post', $post);
    }

    //public function view($id = null)
    // {
    //     $article = $this->Articles->get($id);
    //     $this->set(compact('article'));
    // }

    

    // public function edit($id = null)
    // {
    //     $article = $this->Articles->get($id);
    //     if ($this->request->is(['post', 'put'])) {
    //         $this->Articles->patchEntity($article, $this->request->getData());
    //         if ($this->Articles->save($article)) {
    //             $this->Flash->success(__('The article has been updated.'));
    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('Unable to update the article.'));
    //     }
    //     $this->set(compact('article'));
    // }

    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $article = $this->Articles->get($id);
    //     if ($this->Articles->delete($article)) {
    //         $this->Flash->success(__('The article has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('Unable to delete the article.'));
    //     }
    //     return $this->redirect(['action' => 'index']);
    // }
}
