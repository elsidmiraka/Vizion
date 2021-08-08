<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\scolarshipMember;
use App\Models\summerSchoolMember;
use App\Models\dormMember;

class showMemberController extends Controller
{
    function show_scolarship_members(){

        $data = scolarshipMember::all();
        return view('scolarshipMembersList',['scolarship_members'=>$data]);
    }

    function show_summerSchool_members(){

        $data = summerSchoolMember::all();
        return view('summerSchoolMembersList',['summer_school_members'=>$data]);
    }

    function show_dorm_members(){

        $data = dormMember::all();
        return view('dormMembersList',['dorm_members'=>$data]);
    }
}
