<?php
$scienceScore = 90;
$socialStudiesScore = 75; 
$mathScore = 80; 
$englishScore = 70; 
$averageScore = ($mathScore + $englishScore + $scienceScore + $socialStudiesScore) / 4;


if ($averageScore >= 90) {
    $finalGrade = 'A';
} elseif ($averageScore >= 80 && $averageScore < 90) {
    $finalGrade = 'B';
} elseif ($averageScore >= 70 && $averageScore < 80) {
    $finalGrade = 'C';
} elseif ($averageScore >= 60 && $averageScore < 70) {
    $finalGrade = 'D';
} else {    
    $finalGrade = 'F';
}


echo "Average score: " . $averageScore . "<br>";
echo "Final grade: " . $finalGrade.'<br>';
?>          

<?php
$nationality = "domestic"; // or "international"
$is_orphan = true; // or false
$a_level_points = 50;

// Evaluating the tuition based on the given rules
if ($nationality == "domestic" && !$is_orphan) {
    $tuition = 10000;
} elseif ($nationality == "international" && !$is_orphan) {
    $tuition = 20000;
} elseif ($nationality == "domestic" && $is_orphan && $a_level_points >= 45) {
    $tuition = 5000;
} elseif ($nationality == "domestic" && $is_orphan && $a_level_points < 45) {
    $tuition = 8000;
} elseif ($nationality == "international" && $is_orphan && $a_level_points >= 45) {
    $tuition = 15000;
} else {
    $tuition = 0; // An invalid combination of input values
}

// Outputting the tuition
if ($tuition > 0) {
    echo "The tuition for the student is $" . $tuition . ".";
} else {
    echo "Invalid combination of input values.";
}
?>
