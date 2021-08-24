

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
setInterval(function(){get_data()},2000);


function get_data()
{

    jQuery.ajax({
            type:"GET",
            url:"ajax_get_data.php",
            data:"",
            beforeSend:function(){
            },
            complete:function(){
            },
            success:function(data){
                //alert (data)
                $("table").html(data);
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