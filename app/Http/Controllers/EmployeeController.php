<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Carbon\Carbon;
use App\Models\Employee;
use App\Traits\ResponseAPI;
=======
use App\Http\Requests\EmployeeRequest;
>>>>>>> 01b8299da347ac44a0c328c8d494fad752da4a4f
use Illuminate\Http\Request;
use App\Models\ProgrammingLanguage;
use App\Http\Controllers\Controller;
use App\Models\EmployeeProgrammingLanguage;
use App\DBTransactions\Employee\SaveEmployee;

class EmployeeController extends Controller
{

    use ResponseAPI;
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
<<<<<<< HEAD

    public function saveEmployee(Request $request)
    {
        try {
            $save = new SaveEmployee($request);
            $save = $save->executeProcess();
            if ($save) {
                return view('employee.index')->with("saveSuccess", "Save Successful!");
            } else {
                return view('employee.create')->with("saveError", "Save Fail!");
            }
        } catch (\Exception $e) {
            return view('employee.create')->with("saveError", "Save Fail!");
        }
=======
    public function saveEmployee(EmployeeRequest $request) 
    {
        return redirect()->route('show-all')->with('success', 'Employee created successfully.');
>>>>>>> 01b8299da347ac44a0c328c8d494fad752da4a4f
    }
}
