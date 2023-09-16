<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style_table.css');?>" >
    <title>Document</title>
   
</head>
<body>

    <table class="result">
    <td ><a href="<?php echo  base_url('/reg/register/'); ?>" name="register_form"><button>Create</button></a></td>
        <a href=""></a>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>ROll Namber</th>
            <th>Language 1</th>
            <th>Language 2</th>
            <th>Mathematics</th>
            <th>Science</th>
            <th>Social Science</th>
            <th>Update</th>
            <th>Delete</th>
            
        </tr>
        <?php
        if (isset($table)){
            foreach($table as $row){
                 ?>
                 <tr>
                    <td><?=$row->id?></td>
                    <td><?=$row->Student_Name?></td>
                    <td><?=$row->Roll_number?></td>
                    <td><?=$row->Mark1?></td>
                    <td><?=$row->Mark2?></td>
                    <td><?=$row->Mark3?></td>
                    <td><?=$row->Mark4?></td>
                    <td><?=$row->Mark5?></td>
                    <td ><a href="<?php echo  base_url('/reg/update/'.$row->id); ?>"><button>Update</button></a></td>
                    <td> <a href="<?php echo base_url('/reg/delete/'.$row->id);?>"><button>Delete</button></a></td>
                    
                 </tr>

<?php
            }
        }
        
     ?>   
     
     
     
    </table>
    
        
     
</body>
</html>