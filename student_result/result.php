<?php 

// PHP Program to Calculate Student Result Using Function and Switch-Case Statement
function result($subject1, $subject2, $subject3, $subject4, $subject5) {

    // Check if any subject's marks are out of range. The range should be between 0 and 100.
    if ($subject1 < 0 || $subject1 > 100 || $subject2 < 0 || $subject2 > 100 || $subject3 < 0 || $subject3 > 100 || $subject4 < 0 || $subject4 > 100 || $subject5 < 0 || $subject5 > 100) {
        
        return "Mark range is invalid. Each subject's marks should be between 0 and 100";
    
        // Check if any subject's marks are less than 33. If yes, print "Sorry! You are failed".
    } else if ($subject1 < 33 || $subject2 < 33 || $subject3 < 33 || $subject4 < 33 || $subject5 < 33) {
        return "Sorry! You are failed";

    }else {
    
        // Calculate total marks and average marks
        $marks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
        $average = $marks / 5;

        // Print total marks and average marks
        echo "Total Marks: " . $marks . "<br/>";
        echo "Average Marks: ". $average ."<br/>";

        // Print grade based on average marks by calling printGrade() function
        echo printGrade($average);
    }   
}

echo result(70, 60, 65, 75, 80);



// Create function to print grade based on average marks using switch-case
function printGrade($average) {
    
    switch ($average) {
        case $average >= 80:
            return "Grade: A+"; 
            break;  
        case $average >= 70:        
            return "Grade: A";
            break;
        case $average >= 60:
            return "Grade: A-";
            break;  
        case $average >= 50:
            return "Grade: B";  
            break;
        case $average >= 40:    
            return "Grade: C";  
            break;  
        case $average >= 33:    
            return "Grade: D";  
            break;
        default:
            return "Grade: F";
            break;
    }
}

