<table border="1" style="background-color:green; color:yellow;" >
    <th>Email</th>
    <th>Phonr Numbrt</th>
    <th>Password</th>
     
<?php

include('function.php');

$select_query = "SELECT * FROM customer";
$data = $db_class->select($select_query);
while ($all_data = $data->fetch_object()) { ?>
    <tr>
        <td><?php echo $all_data->email; ?></td>
        <td><?php echo $all_data->phone; ?></td>
        <td><?php echo $all_data->password; ?></td>
         
    </tr>
<?php 
    }
?>
</table>        
