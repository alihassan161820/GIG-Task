## GIG Task

## Requirements
- PHP >= 7.1.3
- composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

## Installation 
* `git clone https://github.com/alihassan161820/GIG-Task.git`
* `cd GIG-Task-master`
* `composer install`
* `rename .env.example file to .env`
* `set your database configeration in .env file`

![database configerations](https://github.com/alihassan161820/GIG-Task/blob/master/public/imgs/configeration.png)

* `php artisan key:generate`
* `php artisan migrate`
* `php artisan db:seed`
* `php artisan serve` to start the app on http://127.0.0.1:8000


## Using App
 # First task EMP table
 ![employees table](https://github.com/alihassan161820/GIG-Task/blob/master/public/imgs/employeestable.png)
 - task paths in project: 
 
    GIG-Task-master/app/Http/Employees/EmployeesRepository.php ( Task queries )
    
    GIG-Task-master/app/Http/Controllers/EmployeesController.php 
    
 - You can get result dirctly using endpoints 

    > Assuming that there is a relation between mgr_id and emp_id as 
    > there is employees are managers for other employees
    
   * http://127.0.0.1:8000/get_employees1
   
    > Assuming that there is no relation between mgr_id and emp_id 
    >  and there is a seperate table for managers data
    
   * http://127.0.0.1:8000/get_employees2
   
 # Second task Login Form
 - first you need to register to check password validation 
    * http://127.0.0.1:8000/register
 ![registeration](https://github.com/alihassan161820/GIG-Task/blob/master/public/imgs/register.png)
 - you can login to check user attamps checker
    * http://127.0.0.1:8000/login
 ![attamps](https://github.com/alihassan161820/GIG-Task/blob/master/public/imgs/attamps.png)
 - then you will be redirected to home page 
    * http://127.0.0.1:8000/home
 - if you tried to copy and paste the home url in other tab you will get alert prevent that 
 ![attamps](https://github.com/alihassan161820/GIG-Task/blob/master/public/imgs/alert.png)
