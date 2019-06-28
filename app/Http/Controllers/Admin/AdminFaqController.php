<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Faq;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminFaqController extends Controller
{


    public function index()
    {
            return Faq::all();
    }
    public function nb()
    {
        return Faq::all()->count();
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
        $faqs = $faq->where('id', $faq->id)->first();
        return view('/AdminModif.faqmodif')->with([
            'faqs' => $faqs,
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
        $faqs = $faq->where('id', $faq->id = $request->id)->update([  'name'  =>  $faq->name = $request->name, 'question'  =>  $faq->question = $request->question, 'answer'  =>  $faq->answer = $request->answer, 'created_at' => NOW()]);

        return redirect('/admin-faqs');
    }
}
