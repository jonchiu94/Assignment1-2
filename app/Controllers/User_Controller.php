<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use User;
use CodeIgniter\API\ResponseTrait;

class User_Controller extends Controller
{
    use ResponseTrait;
    
    public function index()
    {
        $model = new User();
        
        $user = $model->findAll();
        return $this->respond($user, 200, 'Users Found');
    }
    
    public function show($id)
    {
        $model = new User();
        
        $user = $model->find($id);
        return $this->respond($user, 200, 'User Found');
    }
    
    public function new() {
        return $this->failUnauthorized('Not implemented');
    }
    public function edit($id) {
        return $this->failUnauthorized('Not implemented');
    }
    public function create() {
        return $this->failUnauthorized('Not implemented');
    }
    public function update($id) {
        return $this->failUnauthorized('Not implemented');
    }
    public function delete($id) {
        return $this->failUnauthorized('Not implemented');
    }
}