<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    public function APIlist()
    {
        return employee::all();
    }

    public function createEmployee(Request $req)
    {
        $employee=new employee();
        $employee->name=$req->name;
        $employee->id=$req->id;
        $employee->contact=$req->contact;
        $employee->email=$req->email;
        $employee->password=$req->password;
        $employee->save();
    }
}
