<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->admin = new ModelAdmin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_admin',
            'grafik' => $this->admin->Grafik(),
            'todayincome' => $this->admin->Todayincome(),
            'monthincome' => $this->admin->Monthincome(),
            'yearincome' => $this->admin->Yearincome(),
            'jlhuser' => $this->admin->jlhuser(),
            'jlhkategori' => $this->admin->jlhkategori(),
            'jlhsatuan' => $this->admin->jlhsatuan(),
            'jlhproduk' => $this->admin->jlhproduk(),

        ];
        return view('v_template', $data);
    }

    public function Cek()
    {
        echo dd($this->admin->Monthincome());
    }
}
