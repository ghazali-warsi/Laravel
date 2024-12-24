<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    // index method for read view
    public function index()
    {
        // get(); = select * from employee

        $empData = DB::table('employees')->get();
        return view('Employee.read' , ['emp' => $empData]);
    }

    // create method for redirect to add data of employee form
    public function create()
    {
        return view('Employee.insert');
    }

    // store method for store data in in table of employee
    public function store(Request $req)
    {
        // return $req->name
        // dd($req);
        // query Builder is the component of laravel 
        // insert(); , table('')
        $emp = DB::table('employees')->insert(
            [
                // key equal to column name which is in database table 
                // value equal to name attribute value whcih define in input field of form
                'name'=>$req->name,
                'email'=>$req->email,
                'address'=>$req->address,
                'age'=>$req->age
            ]
        );

        if($emp)
        {
            return redirect()->route('index.page');
        }

    } 

    // edit method for redirect to updata data of employee form
    // update method to update data which in employee table 
    // destroy method for delete the specific of complete table data
}
