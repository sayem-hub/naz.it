<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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




     //new controller start here


     public function question()
     {
         return view('Frontend.kpiproject.question.index');
     }


    public function search(Request $request)
    {
        $request->validate(([
            'set-query' => 'required',
        ]));

        $search_text = $request->input('set-query');
        $questions = DB::table('questions')
        ->where('set', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')

            ->paginate(50);

        return view('Frontend.kpiproject.question.search', ['questions' => $questions]);
    }

    public function edit($id)
    {
        $questions = Question::find($id);
        return view ('Frontend.kpiproject.question.edit', compact('questions'));
    }

    public function update (Request $request, $id)
    {
        $questions = Question::find($id);
    }
    public function create()
    {

        return view('Frontend.kpiproject.question.create');
    }

    public function store(Request $request)
    {
            $data = [
                'question' => $request->input('question'),

                'value' => $request->input('value'),
             

            ];

            Question::create($data);
            return redirect()->back();

        }
}
