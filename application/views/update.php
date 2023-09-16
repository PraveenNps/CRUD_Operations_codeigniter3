<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style_update.css');?>" >
    <title>Update data</title>

</head>
<body>
    <?php
    if(isset($data)){
        //print_r($data);
        ?>
        <form action="<?= base_url('reg/updatedata/'.$data->id)?>" method ="post">
 <h3>Update</h3>
 <table>
   
     <tr>
        <td for=""><label for="">Name</label></td>
        <td><input type="text" name="studentname" value="<?=$data->Student_Name?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Roll Number</label></td>
        <td><input type="text" name="rollnumber" value="<?=$data->Roll_number?>" ></td> 
     </tr>
     <tr>
        <td for=""><label for="">Language 1</label></td>
        <td><input type="number" name="mark1" value="<?=$data->Mark1?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Language 2</label></td>
        <td><input type="number" name="mark2" value="<?=$data->Mark2?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Mathematics</label></td>
        <td><input type="number" name="mark3" value="<?=$data->Mark3?>" ></td> 
     </tr>
     <tr>
        <td for=""><label for="">Science</label></td>
        <td><input type="number" name="mark4" value="<?=$data->Mark4?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Social Science</label></td>
        <td><input type="number" name="mark5" value="<?=$data->Mark5?>"></td> 
     </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="Update" value="Update">Update</button></td> 
     </tr>

 </table>
</form>
        <?php
    }
    ?>

    
</body>
</html>