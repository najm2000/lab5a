<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "SHEHAB MOHAMMED "; 
        $matric_number = "AI230263"; 
        $course = "WEB"; 
        $year_of_study = "Second year "; 
        $address = "Johor jalan 22";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
    <td>Matric number</td>
    <td><?php echo $matric_number; ?></td>
  </tr>
  <tr>
    <td>Course</td>
    <td><?php echo $course; ?></td>
  </tr>
  <tr>
    <td>Year of study</td>
    <td><?php echo $year_of_study; ?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $address; ?></td>
  </tr>
    </table>
    
</body>
</html>

