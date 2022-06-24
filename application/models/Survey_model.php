<?php

class Survey_model extends CI_Model
{
    public function getAllSurvei()
    {
        return $this->db->get('t_survei')->result_array();
    }
}
