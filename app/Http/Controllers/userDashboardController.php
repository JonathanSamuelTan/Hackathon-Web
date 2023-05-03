<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Leader;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class userDashboardController extends Controller
{
    public function show(){
        $id = Auth::id();
        $user = User::find($id);
        $leader = Leader::where('group_id', $id)->first();
        $member = Member::where('group_id', $id)->get();
        return view('dashboard', compact('user', 'leader', 'member'));
    }

    public function downloadGuideBook()
    {
        $filePath = 'public/GuideBook.jpg';
        $fileContents = Storage::disk('public')->get($filePath);
        // get the extension
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $headers = [
            'Content-Type' => 'image/'.$extension,
        ];
        return response($fileContents, 200, $headers)->header('Content-Disposition', 'inline');
    }

}
