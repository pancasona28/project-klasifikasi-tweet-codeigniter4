<?php

namespace App\Controllers;

use App\Models\LabelModel;
// use App\Models\Ragu;
use App\Services\App;

class Home extends BaseController {
    protected $labeldata;
    protected $forge;
    protected $app;

    public function __construct() {
        $this->labeldata = new LabelModel();
        
        $this->forge = \Config\Database::forge();
        $this->app = new App();
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
        if(empty($this->labeldata->where('Chek', 0)->first())){
            $label = $this->labeldata->first();
        }else{
            $label = $this->labeldata->where('Chek', 0)->first();
        };
        
        $p = count($this->labeldata->where('Label', 1)->findAll());
        $n = count($this->labeldata->where('Label', 0)->findAll());
        // $t = count($this->labeldata->where('Status', 'tidak')->findAll());
        // $r = count($this->labeldata->where('Status', 'ragu')->findAll());
       
        $total = $this->labeldata->getsisa();
        $r_0 = $n / ($n + $p);
        $r_1 = $p / ($n + $p);

        $data = [
            'page'      => 'label',
            'title'     => 'label',
            'labeling'  => $label,
// 'ragu'      => $ragu,
            'total'     => $total,
            't_1'       => $p,
            't_0'       => $n,
            'r_0'       => $r_0,
            'r_1'       => $r_1,
            // 't_r'       => $t,
            // 'r_r'       => $r,
            'hide'      => true,
        ];
        return view('index', $data);
    }
    public function tabel(): string {

       
        $data = [
            'page'  => 'tabel',
            'title' => 'tabel',
            // 'label' => $this->labeldata->paginate(1000, 'Dataset'),
            'label' => $this->labeldata->getdatalabel(),
            'pager' => $this->labeldata->pager,

        ];
        return view('index', $data);
    }
    public function save($type, $Id) {
        if ($type === "kem") {
            if($Id == 1){
                return redirect()->to('/label');
            }else{
                $save = [
                'Id'        => intval($Id) - 1,
                'Chek'      => 0,
                'Status'    => null,
                ];
            };
            
            // $c = $this->labeldata->where('Id', intval($Id) - 1)->find();
            // if ($c[0]['Status'] === "ragu" || $c[0]['Label'] === '1') {
            //     # code...
            //     $ini = $this->ragu->set('ini', 0)->where('Id', 1)->update();
            //     dd($ini);
            // } elseif ($c[0]['Status'] === "ragu" || $c[0]['Label'] === '0') {
            //     # code...
            //     $ini = $this->ragu->set('ini', 1)->where('Id', 1)->update();
            //     dd($ini);
            // }
            // dd();
            $result = $this->labeldata->save($save);
            $i = '1';
        } 
        else {
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
            } 
            // elseif ($type === "rapos") {
            //     # code...
            //     $label = 1;
            //     $status = "ragu";
            //     $ini = $this->ragu->set('ini', 1)->where('Id', 1)->update();
            // } elseif ($type === "raneg") {
            //     # code...
            //     $label = 0;
            //     $status = "ragu";
            //     $ini = $this->ragu->set('ini', 0)->where('Id', 1)->update();
            // }

            $save = [
                'Id'        => intval($Id),
                'Label'     => $label,
                'Chek'      => 1,
                // 'Status'    => $status,
            ];
            $result = $this->labeldata->save($save);
            $i = '0';
        }

        if ($result && $ini) {
            # code...
            if ($i === '1') {
                # code...
                session()->setFlashdata('berhasil', 'kembali ke data sebelumnya');
            }else {
                # code...
                session()->setFlashdata('berhasil', 'Data berhasil di simpan');
            }
        } else {
            session()->setFlashdata('gagal', 'Data gagal di simpan');
        }
        return redirect()->to('/label');
    }
}
