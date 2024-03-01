<?php

namespace App\Http\Controllers;

use App\Model\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public  function addMember(Request $request)
    {
        $validatedData = $request->validate([
            // 'id' => 'required|max:11',
            "full_name" => "required|min:5|max:255",
            "email" => "required|min:5|max:255|email:rfc,dns",
            "message" => "required|min:10|max:255",
        ]);
        Member::create([
            // 'id' => $request->id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->route('home')->with('addMember', 'created ' . $request->full_name . ' successfully');
    }
}
