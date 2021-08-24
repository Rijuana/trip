
<!DOCTYPE html>
<html lang="en">
    <head>
       
    <title>show table</title>
    <meta charset="utf-8">
<!-- jquery file attached -->
<script src="jquery.js"></script>
<script>
//  ajax function 
$(document).ready(function(){
setInterval(function(){get_data()},2000);//refresh the page in every 2sec


function get_data()
{

    jQuery.ajax({
            type:"GET",
             url:"FINAL.PHP",//call final.php file
            data:"",
            beforeSend:function(){
            },
            complete:function(){
            },
            success:function(data){
                //alert (data)
                $("table").html(data);//receive data from final.php
                $.parseJSON(data);//prints the array received from final.php
            }
    });
}

});
</script>

</head>
<body>

<table border="1">
</table>
    
</body>
</html>