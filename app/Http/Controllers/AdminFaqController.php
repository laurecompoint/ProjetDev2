<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {

            return Faq::all();

    }
    public function create(Faq $faq, Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'question' => 'required',
            'answer' => 'required',

        ]);

        $faq = new Faq;
        $faq->name = $request->name;
        $faq->question =  $request->question;
        $faq->answer =  $request->answer;
        $faq ->save();



    }
    public function destroy(Request $request, Faq $faq)
    {
        $faq = Faq::find($faq->id = $request->id);
        $faq->delete();
    }
    public function edit(Request $request, Faq $faq)
    {
        $faq = Faq::find($faq->id = $request->id);
        return $faq->where('id', $faq->id)->first();
    }

}
