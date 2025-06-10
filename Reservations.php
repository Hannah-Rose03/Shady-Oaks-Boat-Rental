<?php
require 'head.php';
?>
<body>
  <div>
    <div class="resdiv">
      <h1>
        Reserve a Pontoon Boat with us today!<br>
      </h1>
      <h2>
        <b><i>NOTE:</b>&nbsp; You do not have to fill out a reservation form for Canoes, Kayaks, or Stand-Up Paddldboards, they are first come, first serve.<br>
          Large parties wishing to rent out Canoes, Kayaks, or Stand-Up Paddleboards, please fill out a reservation form and fill out the comment section with the number of people in your party.</i><br>
      </h2><br><br>
    </div>
    <div class="formdiv">
      <form action="includes/res_submit.php" method="post">
        &emsp;<b>Name:<br><br>
        &emsp;&emsp;<input type="text" name="First" placeholder="First Name" required> &nbsp;
        <input type="text" name="Last" placeholder="Last Name" required><br><br>
        &emsp;Address:<br><br>
        &emsp;&emsp;<input type="text" name="Street" placeholder="Street Address" required><br><br>
        &emsp;&emsp;<input type="text" name="City" placeholder="City" required>&nbsp;&nbsp;
        <input type="text" name="State" placeholder="State/Proveince/Region" require><br><br>
        &emsp;&emsp;<input type="text" name="Zip" placeholder="Postal/Zip Code" require>&nbsp;&nbsp;
        <input type="text" name="Country" placeholder="Country" require><br><br>
        &emsp;Date of Birth:<br><br>
        &emsp;&emsp;<input type="date" name="DOB" required><br><br>
        &emsp;Reservation Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Reservation Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        How Many Hours:<br><br>
        &emsp;&emsp;<input type="date" name="Reservation_date" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="time" name="Reservation_time" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="Hours" min="2" max="12" required><br><br>
        &emsp;Home Phone:<br><br>
        &emsp;&emsp;<input type="tel" name="Home" placeholder="### - ### - ####" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        &emsp;Cell Phone:<br><br>
        &emsp;&emsp;<input type="tel" name="Cell" placeholder="### - ### - ####" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        <!--Email:</b> <i>(Optional)</i><br><br>
        <input type="email" name="Email" placeholder="example@mail.com"><br><br>-->
        &emsp;Select Rental Option:</b><br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental1">&nbsp;&nbsp;18FT Pontoon Boat<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental2">&nbsp;&nbsp;20FT Pontoon Boat<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental3">&nbsp;&nbsp;20FT Pontoon Boat With Tube<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental4">&nbsp;&nbsp;Canoe<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental5">&nbsp;&nbsp;Single Kayak<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental6">&nbsp;&nbsp;Tandem Kayak<br><br>
        &emsp;&emsp;<input type="checkbox" name="Rental7">&nbsp;&nbsp;Stand-up Paddleboard<br><br>
        &emsp;<b>Emergency Contact Informatin:<br>
        &emsp;<i>Emergency Contact CANNOT be on the boat with you!</i><br><br>
        &emsp;Emergency Contact Name:<br><br>
        &emsp;&emsp;<input type="text" name="E_First" placeholder="First Name" required> &nbsp;
        <input type="text" name="E_Last" placeholder="Last Name" required><br><br>
        &emsp;Emergency Work Phone:<br><br>
        &emsp;&emsp;<input type="tel" name="E_Work" placeholder="### - ### - ####" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        &emsp;Emergency Home Phone:<br><br>
        &emsp;&emsp;<input type="tel" name="E_Home" placeholder="### - ### - ####" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        &emsp;Emergency Cell Phone:<br><br>
        &emsp;&emsp;<input type="tel" name="E_Cell" placeholder="### - ### - ####" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        &emsp;Questions/Comments:</b><br><br>
        &emsp;&emsp;<textarea rows=10 cols=100 placeholder="Enter Your Questions/Comments Here" name="textbox"></textarea><br><br>
        &emsp;<button type="submit" name="submit"><strong>Submit</strong></button><br><br>
      </form>
    </div>
  </div>
</body>
