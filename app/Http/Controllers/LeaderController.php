<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    public function create()
    {
        return view('registleader');
    }

    public function store(Request $request)
    {

        // concat leader name with file name
        $cvName = $request->leaderName." -CV- ".$request->file('leaderCV')->getClientOriginalName();
        $flazzName = $request->leaderName." -FLAZZ- ".$request->file('leaderFlazz')->getClientOriginalName();
        // store file
        $request->file('leaderCV')->storeAs('public/CV',$cvName);
        $request->file('leaderFlazz')->storeAs('public/Flazz',$flazzName);

        $group_id = Auth::id();
        Leader::create([
            'leaderName' => $request->leaderName,
            'leaderEmail' => $request->leaderEmail,
            'leaderWA' => $request->leaderWA,
            'leaderLine' => $request->leaderLine,
            'leaderGithub' => $request->leaderGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'leaderCV' => $cvName,
            'leaderFlazz' => $flazzName,
            'group_id' => $group_id
        ]);
        return redirect('dashboard');
    }

    public function show()
    {
        $id = auth()->user()->id;
        //get leader data base on id
        $leader = Leader::findOrFail($id);
        return view('dashboard',compact('leader'));
    }

    public function showCV(Leader $leader)
    {
        $cvPath = storage_path('app/public/CV/' . $leader->leaderCV);
        // get the extension
        $extension = pathinfo($cvPath, PATHINFO_EXTENSION);
        if($extension == 'pdf'){
            $headers = [
                'Content-Type' => 'application/pdf', 
            ];
            return response()->file($cvPath, $headers);
        }
        else{
            $headers = [
                'Content-Type' => 'image/'.$extension,
            ];
            return response()->file($cvPath, $headers);
        }
    }

    public function showFlazz(Leader $leader)
    {
        $flazzPath = storage_path('app/public/Flazz/' . $leader->leaderFlazz);
        $extension = pathinfo($flazzPath, PATHINFO_EXTENSION);
        if($extension == 'pdf'){
            $headers = [
                'Content-Type' => 'application/pdf', 
            ];
            return response()->file($flazzPath, $headers);
        }
        else{
            $headers = [
                'Content-Type' => 'image/'.$extension,
            ];
            return response()->file($flazzPath, $headers);
        }
    }

}
