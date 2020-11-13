<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
        public function getEmployees(Request $request) {
            $employees = Employee::orderBy("id","DESC")->get();

            return view("employee")->with("employees",$employees);

        }

        public function createEmployee(Request $request) {
            
        }

        public function deleteEmployee($id) {
            Employee::where("id",$id)->delete();

            return redirect(route("employees.all"));
        }

        public function editEmployee($id) {
            $employee = Employee::where("id",$id)->first();
            
            return view("edit-employee")->with("employee",$employee);
        }

        public function saveEmployee(Request $request) {
            Employee::where("id",$request->id)->update(
                [
                    'name' => $request->name,
                    'lastname' => $request->lastname,
                    'birthdate' => $request->birthdate,
                    'personal_id' => $request->personal_id,
                    'salary' => $request->salary
                ]
            );

            return redirect(route("employees.all"));
        }
}
