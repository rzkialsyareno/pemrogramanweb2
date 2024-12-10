<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function databuku()
    {
        return view('admin/databuku');
    }

    public function datatransaksi()
    {
        return view('admin/datatransaksi');
    }

    public function datapelanggan()
    {
        return view('admin/datapelanggan');
    }
}
