<?php

class Subscription_model extends CI_Model {

    function save_subscription_email($email){
     
        $data = array(
            'email_address' => $email
        );
        $this->db->insert('email_list', $data);
        echo $this->db->last_query();exit;
    }
}


?>