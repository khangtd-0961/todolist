<?php
class UsersController extends AppController
{
var $uses = array('User');
var $layout = "admin";
public function beforeFilter(){
parent::beforeFilter();
}

public function logout(){
$this->redirect($this->Auth->logout());
}
public function login(){
    if($this->Auth->user()){
    return $this->redirect($this->Auth->redirectUrl());
    }
    if($this->request->is('post')){
    if($this->Auth->login()){
    return $this->redirect($this->Auth->redirectUrl());
    }else{
    $this->Session->setFlash('Username hoặc pass sai');
    }
    }
    }
}
