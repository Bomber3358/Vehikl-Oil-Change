<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function verify(Request $request) {
        $validated = $request->validate([
            'currOdometer' => ['required', 'integer'],
            'lastDate' => ['required', 'date', 'before:today'],
            'prevOdometer' => ['required', 'integer', 'lte:currOdometer'],
        ]);

        $form = Form::create($validated);

        return redirect("results/{$form->id}");
    }

    public function results($id){
        $form = Form::findOrFail($id);

        return view("results", compact('form'));
    }
}
