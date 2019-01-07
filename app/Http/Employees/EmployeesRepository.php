<?php
namespace App\Http\Employees;
use App\Employee;

class EmployeesRepository
{

    // Assuming that there is a relation between mgr_id and emp_id as 
    // there is employees are managers for other employees

    public function getEmployeesWithQueryFirstAssumtion()
    {

        return Employee::select('employees.ename')
                                        ->join('employees as manager', 'manager.emp_id', 'employees.mgr_id')
                                        ->whereRaw('manager.sal/2 > employees.sal')
                                        ->get();
                    
    }

    // Assuming that there is no relation between mgr_id and emp_id 
    //  and there is a seperate table for managers data
    public function getEmployeesWithQuerySecondAssumtion()
    {
        return Employee::select('ename')
                                        ->where('mgr_id','!=',null)
                                        ->where('sal','<',function ($query) {
                                            $query->selectRaw('sal/2 as sal')
                                                        ->from('employees')
                                                        ->Where('mgr_id','=',null);
                                        })
                                        ->get();    
    }

}