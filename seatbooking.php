<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Movie - ".$_GET['movie'].", Time - ".$_GET['time'];?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="  text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">  

   <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </script>

   <script type="text/javascript">
        $(document).ready(function(){
            $('.larger').click(function(){
                var text= "";
              
                $('.larger:checked').each(function(){
                    text+=$(this).val()+ ',';

                });
                text=text.substring(0,text.length-1);
                $('#selectedtext').val(text);

                var count = $("[type='checkbox']:checked").length;
                $('#count').val($("[type='checkbox']:checked").length);

                if(count == 8){
                    document.getElementById('notvalid').innerHTML="Maximun seat seleact 8"
            return false;
                }

        });
        });

        
        </script>
</head>
    <div>
    <div class="seat_heading">
<h3><center>BOOK YOUR SEAT NOW</center></h3>
</div>
   <?php
        include_once 'Database.php';
            $time = $_GET['time'];
            $movie=$_GET['movie'];
            $date= date("Y-m-d");

            $result = mysqli_query($conn,"SELECT * FROM customers WHERE show_time = '".$time."' && movie = '".$movie."' && payment_date = '".$date."'");

      ?><form method="post"><input type="hidden" name="t1" value="<?php      
      while($row = mysqli_fetch_array($result)) {
        echo $row['seat'];
        echo ",";
      }?>">
      <center><input type="submit" name="submit" class="btn btn-primary" value="Check Avaliable Seat"></center></form>
      <hr>

