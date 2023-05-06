<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //display all users
    public function index()
    {
        // compact all user where 'isAdmin == 0'
        $teams = User::where('isAdmin', 0)->get();
        return view('adminDashboard', compact('teams'));
    }

    //get spesific data from each user
    public function show($id)
    {
        $user = User::find($id);
        $leader = Leader::where('group_id', $id)->first();
        //get all member who has the same group id
        $member = Member::where('group_id', $id)->get();
        // return view('groupDetail', compact('user'), compact('leader'), compact('member'));
        return view('groupDetail', compact('user', 'leader', 'member'));
    }

    public function delete($id)
    {
        User::where("id", $id)->delete();

        return redirect('/admin-dashboard');
    }

   
    public function updateStatus(Request $request, $id)
    {
        User::where('id', $id)->update([
            'status' => $request->status
        ]);

        return redirect('/admin-dashboard');
    }

    public function showInvoice(User $user)
    {
        $invoicePath = storage_path('app/public/Invoice/' . $user->invoice);
        $extension = pathinfo($invoicePath, PATHINFO_EXTENSION);
        $headers = [
            'Content-Type' => 'image/'.$extension,
        ];
        return response()->file($invoicePath, $headers);
    }


}
