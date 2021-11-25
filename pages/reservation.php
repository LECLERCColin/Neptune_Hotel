

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Hotel Reservation Form </title>

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    
    <script type="text/javascript" src="reservation.js"></script>



    <script>
        function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            var resFacilities = document.getElementById("res_facilities").value;

            var total = (parseInt(roomType)*10) + ((roomNum)*2) + ((personNum)*3) + ((childNum)*2) + ((resFacilities)*5)

            document.getElementById("result").innerHTML = total;
        }
    </script>


</head>
<body>
     <div class="hotel_reserve_box">
         <h3> Hotel Reservation Form </h3><br>
         <form>
             <div class="form-group">
                 <label>Room/Suite Type</label>
                 <select class="form-control" id="room_type" onchange="finalCost()">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Standard </option>
                     <option value="2"> Deluxe </option>
                     <option value="3"> Superior Deluxe </option>
                     <option value="4"> Premier Deluxe  </option>
                     <option value="5"> Executive Suite </option>
                     <option value="6"> Junior Suite </option>
                     <option value="7"> Honeymoon Suite </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of room/suite</label>
                 <select class="form-control" id="room_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" id="person_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" id="child_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Restaurant facilities?</label>
                 <select class="form-control" id="res_facilities" onchange="finalCost()">
                     <option value="0" selected> Do you want restaurant facilities? </option>
                     <option value="2"> Yes </option>
                     <option value="0"> No </option>
                 </select>
             </div><br>
             <div class="form-group">
                 <label>Total Cost ($) : </label>
                 <span id="result" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
             </div>
         </form>
     </div>




     <div id="calendarMain" class="calendarMain"></div>
     <script type="text/javascript">
     //<![CDATA[
     var myCalendar = new jsSimpleDatePickr();
     myCalendar.CalAdd({
     'divId': 'calendarMain',
     'dateMask': 'JJ/MM/AAAA',
     'dateCentury': 20,
     'titleMask': 'M AAAA',
     'navType': '01',
     'classTable': 'jsCalendar',
     'classDay': 'day',
     'classDaySelected': 'selectedDay',
     'monthLst': ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
     'dayLst': ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
     'hideOnClick': false,
     'showOnLaunch': false
     });
     //]]>
     </script>




     <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
