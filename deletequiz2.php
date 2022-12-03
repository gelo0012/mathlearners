<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="js/jquery.js" type="text/javascript"></script>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php 

include_once 'dbConnection.php';

echo '<a href="https://mathlearners.online/dash.php" style="color: green;">Back</a>';

    $result = mysqli_query($con, "SELECT * FROM unit1ez ORDER BY date DESC") or die('Error');
    echo '<br><div class="panel">
    <table class="" style"width: 100%;";>
    <tr>
    <td style="vertical-align:middle"><b>Number</b></td>
    <td style="vertical-align:middle"><b>Topic</b></td>
    <td style="vertical-align:middle"><b>Total question</b></td>
    <td style="vertical-align:middle"><b>Marks</b></td>
    <td style="vertical-align:middle"><b>Time limit</b></td>
    <td style="vertical-align:middle"><b>Action</b></td></tr>';
    

    echo '<br><p style="
    padding:5px;
    background:#e74c3c;
    color:white; 
    border-bottom-left-radius: 6px;
    border-bottom-right-radius:6px; 
    border-top-left-radius: 6px; 
    border-top-right-radius: 6px;">
    <i class="fa-solid fa-triangle-exclamation fa-fw fa-xl"></i> When the quiz is deleted, it cannot be restored, but you can control it using the main page, you can enable or disable the quiz. even if not deleted </p> <br>';
    
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        echo '
        <tr>
        <td style="vertical-align:middle">' . $c++ . '</td>
        <td style="vertical-align:middle">' . $title . '</td>
        <td style="vertical-align:middle">' . $total . '</td>
        <td style="vertical-align:middle">' . $correct * $total . '</td>
        <td style="vertical-align:middle">' . $time . '&nbsp;min</td>
        <td style="vertical-align:middle">

        <a href="update2.php?q=rmquiz&eid=' . $eid . '" class="btn" 
        style="
        padding:5px;
        background:#e74c3c;
        color:white; 
        border-bottom-left-radius: 6px;
        border-bottom-right-radius:6px; 
        border-top-left-radius: 6px; 
        border-top-right-radius: 6px;">Remove</span>
        </a>
        </td>
        </tr>';
    }
    $c = 0;
    echo '</table></div>';



    ?>
</body>
</html>