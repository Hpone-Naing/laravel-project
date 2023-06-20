<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use App\Traits\ResponseAPI;
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
    }
}
