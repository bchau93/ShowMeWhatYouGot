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
        include('Student.php');
        
        
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'yo@yo.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $second = new Student();
        $second->surname = "Chau";
        $second->first_name = "Bryan";
        $second->add_email('home','bchau@bchau.com');
        $second->add_grade(95);
        $second->add_grade(100);
        $second->add_grade(98);
        $students['b123'] = $second;
        
        ksort($students);
        foreach ($students as $student)
            echo $student->toString();
        //echo "Hello...is anyone out there...";
        ?>
    </body>
</html>