<form action="payment.php" method="post">
<div class="container">
    <?php if(isset($_POST['submit'])){
                    $seats= $_POST['t1'];
                    $seats1 = explode(",", $seats);
                 ?>       
    <div class="row">
        <div class="col-lg-6">
    <div class="seatCharts-container">
     
                
      
        <div class="front">SCREEN</div>
         <center><p id="notvalid" style="color: red; font-size: 20px;"></p></center>
        <div class="seat_type">Silver : 100</div>
        <div id="validated"></div>
      <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-5">
                
                <table>
                    <tr>
                        <td class="line" style="width: 10%;">I</td> 
                        <td><input type="checkbox" class="larger" name="seat[]" value="I1" <?php
                         if(in_array("I1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I2" <?php
                         if(in_array("I2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I3" <?php
                         if(in_array("I3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I4" <?php
                         if(in_array("I4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I5" <?php
                         if(in_array("I5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I6" <?php
                         if(in_array("I6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">H</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H1" <?php
                         if(in_array("H1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H2" <?php
                         if(in_array("H2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H3" <?php
                         if(in_array("H3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H4" <?php
                         if(in_array("H4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H5" <?php
                         if(in_array("H5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H6" <?php
                         if(in_array("H6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">G</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G1" <?php
                         if(in_array("G1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G2" <?php
                         if(in_array("G2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G3" <?php
                         if(in_array("G3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G4" <?php
                         if(in_array("G4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G5" <?php
                         if(in_array("G5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G6" <?php
                         if(in_array("G6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                </table>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-7">
                <div class="seattable" id="silver">
                <table>
                    <tr>
                        <td class="line" style="width: 10%;color:white;">I</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I7" <?php
                         if(in_array("I7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I8" <?php
                         if(in_array("I8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I9" <?php
                         if(in_array("I9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I10" <?php
                         if(in_array("I10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I11" <?php
                         if(in_array("I11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="I12" <?php
                         if(in_array("I12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;color:white;">H</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H7" <?php
                         if(in_array("H7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H8"<?php
                         if(in_array("H8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H9" <?php
                         if(in_array("H9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H10" <?php
                         if(in_array("H10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H11" <?php
                         if(in_array("H11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="H12" <?php
                         if(in_array("H12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;color:white;">G</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G7" <?php
                         if(in_array("G7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G8" <?php
                         if(in_array("G8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G9" <?php
                         if(in_array("G9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G10" <?php
                         if(in_array("G10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G11" <?php
                         if(in_array("G11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="G12" <?php
                         if(in_array("G12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
         <div class="seat_type">Gold : 150</div>

      <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-5">
                <table>
                    <tr>
                        <td class="line" style="width: 10%;">F</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F1" <?php
                         if(in_array("F1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F2" <?php
                         if(in_array("F2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F3" <?php
                         if(in_array("F3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F4" <?php
                         if(in_array("F4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F5"<?php
                         if(in_array("F5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F6"<?php
                         if(in_array("F6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">E</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E1" <?php
                         if(in_array("E1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E2"<?php
                         if(in_array("E2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E3" <?php
                         if(in_array("E3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E4" <?php
                         if(in_array("E4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E5" <?php
                         if(in_array("E5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E6" <?php
                         if(in_array("E6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">D</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D1" <?php
                         if(in_array("D1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D2" <?php
                         if(in_array("D2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D3" <?php
                         if(in_array("D3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D4" <?php
                         if(in_array("D4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D5" <?php
                         if(in_array("D5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D6" <?php
                         if(in_array("D6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">C</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C1" <?php
                         if(in_array("C1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C2" <?php
                         if(in_array("C2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C3" <?php
                         if(in_array("C3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C4" <?php
                         if(in_array("C4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C5" <?php
                         if(in_array("C5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C6" <?php
                         if(in_array("C6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;">B</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B1" <?php
                         if(in_array("B1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B2" <?php
                         if(in_array("B2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B3" <?php
                         if(in_array("B3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B4" <?php
                         if(in_array("B4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B5" <?php
                         if(in_array("B5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B6" <?php
                         if(in_array("B7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                </table>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-7">
                <div class="seattable" id="gold">
                <table>
                    <tr><td class="line" style="width: 10%;color:white;">F</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F7" <?php
                         if(in_array("F7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F8" <?php
                         if(in_array("F8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F9" <?php
                         if(in_array("F9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F10" <?php
                         if(in_array("F10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F11" <?php
                         if(in_array("F11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="F12" <?php
                         if(in_array("F12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr><td class="line" style="width: 10%;color:white;">
                        <td><input type="checkbox" class="larger" name="seat[]" value="E7" <?php
                         if(in_array("E7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E8" <?php
                         if(in_array("E8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E9" <?php
                         if(in_array("E9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E10" <?php
                         if(in_array("E10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E11" <?php
                         if(in_array("E11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="E12" <?php
                         if(in_array("E12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr><td class="line" style="width: 10%;color:white;">D</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D7" <?php
                         if(in_array("D7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D8" <?php
                         if(in_array("D8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D9" <?php
                         if(in_array("D9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D10" <?php
                         if(in_array("D10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D11" <?php
                         if(in_array("D11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="D12" <?php
                         if(in_array("D12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;color:white;">C</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C7" <?php
                         if(in_array("C7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C8" <?php
                         if(in_array("C8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C9" <?php
                         if(in_array("C9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C10" <?php
                         if(in_array("C10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C11" <?php
                         if(in_array("C11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="C12" <?php
                         if(in_array("C12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    <tr>
                        <td class="line" style="width: 10%;color:white;">B</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B7" <?php
                         if(in_array("B7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B8" <?php
                         if(in_array("B8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B9" <?php
                         if(in_array("B9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B10" <?php
                         if(in_array("B10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B11" <?php
                         if(in_array("B11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="B12" <?php
                         if(in_array("B12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
         <div class="seat_type">Platimun : 300</div>

      <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-5">
                <table>
                    <tr>
                        <td class="line" style="width: 10%;">A</td>
                        
                        <td><input type="checkbox" class="larger" name="seat[]" value="A1" <?php
                         if(in_array("A1",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A2" <?php
                         if(in_array("A2",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A3" <?php
                         if(in_array("A3",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A4" <?php
                         if(in_array("a4",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A5" <?php
                         if(in_array("a5",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A6" <?php
                         if(in_array("A6",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    
                </table>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-7">
                <div class="seattable">
                <table>
                    <tr><td class="line" style="width: 10%;color:white;">A</td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A7" <?php
                         if(in_array("A7",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A8" <?php
                         if(in_array("A8",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A9" <?php
                         if(in_array("A9",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A10" <?php
                         if(in_array("A10",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A11" <?php
                         if(in_array("A11",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                        <td><input type="checkbox" class="larger" name="seat[]" value="A12" <?php
                         if(in_array("A12",$seats1)){
                                    echo "disabled";
                                }
                    ?>></td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
    


    </div>
</div>
    <div class="col-lg-6">
       
        <table>
            <tr><td width="50%"><font color="blue" size="5px" style="font-family: Shruti;">Movie:</font></td>
                <td bgcolor="79F9E2"><center><font size=5 style="font-family: Shruti; "><?php echo $_GET['movie'];?></font></center></td>
            </tr>
            <tr><td width="50%"><font color="blue" size="5px" style="font-family: Shruti;">Time:</font></td>
                <td bgcolor="ECF68C"><center><font size=5 style="font-family: Shruti;"><?php echo $_GET['time'];?></font></center></td>
            </tr>
            <tr><td width="50%"><font color="blue" size="5px" style="font-family: Shruti;">Seat:</font></td>
                <td> <input type="text" id="selectedtext" name="seats" placeholder="selected checkboxs"></td>
            </tr>
            <tr><td width="50%"><font color="blue" size="5px"style="font-family: Shruti;">Total Seat:</font></td>
               <td> <input type="text" id="count" name="totalseat" placeholder="Total Seats"></td>
            </tr>  
            <input type="hidden" name="movie" value="<?php echo $_GET['movie'];?>">
            <input type="hidden" name="show" value="<?php echo $_GET['time'];?>">
</table>
<?php 
if (!isset($_SESSION['uname'])) {
  ?>
<div class="col-lg-12">
            <div class="form-group">
                     <a data-toggle="modal" data-target="#tailer_modal" class="form-control btn btn-primary py-2"><font style="color:white;">Payment Now</a>
                  </div>
    </div>
      <div class="modal fade" id="tailer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h3>You need to login</h3>
      <a class="btn btn-primary btn-sm" href="login_form.php">Login</a>
    </div>
  </div>
</div> 
  <?php
}else{
?>
   <div class="col-lg-12">
            <div class="form-group">
                    <input type="submit" value="Payment Now" name="submit" class="form-control btn btn-primary py-2">
                  </div>
    </div>


<?php
}
?>
<div id="count1"></div>
    </div>
</div>
    <?php
}
?>
</div>


         
</form>

</div>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
<script type="text/javascript">
     function validate()
{
 var error="";
 var name = document.getElementById( "seat" );


 if( name.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
</script>
</body>
</html>
