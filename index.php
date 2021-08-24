<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation</title>
    <style>
        .navbar{
            background-color: black;
            border-radius: 30px;
            
        }
        .navbar ul{
            overflow: auto;
        }
        .navbar li{
            float:left;
            list-style: none; 
            margin: 13px 20px;
            
        }
        .navbar li a{
            padding: 3px 3px;
            text-decoration: none;
            color: white;
        }
        .navbar li a:hover{
            color: red
        }
        .search{
            float: right;
            color: white;
            padding: 12px 75px;
        }
        .navbar input{
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px 17px;
            width: 129px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="form.php">FORM</a></li>
                <li><a href="show_data.php">SHOW</a></li>
                <li><a href="ajax_show.php">AJAX DISPLAY</a></li>
                <li><a href="calculate.php">STATISTIC OF THE DATABASE</a></li>
                <li><a href="filter_date.php">FILTER BY DATE</a></li>
                <
            </ul>
        </nav>
    </header>
    
    
    <style>
     h1{
    text-align: center;
    color: red;
    font-size: 40px;
    font-family: 'Roboto',sans-serif;
}
    p{
    font-size: 17px;
    color: blue;
    font-family: 'Sriacha',cursive;
    text-align: center;
}
    </style>
    <h1 >UNIVERSITY OF KALYANI</h1>
    <p>This is a website for University of Kalyni's US trip. On the above you will find different bars for different action.<br>
    1.FORM- It is for filling up the form who are willing to participate.<br>
    2.SHOW- Participant List. <br>
    3.AJAX DISPLAY- Dyanamic participant list. <br>
    4.STATISTIC OF DATABASE- It will different catagories.<br>
    5.FILTER BY DAY- It will filter the DB between two dates.<br>
    </p>
    
</body>

</html>
