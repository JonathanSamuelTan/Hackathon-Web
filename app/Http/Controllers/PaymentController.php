<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaymentController extends Controller
{
    public function payment(){
        $user = auth()->user();
        return view('payment', compact('user'));
    }

    public function store(Request $request, $id){
        $user = User::find($id);
        //get image from user
        $image = $request->file('invoice');
        $imageName = $user->name. '-' . $image->getClientOriginalName();
        //save image to storage/invoice
        $request->invoice->storeAs('public/Invoice', $imageName);

        //update user data
        $user->NoRek = $request->NoRek;
        $user->bank = $request->bank;
        $user->invoice = $imageName;
        $user->save();

        return redirect()->route('dashboard');


    }
}
