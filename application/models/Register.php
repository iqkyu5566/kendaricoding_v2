<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Model
{
    public function index($data){
    
     $this->db->insert($this->table, $data);
        
    }
}