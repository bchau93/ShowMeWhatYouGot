<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        /*
         * Includes Student class php file 
         */
        include('Student.php');
        
        //Creating student array
        $students = array();
        
        //Instantiating a Student
        $first = new Student();       
        //Set student surname to 'Doe'
        $first->surname = "Doe";
        //Set student first name to 'John'
        $first->first_name = "John";
        //email with key as Home
        $first->add_email('home', 'john@doe.com');
        //email with key as Work
        $first->add_email('work', 'yo@yo.com');
        //call Student add_grade function 
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        //Adding $first to array with key 'j123'
        $students['j123'] = $first;
        
        //Instantiating a Student
        $second = new Student();
        //Set student surname to 'Einstein'
        $second->surname = "Einstein";
        //Set student first name to 'Albert'
        $second->first_name = "Albert";
        //email with key as Home
        $second->add_email('home','albert@braniacs.com');
        //email with key as work1
        $second->add_email('work1','a_einstein@bcit.ca');
        //email with key as work2
        $second->add_email('work2','albert@physics.mit.edu');
        //call Student add_grade function 
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        //Adding $first to array with key 'a456'
        $students['a456'] = $second;
        
        //Instantiating a Student
        $second = new Student();
        //Set student surname to 'Chau'
        $second->surname = "Chau";
        //Set student first name to 'Bryan'
        $second->first_name = "Bryan";
        //email with key as Home
        $second->add_email('home','bchau@bchau.com');
        //call Student add_grade function 
        $second->add_grade(95);
        $second->add_grade(100);
        $second->add_grade(98);
        //Adding $first to array with key 'b123'
        $students['b123'] = $second;
        
        //Function to sort student array alphabetically via first name
        ksort($students);
        
        /* 
         * A foreach loop that calls the toString method of the 
         * student class for each student in the students array.
         */
        foreach ($students as $student)
            echo $student->toString();
        //echo "Hello...is anyone out there...";
        ?>
    </body>
</html>
