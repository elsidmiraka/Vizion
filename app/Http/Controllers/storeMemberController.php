<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\scolarshipMember;

use App\Models\summerSchoolMember;

use App\Models\dormMember;

use Carbon\Carbon;

class storeMemberController extends Controller
{
    public function store_scolarshipMember(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'average' => 'required',
        ]);
        $member = new scolarshipMember();
        $member->name = $request['name'];
        $member->surname= $request['surname'];
        $member->email = $request['email'];
        $member->phone = $request['phone'];
        $member->school = $request['school'];
        $member->average = $request['average'];
        $member->created_at = Carbon::now()->addHours(2);
        $member->save();

        return redirect('/scolarship_form');
    }

    public function store_summerSchoolMember(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'class' => 'required',
        ]);
        $member = new summerSchoolMember();
        $member->name = $request['name'];
        $member->surname= $request['surname'];
        $member->email = $request['email'];
        $member->phone = $request['phone'];
        $member->school = $request['school'];
        $member->class = $request['class'];
        $member->created_at = Carbon::now()->addHours(2);
        $member->save();

        return redirect('/summerSchool_form');
    }

    public function store_dormMember(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'class' => 'required',
            'scolarship' => 'required',
            'payment' => 'required',
        ]);
        $member = new dormMember();
        $member->name = $request['name'];
        $member->surname= $request['surname'];
        $member->email = $request['email'];
        $member->phone = $request['phone'];
        $member->school = $request['school'];
        $member->class = $request['class'];
        $member->scolarship = $request['scolarship'];
        $member->payment = $request['payment'];
        $member->created_at = Carbon::now()->addHours(2);
        $member->save();

        return redirect('/dormMembersList');
    }
}
