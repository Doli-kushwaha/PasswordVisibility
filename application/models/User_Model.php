<?php

class User_Model extends CI_Model {

    // protected $table = 'user';
      private $table = 'user'; 


    public function __construct() {
        parent::__construct();
    }

   

  


//////////////pagegnation query 
    public function getCount() {
        return $this->db->count_all($this->table);
    }
   

    public function getUsers($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

/////////////////// end query





}