<!DOCTYPE html>
<html>

<head>
<title>JavaScript Basic Concepts</title>
</head>

<body>

<h1>Welcome to JavaScript Practice</h1>
<h2>Open your browser console to see the results. </h2>
<h3>(Right-click → Web view → Console)</h3>

<script>

console.log("Student Profile");
var name = "Naimul Islam";
var age = 24;
var is_student = true;
var cgpa = 3.1;
var semester = 9;
console.log("Name:", name);
console.log("Age:", age);
console.log("Is Student?", is_student);
console.log("CGPA:", cgpa);
console.log("Semester:", semester);

console.log("\nOperations.");
var x = 8;
var y = 4;
console.log("First value:", x);
console.log("Second value:", y);
console.log("Addition:", x+y);
console.log("Subtraction:", x-y);
console.log("Multiplication:", x*y);
console.log("Division:", x/y);
console.log("Remainder:", x%y);

console.log("\nVerification");
if (age >= 18) {
console.log(name + " is an adult.");
} else {
console.log(name + " is a minor.");
}

var mark = [87, 96, 75];
var totalMark = 0;
console.log("\nShow subjects Result");
var totalMarks = 0;
    for (var i = 0; i < mark.length; i++) {
        totalMark += mark[i];
        console.log("Subject " + (i + 1) + ": " + mark[i]);}

console.log("Total Marks:", totalMark, "out of", mark.length * 100);

function showMessage() {
alert("\nSummary: \nSubject 1: "+mark[0] + "\nSubject 2: "+mark[1] +"\nSubject 3: "+mark[2]);
console.log("Button clicked.");
}
</script>

<br><br>

<button onclick="showMessage()">Click for summary</button>

</body>
</html>