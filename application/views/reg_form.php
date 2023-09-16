<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style_form.css');?>" >
    <title>REGISTRATION FORM</title>
</head>
<body>
   <?php// echo form_open(); ?>
 <form action="<?= base_url('reg/savedata/')?>" method ="post" name="form">
 <h3>Registration </h3>
 <?php //echo validation_errors(); ?>
    <table>
        <tr>
           <td for=""><label for="">Name</label></td>
           <td>
            <input type="text" name="studentname" value="<?php //echo set_value('studentname');?>">
            <span><?php// echo form_error('studentname'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Roll Number</label></td>
           <td>
            <input type="text" name="rollnumber" value="<?php //echo set_value('rollnumber');?>">
            <span><?php //echo form_error('rollnumber'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Language 1</label></td>
           <td><input type="number" name="mark1" value="<?php //echo set_value('mark1');?>">
           <span><?php //echo form_error('mark1'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Language 2</label></td>
           <td><input type="number" name="mark2" value="<?php //echo set_value('mark2');?>">
           <span><?php// echo form_error('mark2'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Mathematics</label></td>
           <td><input type="number" name="mark3" value="<?php //echo set_value('mark3');?>">
           <span><?php //echo form_error('mark3'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Science</label></td>
           <td><input type="number" name="mark4" value="<?php //echo set_value('mark4');?>">
           <span><?php //echo form_error('mark4'); ?></span>
         </td> 
        </tr>
        <tr>
           <td for=""><label for="">Social Science</label></td>
           <td><input type="number" name="mark5" value="<?php// echo set_value('mark5');?>">
           <span><?php //echo form_error('mark5'); ?></span>
         </td> 
        </tr>
         <tr>
           <td></td>
           <td><button type="submit" name="submit" value="Submit">Submit</button></td> 
        </tr>

    </table>
 </form>
 <?php //echo form_close(); ?>

</body>
</html>