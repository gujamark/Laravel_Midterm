<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class CompanyController extends Controller
{
    public function getCompanies() {

            $companies = Company::orderBy("id","DESC")->get();

            return view("company")->with("companies",$companies);
    }

    public function createCompany(Request $request) {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);

        return redirect(route("companies.all"));
    }

    public function deleteCompany($id) {
            Company::where("id",$id)->delete();

            return redirect(route("companies.all"));
    }

    public function editCompany($id) {
        $company = Company::where('id',$id)->first();
        return view("edit-company")->with("company",$company);
    }

    public function saveCompany(Request $request) {
        
        Company::where("id",$request->id)->update(
            [
                'name' => $request->name,
                'code' => $request->code,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
            ]
        );
        return redirect(route("companies.all"));
    }

}
