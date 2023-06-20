<?php

namespace App\DBTransactions\Employee;

use App\Models\Employee;
use App\Classes\DBTransaction;
use App\Models\EmployeeProgrammingLanguage;
use App\Models\ProgrammingLanguage;
use Carbon\Carbon;

/**
 * 
 * 
 * @author  
 * @create  
 */
class SaveEmployee extends DBTransaction
{
    private $request;

    /**
     * Constructor to assign interface to variable
     */
    public function __construct($request)
    {
        $this->request = $request;
        
    }

    /**
         * Delete Email Passcode
     *
     * @author  
     * @return  array
         */
    public function process()
    {
        $request = $this->request;
        $employee = new Employee;
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->nrc = $request->nrc;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->gender = $request->gender;
        $employee->date_of_birth =  Carbon::createFromFormat('Y-m-d', $request->date_of_birth)->format('Y-m-d');
        $employee->address = $request->address;
        $employee->language = 2;
        $employee->career_part = $request->career_part;
        $employee->level = $request->level;
        $employee->image = $request->image;
        $employee->save();
        
        $programmingLanguages = $request->programming_languages;
        foreach ($programmingLanguages as $programmingLanguage) {
            $employeeProgrammingLanguages = new EmployeeProgrammingLanguage();
            $employeeProgrammingLanguages->employee_id = $employee->id;
            $employeeProgrammingLanguages->programming_language_id = $programmingLanguage;
            $employeeProgrammingLanguages->save();
        }

        if (!$employee) { #this row is save or not
                    return ['status' => false, 'error' => 'Failed!'];
        }
        return ['status' => true, 'error' => ''];
        }
}