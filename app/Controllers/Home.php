<?php

namespace App\Controllers;

use App\Models\LabelModel;
use App\Models\Ragu;

class Home extends BaseController {
    protected $labeldata;
    protected $ragu;

    public function __construct() {
        $this->labeldata = new LabelModel();
        $this->ragu = new Ragu();
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

        $label = $this->labeldata->where('Chek', 0)->first();
        $p = count($this->labeldata->where('Label', 1)->findAll());
        $n = count($this->labeldata->where('Label', 0)->findAll());
        $ragu = $this->ragu->first();
        $total = $this->labeldata->getsisa();
        $r_0 = $n / ($n + $p);
        $r_1 = $p / ($n + $p);

        $data = [
            'page'      => 'label',
            'title'     => 'label',
            'labeling'  => $label,
            'ragu'      => $ragu,
            'total'     => $total,
            't_1'       => $p,
            't_0'       => $n,
            'r_0'       => $r_0,
            'r_1'       => $r_1,
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
    public function save($type, $Id) {
        $data = $this->labeldata->where('Id', $Id)->find();
        if ($type === "pos") {
            # code...
            $label = 1;
            $status = "tidak";
            $ini = true;
        } elseif ($type === "neg") {
            # code...
            $status = "tidak";
            $label = 0;
            $ini = true;
        } elseif ($type === "rapos") {
            # code...
            $label = 1;
            $status = "ragu";
            $ini = $this->ragu->set('ini', 1)->where('Id', 1)->update();
        } elseif ($type === "raneg") {
            # code...
            $label = 0;
            $status = "ragu";
            $ini = $this->ragu->set('ini', 0)->where('Id', 1)->update();
        }

        $save = [
            'Label'     => $label,
            'Chek'      => 1,
            'Status'    => $status,
        ];
        $result = $this->labeldata->set($save)->where('Id', intval($Id))->update();

        if ($result && $ini) {
            # code...
            session()->setFlashdata('berhasil', 'Data berhasil di simpan');
        }else{
            session()->setFlashdata('gagal', 'Data gagal di simpan');
        }
        return redirect()->to('/label');
    }
}
