<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function questions()
     {
         return view ('backend.questions.questionsHome');
     }

     public function questions_ka()
     {
         return view('backend.questions.qset.ka-set');
     }

     public function questions_kha()
     {
         return view('backend.questions.qset.kha-set');
     }

     public function questions_ga()
     {
         return view('backend.questions.qset.ga-set');
     }
}
