<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;
use App\Models\Mlomba;


class Pengumuman extends BaseController
{
    public function __construct(){
        $this->datalomba = new Mlomba();
        $this->datafinal = new Mlistlomba();
    }

    public function index()
    {
        return view('user/v_pengumuman');
    }

    public function final($id_tim,$id_lomba)
    {
        $data = array(
            'nama' => $this->datalomba->detail($id_lomba),
            'list_lomba' => $this->datafinal->final($id_lomba,$id_tim),
        );
        return view('user/v_pengumumanfinal', $data);
    }
}
