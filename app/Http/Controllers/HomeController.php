<?php

namespace App\Http\Controllers;

use App\Charts\EmployeesChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(EmployeesChart $chart)
{
     $pageTitle = 'Home';
     return view('home',[
            'pageTitle' => $pageTitle, 
            'chart' => $chart->build()
     ]);
}


}
