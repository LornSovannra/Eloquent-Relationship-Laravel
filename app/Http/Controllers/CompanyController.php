<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function Home(){
        $companies = Company::get();

        return view("company", compact("companies"));
    }

    public function Create(){
        $company = new Company();
        $company->comany_name = "Youtube";
        $company->company_location = "San Bruno";
        $company->save();

        return $company;
    }
}