<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
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
    public function saveEmployee(EmployeeRequest $request) 
    {
        return redirect()->route('show-all')->with('success', 'Employee created successfully.');
    }
}
