<?php

use CodeIgniter\Model;

class Guide extends Model
{
    protected $data = [
        '1' => ['id' => '1', 'name' => 'Harman Dhillon', 'gender' => 'M', 'age' => '20'],
        '2' => ['id' => '2', 'name' => 'Jacoob Smith',   'gender' => 'O', 'age' => '22'],
        '3' => ['id' => '3', 'name' => 'Jono Chiu',      'gender' => 'M', 'age' => '14.5'],
        '4' => ['id' => '4', 'name' => 'Chenxi Shao',    'gender' => 'M', 'age' => '25'],
        '5' => ['id' => '5', 'name' => 'Ahmed Smith',    'gender' => 'M', 'age' => '54'],
        '6' => ['id' => '6', 'name' => 'Emily Carr',     'gender' => 'F', 'age' => '104']
    ];
    
    public function find($id = null)
    {
        return $this->data[$id];
    }
    
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}