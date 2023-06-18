<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /*
    * if login success return employee list form
    */
    public function showEmployeesForm()
    {
        return view('employee.index');
    }
    
    public function showSaveForm() 
    {
        return view('employee.create');
    }
    public function showEditForm() 
    {
        return view('employee.edit');
    }
    public function showDetailForm() 
    {
        return view('employee.detail');
    }
}
