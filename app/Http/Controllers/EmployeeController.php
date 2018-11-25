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
        return json_encode([
            'result' => 'success',
            'employee' => $employee
        ]);
    }

    /**
     * Search Employee
     */
    public function searchEmployee($id)
    {
        $employee = Employee::find($id);

        return json_encode([
            'result' => 'success',
            'employee' => $employee
        ]);
    }

    /**
     * Inserting Employee Information
     */
    public function createEmployee(Request $request)
    {
        $newEmployee = Employee::create($request->all());

        if($newEmployee){
            return json_encode([
                'result' => 'success',
                'message' => 'Successfully Added!'
            ]);
        } else {
            return json_encode([
                'result' => 'failed',
                'message' => 'Not Successfully!'
            ]);
        }
    }

    /**
     * Updating Employee Information
     */
    public function updateEmployee(Request $request)
    {
        $updateEmployee = Employee::where('id', $request['id'])->update($request->except('_token'));
        
        if($updateEmployee){
            return json_encode([
                'result' => 'success',
                'message' => 'Employee successfully Updated'
            ]);
        } else {
            return json_encode([
                'result' => 'failed',
                'message' => 'Not Successfully!'
            ]);
        }
    }

    /**
     * Deleting Employee
     */
    public function deleteEmployee(Request $request)
    {
        $employee_id_array = $request->input('id');
        $delete_employee = Employee::where('id', $employee_id_array)->delete();
        if($delete_employee){
			return json_encode([
                'result' => 'success',
                 'message' => 'Employee successfully deleted.'
                ]);
		}
    }
}
