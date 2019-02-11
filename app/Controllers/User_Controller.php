<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use User;
use CodeIgniter\API\ResponseTrait;

class User_controller extends Controller {
    use ResponseTrait;
    
    public function index()
    {
        $model = new User();
        $User = $model->findAll();
        return $this->respond($User, 200, 'All Users Found');
    }
    public function show($id) {
        $model = new User();
        $User = $model->find($id);
        return $this->respond($User, 200, 'This User found');
    }
        public function new() {
        return $this->failUnauthorized('Not implemented', 401, "Not Implemented");
    }
    public function edit($id) {
        return $this->failUnauthorized('Not implemented', 401, "Not Implemented");
    }
    public function update($id) {
        return $this->failUnauthorized('Not implemented', 401, "Not Implemented");
    }
    public function delete($id) {
        return $this->failUnauthorized('Not implemented', 401, "Not Implemented");
    }
}