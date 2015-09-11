<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author bchau93
 */
class Student {
    //put your code here
    
    /*
     * Student constructor with surname, first_name, emails(array)
     * , and grades(array) attributes.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array(); 
    }
    
    /*
     * A function used to add email address into 
     * an array with the provided key
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
        
    }
    
    /*
     * A function used to add grades to the array of grades
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
        
    }
    
    /*
     * A function used to get the average grade from 
     * the grades in the grade array. The average is 
     * the rounded via the round function.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return round($total / count($this->grades));
        
    }
    
    /*
     * This function formats the information of the student to
     * be displayed.
     */
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': '. $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
        
        
    }
}
