<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadDataController extends Controller
{   //Pass data
    protected $interns;
    public function __construct()
    {
        $this->interns = array(
            'BALAJI' => array(
                'fullname'=>'BALAJI N',
                'role'=>'PHP/LARAVEL',
            ),
            'SHEIK'=>array(
                'fullname'=>'SHEIK DAWOODU',
                'role'=>'ANGULAR',
            ),
            'PRASANTH'=>array(
                'fullname'=>'PRASANTH GUNASHEELAN',
                'role'=>'LARAVEL/PHP',
            ),
            'KATHIR'=>array(
                'fullname'=>'KATHIR PANNEERSELVAM',
                'role'=>'LARAVEL/PHP'
            ),
            'HARI'=>array(
                'fullname'=>'HARI KRISHNAN',
                'role'=>'LARAVEL/PHP',
            ),
            'JOEAL'=>array(
                'fullname'=>'JOEAL CHRISH',
                'role'=>'NODE JS',
            ),
            'GARUNYAA'=>array(
                'fullname'=>'GARUNYAA SHANMUGAM',
                'role'=>'NODE JS',
            ),
        );
    }

    public function getdata(){
        return view('data',['interns'=>$this->interns]);


    }

    public function passdata(){
        return dd(['interns'=>$this->interns]);
    }
}
