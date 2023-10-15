<?php

namespace App\Controllers;

use App\Models\LabelModel;

class Home extends BaseController {
    protected $labeldata;

    public function __construct()
    {
        $this->labeldata = new LabelModel();
    }

    public function index(): string {
        $data = [
            'page'  => 'index',
            'title' => 'index',
        ];
        return view('index', $data);
    }

    public function form(): string {
        $data = [
            'page'  => 'form',
            'title' => 'form',
        ];
        return view('index', $data);
    }
    public function label(): string {
        $data = [
            'page'  => 'label',
            'title' => 'label',
        ];
        return view('index', $data);
    }
    public function tabel(): string {

        // $ini = $this->app->log('Berhasil');
        $data = [
            'page'  => 'tabel',
            'title' => 'tabel',
            'label' => $this->labeldata->paginate(50, 'Dataset'),
            'pager' => $this->labeldata->pager,
        ];
        return view('index', $data);
    }
}
