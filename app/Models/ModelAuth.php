<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login_user($username, $password)
    {
        return $this->db->table('tbl_user')->where([
            'username' => $username,
            'password' => $password
        ])->get()->getRowArray();
        // $data_session = array(
        //     'username' => $username,
        //     'id_user'=> $cek1->id_user,
        // );
        // $this->session->set_userdata($data_session);
    }

    // public function bio_santri($id){ 
    //     $this->db->select('*');
    //      $this->db->from('tbl_user');
    //     $this->db->where('id_user', $id);
    //     return $this->db->get()->row();
    //     }  
}
