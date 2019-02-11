<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Guide;
use CodeIgniter\API\ResponseTrait;

class Guide_Controller extends Controller
{
    use ResponseTrait;
    
    public function index()
    {
        $model = new Guide();
        
        $guide = $model->findAll();
        return $this->respond($guide, 200, 'Guides Found');
    }
    
    public function show($id)
    {
        $model = new Guide();
        
        $guide = $model->find($id);
        return $this->respond($guide, 200, 'Guide Found');
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