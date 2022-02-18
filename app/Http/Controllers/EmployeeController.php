<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function Home(){
        $employees = Employee::get();

        return view("employee", compact("employees"));
    }

    public function Create(){
        $company = Company::findOrFail(4);

        $employee = new Employee();
        $employee->employee_name = "Chad Hurley and Steve Chen";
        $employee->gender = "Male";
        $employee = $company->employee()->save($employee);

        return $employee;
    }
}