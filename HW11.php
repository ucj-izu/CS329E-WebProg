<!DOCTYPE html>

<html lang="en">

<head>
   <title>Signup Sheet</title>
   <meta charset="UTF-8">
   <meta name="description" content="Signup for Shifts">
   <meta name="author" content="Ugo Izuegbunam">
   
</head> 

<style>

h2 {
    text-align: center;

}
table {
    text-align: center;
    margin-left:auto;
    margin-right:auto;
    height: 400px;
    width: 50%;
}

#submit {
    display: flex;
 margin: 0 auto;     
 justify-content: center;

}



</style>

<body>
<h2>Signup Sheet</h2>
<div id = 'form'>
<form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF'];?>'>

<?php

$name = $_POST['name[]'];
if (isset($a)) {
    $times = ['8:00 am', '9:00 am', '10:00 am', '11:00 am', '12:00 pm', '1:00 pm', '2:00 pm', '3:00 pm', '4:00 pm', '5:00 pm'];
    $filename = "signup.txt";

    // Open the text file for appending
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    $file = fopen($filename, "a");

    // Write each entry to the file
    for ($i = 0; $i < count($name); $i++) {
        if (!empty($name[$i]) && !in_array($name[$i], $lines)) {
            fwrite($file, $time[$i] . "  " . $name[$i] . "\n");
        }
}

fclose($file);

}

?>

<table border = '2'>
<tr>
        <td>
<label><b>Time</b> </label>  
        </td>
<td>
    <label> <b>Name</b> </label>
</td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 8:00 am </label> <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[0])) { echo htmlspecialchars($name[0]);} ?>' <?php if (!empty($name[0])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 9:00 am </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[1])) { echo htmlspecialchars($name[1]);} ?>' <?php if (!empty($name[1])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 10:00 am </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[2])) { echo htmlspecialchars($name[2]);} ?>' <?php if (!empty($name[2])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 11:00 am </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[3])) { echo htmlspecialchars($name[3]);} ?>' <?php if (!empty($name[3])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 12:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[4])) { echo htmlspecialchars($name[4]);} ?>' <?php if (!empty($name[4])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 1:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[5])) { echo htmlspecialchars($name[5]);} ?>' <?php if (!empty($name[5])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 2:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[6])) { echo htmlspecialchars($name[6]);} ?>' <?php if (!empty($name[6])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 3:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[7])) { echo htmlspecialchars($name[7]);} ?>' <?php if (!empty($name[7])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 4:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[8])) { echo htmlspecialchars($name[8]);} ?>' <?php if (!empty($name[8])) { echo 'disabled';} ?>>
    </td>
</tr>
<tr>
            <td>
    <label name = 'time[]'> 5:00 pm </label>  <br>
            </td>
    <td>
    <input name = 'name[]'  type = 'text' size = '25' value = '<?php if (!empty($name[9])) { echo htmlspecialchars($name[9]);} ?>' <?php if (!empty($name[9])) { echo 'disabled';} ?>>
    </td>
</tr>
    
</table>
<br><br>
<div id = 'submit'>
<input type = "submit" value = "Submit" >
</div>

</form>
</div>
</body>
</html>