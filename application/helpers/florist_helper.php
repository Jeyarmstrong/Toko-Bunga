<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert aler-danger" role="alert">
        Maaf. Kamu harus Login Dulu!!
        </div>');
        redirect('auth');
    } 
    else {
        $role_id = $ci->session->userdata('role_id');
    }
}