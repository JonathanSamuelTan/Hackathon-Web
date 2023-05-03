<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
    public function create()
    {
        $group_id = Auth::id();
        $member = Member::where('group_id', $group_id)->get();
        if (count($member) >= 3) {
            return redirect('dashboard');
        } else {
            return view('registMember');
        }
    }

    public function store(Request $request)
    {
        // get file real name
        $cvName = $request->memberFullName." -CV- ".$request->file('memberCV')->getClientOriginalName();
        $flazzName = $request->membeFullName." -FLAZZ- ".$request->file('memberFlazz')->getClientOriginalName();

        // store file
        $request->file('memberCV')->storeAs('public/CV',$cvName);
        $request->file('memberFlazz')->storeAs('public/Flazz',$flazzName);


        $group_id = Auth::id();
        Member::create([
            'memberFullName' => $request->memberFullName,
            'memberEmail' => $request->memberEmail,
            'memberWA' => $request->memberWA,
            'memberLine' => $request->memberLine,
            'memberGithub' => $request->memberGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'memberCV' => $cvName,
            'memberFlazz' => $flazzName,
            'group_id' => $group_id
        ]);
        return redirect('dashboard');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('dashboard', compact('member'));
    }

    public function showCV(Member $member)
    {
        $cvPath = storage_path('app/public/CV/' . $member->memberCV);
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

    public function showFlazz(Member $member)
    {
        $flazzPath = storage_path('app/public/Flazz/' . $member->memberFlazz);
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
