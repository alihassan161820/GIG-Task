<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Employees\EmployeesRepository;

class EmployeesController extends Controller
{
 
    private $employeesRepository ; 

    public function __construct(EmployeesRepository $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }

    /**
     * return the employees data who earn salary less than 
     *  half of the salary of employees with no manager
    */

    public function getDataAsEmployeeCanBeManager(){

        return $this->employeesRepository->getEmployeesWithQueryFirstAssumtion(); 
        
    }


    public function getData(){

        return $this->employeesRepository->getEmployeesWithQuerySecondAssumtion(); 
        
    }

}
