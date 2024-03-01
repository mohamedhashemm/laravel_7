<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // all data API
    public function index()
    {
        $members = Member::all();
        $data = [
            "msg" => "This all Member",
            "status" => 200,
            "data" => $members
        ];
        return response()->json($data);
    }
    // show one record in data API
    public function show($id)
    {
        $Member = Member::find($id);
        if ($Member) {
            $data = [
                "msg" => "Return one record DB Member",
                "status" => 200,
                "data" => $Member
            ];
            return response()->json($data);
        } else {
            $data = [
                "msg" => "NO such ID",
                "status" => 201,
                "data" => null
            ];
            return response()->json($data);
        }
    }
}
