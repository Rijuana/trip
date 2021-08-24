<?php

include 'connection.php';

?>
<table align="center" border="1px" style="" line-height:"10px">
<tr>
<th colspan="8"><h2>STUDENT RECORD</h2></th>
</tr>
<t>
<th>SL NO</th>
<th>NAME</th>
<th>AGE</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>OTHER</th>
<th>DATE</th>
</t>
<?php
$table=mysqli_query($conn,"SELECT * FROM trip");
while($row=mysqli_fetch_array($table))
{
    ?>
    <tr>
        <td><?php echo $row['sno'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['other'];?></td>
        <td><?php echo $row['dt'];?></td>
      
</tr>
<?php
}
?>
</table>