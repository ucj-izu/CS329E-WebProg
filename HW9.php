<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a1 = $_POST['answer1'];
$a2 = $_POST['answer2'];
$a3 = $_POST['answer3[]'];
$a4 = $_POST['answer4[]'];
$a5 = strtolower($_POST['answer5']);
$a6 = strtolower($_POST['answer6']);
$grade = 0;

if ($a1 == 'false') {
   $grade++;
}

if ($a2 == 'true') {
   $grade++;
}

if (!in_array('wrong', $a3)) {
   $grade++;
}

if (!in_array('wrong', $a4)) {
   $grade++;
}

if ($a5 == 'http') {
   $grade++;
}

if ($a6 == 'favicon') {
   $grade++;
}

if(!isset($a1, $a2, $a5, $a6) empty($a3) && empty($a4)) {
    echo "<script>alert('You have not answered a question!')</script>";
}
else {
    echo "<script>alert('Your grade is $grade / 6.')</script>";
}
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
   <title>CS 329E Quiz 1</title>
   <meta charset="UTF-8">
   <meta name="description" content="Quiz 1 in CS 329E">
   <meta name="author" content="Ugo Izuegbunam">
</head> 

<body>
<form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF'];?>' >
<h2>Quiz 1</h2>
<h2>CS 329E - Elements of Web Programming</h2>
<h2>September 8, 2019</h2>

<h3>True / False</h3>

<p><b>1.</b> 'URL' stands for Universal Reference Link.</p>

<input type = 'radio' id = 'true1' name = 'answer1' value = 'true'><label>True</label>
<input type = 'radio' id = 'false1' name = 'answer1' value = 'false'><label>False</label>

<p><b>2.</b> An Apple MacBook is an example of a Linux system.</p>

<input type = 'radio' id = 'true2' name = 'answer2' value = 'true'><label>True</label>
<input type = 'radio' id = 'false2' name = 'answer2' value = 'false'><label>False</label>

<h3>Multiple Choice</h3>

<p><b>3.</b> Which of these do NOT contribute to packet delay in a packet switching network?</p>

<input name = "answer3[]" type = "checkbox" value = "wrong" > <label> Processing delay at a router </label> <br>
<input name = "answer3[]" type = "checkbox" value = "right" > <label> CPU workload on a client </label> <br> 
<input name = "answer3[]" type = "checkbox" value = "wrong" > <label> Transmission delay along a communication link </label> <br>
<input name = "answer3[]" type = "checkbox" value = "wrong" > <label> Propagation delay</label> <br>


<p><b>4.</b> This Internet layer is responsible for creating the packets that move across the network.</p>

<input name = "answer4[]" type = "checkbox" value = "wrong" > <label> Physical </label> <br>
<input name = "answer4[]" type = "checkbox" value = "wrong" > <label> Data Link </label> <br> 
<input name = "answer4[]" type = "checkbox" value = "right" > <label> Network </label> <br>
<input name = "answer4[]" type = "checkbox" value = "wrong" > <label> Transport</label> <br>

<h3>Fill in the Blank</h3>

<p><b>5.</b> <input type = 'text' id = 'answer5' name = 'answer5'> is a networking protocol that runs over TCP/IP, and governs communication between web browsers and web servers.</p>

<p><b>6.</b> A small icon displayed in a browser table that identifies a website is called a <input type = 'text' id = 'answer6' name = 'answer6'> .</p>

<input type = "submit" value = "Grade" >
<input type = "reset" value = "Clear" >


</form>

</body>

</html>