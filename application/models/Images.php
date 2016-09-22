<?php

class Images extends CI_model {

    // constructor
    function __constructor()
    {
        parent::__construct();
    }

    // returns all the images, descending by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get("images");
        return $query->result_array();
    }

    // return just the 3 newest images
    function newest()
    {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }


}
