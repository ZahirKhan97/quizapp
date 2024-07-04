<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizmodel extends CI_Model {

	public function readdata()
    {
        $query=$this->db->select('qid,question,choice1,choice2,choice3,answer')->get('php');
        return $query->result();
    }


}