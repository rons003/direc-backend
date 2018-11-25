<?php

namespace App\Http\Controllers;
use App\Model\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Getting all Employees Information
     */
    public function getAllEmployee()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    /**
     * Search Employee
     */
    public function searchEmployee($id)
    {
        $employee = Employee::find($id);

        return response()->json($employee);
    }

    /**
     * Inserting Employee Information
     */
    public function createEmployee(Request $request)
    {
        $employee = new Employee;

        $employee->lastname = $request['lastname'];
        $employee->firstname = $request['firstname'];
        $employee->middlename = $request['middlename'];
        $employee->lastname = $request['contact_number'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->gender = $request['gender'];
        $employee->national = $request['national'];

        $employee-save();
    }

    /**
     * Updating Employee Information
     */
    public function updateEmployee(Request $request)
    {
        $employee = Employee::find($request['id']);

        $employee->lastname = $request['lastname'];
        $employee->firstname = $request['firstname'];
        $employee->middlename = $request['middlename'];
        $employee->lastname = $request['contact_number'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->gender = $request['gender'];
        $employee->national = $request['national'];
        
        $employee-save();
    }

    /**
     * Deleting Employee
     */
    public function deleteEmployee($id)
    {
        $deleted = Employee::destroy($id);
    }
}
