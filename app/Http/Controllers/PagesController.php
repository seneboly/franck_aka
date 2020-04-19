<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class PagesController extends Controller
{
    public function getFormation(){

    	return view('pages.formation');
    }

    public function getCompetences(){

        return view('pages.competences');
    }

    public function getExperience(){

    

    	return view('pages.experience');
    }


    public function getLoisir(){

        return view('pages.loisir');
    }

     public function getContact(){

        return view('pages.contact');
    }

    

  


}
