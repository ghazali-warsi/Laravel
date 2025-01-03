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
    public function edit(string $id)
    { 
         $emp = DB::table('employees')->find($id);
        // $emp = DB::table('employees')->where('id', '2')->get();
         return view('Employee.update' , compact('emp'));

    }

    // update method to update data which in employee table 
    public function update(Request $req ,  string $id)
    {
        // $emp = DB::table('employees')->where('id' , '2')->get();
        
        DB::table('employees')->where('id' , $id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'age'=>$req->age
        ]);

        return redirect()->route('index.page');
    }

    // destroy method for delete the specific of complete table data

    public function destroy(string $id)
    {
            $emp = DB::table('employees')->where('id' , $id)->delete();
            return redirect()->route('index.page');
    }

    public function show(string $id)
    { 
         $data = DB::table('employees')->find($id);
        // $emp = DB::table('employees')->where('id', '2')->get();
         return view('Employee.single' , compact('data'));
    }
}
