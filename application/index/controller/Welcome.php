<?php


namespace app\index\controller;
use think\Controller;

class Welcome extends Controller
{
    public  function index(){

        return $this->fetch('welcome');

    }
}
