<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dormMember;
use App\Models\scolarshipMember;
use App\Models\summerSchoolMember;
use Carbon\Carbon;

class UserController extends Controller
{
    public function aboutus()
    {
        return view('aboutus');
    }

    public function scolarship()
    {
        return view('scolarship');
    }
    public function scolarship_form()
    {
        return view('scolarship_form');
    }

    public function summerSchool_form()
    {
        return view('summerSchool_form');
    }
    public function addScolarship_form()
    {
        return view('addScolarship_form');
    }

    public function summerSchool()
    {
        return view('summerSchool');
    }

    public function dormMembers_form()
    {
        return view('dormMembers_form');
    }

    public function dormMembersList()
    {
        return view('dormMembersList');
    }

    public function contact()
    {
        return view('contact');
    }

    public function delete_dorm_member($id)
    {
        // $data = dormMember::find($id);
        // $data->delete();
        // return redirect('/dormMembersList');

        $data= dormMember::where('id' , $id)->delete();
        return redirect('/dormMembersList');
    }

    public function showData($id)
    {
        $data = dormMember::find($id);
       return view('editMember',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $data = dormMember::find($request['id']);
        $data->name = $request['name'];
        $data->surname= $request['surname'];
        $data->email = $request['email'];
        $data->phone = $request['phone'];
        $data->school = $request['school'];
        $data->class = $request['class'];
        $data->scolarship = $request['scolarship'];
        $data->payment = $request['payment'];
        $data->created_at = Carbon::now()->addHours(2);
        $data->save();

        return redirect('/dormMembersList');
    }


    public function delete_scolarship_member($id)
    {
        // $data = scolarshipMember::find($id);
        // $data->delete();
        // return redirect('/scolarshipMembersList');
        $data= scolarshipMember::where('id' , $id)->delete();
        return redirect('/scolarshipMembersList');
    }

    public function showScolarshipData($id)
    {
        $data = scolarshipMember::find($id);
       return view('editScolarshipMember',['data'=>$data]);
    }
    public function updateScolarship(Request $request)
    {
        $data = scolarshipMember::find($request['id']);
        $data->name = $request['name'];
        $data->surname= $request['surname'];
        $data->email = $request['email'];
        $data->phone = $request['phone'];
        $data->school = $request['school'];
        $data->average = $request['average'];
        $data->created_at = Carbon::now()->addHours(2);
        $data->save();

        return redirect('/scolarshipMembersList');
    }

    public function delete_summer_school_member($id)
    {
        //  $data = summerSchoolMember::find($id);
        // $data->delete();
        $data= summerSchoolMember::where('id' , $id)->delete();
          return redirect('/summerSchoolMembersList');
        
    }

    public function showSummerSchoolData($id)
    {
        $data = summerSchoolMember::find($id);
       return view('editSummerSchoolMember',['data'=>$data]);
    }
    public function updateSummerSchool(Request $request)
    {
        $data = summerSchoolMember::find($request['id']);
        $data->name = $request['name'];
        $data->surname= $request['surname'];
        $data->email = $request['email'];
        $data->phone = $request['phone'];
        $data->school = $request['school'];
        $data->class = $request['class'];
        $data->created_at = Carbon::now()->addHours(2);
        $data->save();

        return redirect('/summerSchoolMembersList');
    }
}
