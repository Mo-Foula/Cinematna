<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>
        Movie Seat Selection Flat Responsive Widget Template :: w3layouts
    </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <script>
        addEventListener(
            "load",
            function () {
                setTimeout(hideURLbar, 0);
            },
            false
        );

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="css/trial.css" type="text/css" media="all" />

</head>

<body onload="onLoaderFunc()">
    <h1>Movie Seat Selection</h1>
    <div class="container">
        <div class="w3ls-reg" >
            <!-- input fields -->
            <div class="inputForm">
                <h2>fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-right">
                        <label>
                            Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" required min="1" />
                    </div>
                </div>
                <button onclick="takeData()">Start Selecting</button>

            </div>
            <!-- seat availabilty list -->
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <div id='generaterowshereplease'>
                
            </div>
            <script>
                //DUMMY DATA
                let seats = [
                    [-1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1],
                    [0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0],
                    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1],
                    [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0],
                    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0],

                    // b column fl a5r
                    // [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0],
                    // [0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 0],
                    // [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    // [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0],
                    // [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0],

                    //12
                ];

                generate_seats(seats);



                function generate_seats(seats) {
                    empty_rows = findEmtyrow(seats);
                    empty_cols = findEmtycolumn(seats);
                    // console.log('Empty rows and cols   '+empty_rows[0]+'      '+empty_cols[0]);
                    row_char = "@";
                    // document.write("<h1>" + row_char + "</h1>");

                    beggining(seats[0].length, empty_cols);
                    // seats.forEach((element) => {
                    //     row_char = nextCharacter(row_char);
                    //     generate_row(row_char, element);
                    // });

                    for (var i in seats) {
                        if (!empty_rows.includes(parseInt(i))) {
                            row_char = nextCharacter(row_char);
                            generate_row(row_char, seats[i]);
                        }
                        else
                            document.write('<tr><td></td></tr>');
                    }



                    document.write("</table></div>");
                }

                function findEmtyrow(seats) {
                    var empty_rows = [];
                    var bool;
                    var i = 0;
                    for (var i = 0; i < seats.length; i++) {
                        bool = false;
                        for (var j = 0; j < seats[i].length; j++) {
                            if (seats[i][j] == 1) {
                                bool = true;
                                break;
                            }
                        }
                        if (!bool)
                            empty_rows.push(i);
                    }
                    return empty_rows;
                }

                function findEmtycolumn(seats) {
                    var bool;
                    var empty_cols = [];
                    for (var i = 0; i < seats[0].length; i++) {
                        bool = false;
                        for (var j = 0; j < seats.length; j++) {
                            if (seats[j][i] == 1) {
                                bool = true;
                                break;
                            }
                        }
                        if (!bool)
                            empty_cols.push(i);
                    }
                    return empty_cols;
                }

                function nextCharacter(c) {
                    return String.fromCharCode(c.charCodeAt(0) + 1);
                }

                function beggining(N, empty_cols) {
                    document.write(`<div class=\"seatStructure txt-center\" style=\"overflow-x:auto;\">
                                    <table id=\"seatsBlock\">
                                             <p id=\"notification\"></p>
                                                <tr>
                                                    <td></td>`);
                    var skipped = 0;
                    for (var i = 0; i < N  ; i++) {
                        if (!empty_cols.includes(parseInt(i))) {
                            document.write('<td>' + (i + 1 - skipped) + '</td>');
                        } else {
                            document.write('<td></td>');
                            skipped++;
                        }
                    }

                    document.write(`</tr>`);
                }

                function generate_row(letter, array) {
                    document.write(`<tr><td>` + letter + `</td>`);
                    var counter = 0;
                    for (var i = 0; i < array.length; i++) {
                        if (array[i] == 1) {
                            document.write(
                                `
                            <td>
                                <input type=\"checkbox\" class=\"seats\" value=\"` +
                                letter +
                                (i + 1) +
                                `\">
                            </td>
                            `
                            );
                        } else if(array[i] == 0){
                            document.write("<td></td>");
                        }
                        else if (array[i] == -1){
                            document.write(
                                `
                            <td>
                                <input disabled type=\"checkbox\" class=\"seats lawena7mrplease\" value=\"` +
                                letter +// input[type=checkbox]:checked:before
                                (i + 1) +
                                `\">
                            </td>
                            `
                            );
                        }
                        //TODO lw ma7goz abl kda
                    }

                    document.write("</tr>");
                }
            </script>
            <div class="screen">
                <h2 class="wthree">Screen this way</h2>
            </div>
            <button onclick="updateTextArea()">Confirm Selection</button>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            
            <!-- details after booking displayed here -->
            <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                <table class="Displaytable w3ls-table" width="100%">
                    <tr>
                        <th>Name</th>
                        <th>Number of Seats</th>
                        <th>Seats</th>
                    </tr>
                    <tr>
                        <td>
                            <textarea id="nameDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="NumberDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="seatsDisplay"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- //details after booking displayed here -->
        </div>
    </div>
    <div class="copy-wthree">
        <p>
            © 2018 Movie Seat Selection . All Rights Reserved | Design by
            <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
        </p>
    </div>

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if (
                
                $("#Numseats").val().length == 0
            ) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                $(".lawena7mrplease").prop("disabled", true);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }

        function updateTextArea() {
            if ($("input:checked").length == $("#Numseats").val()) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNumberVals.push($("#Numseats").val());
                $("#seatsBlock :checked").each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying
                $("#nameDisplay").val(allNameVals);
                $("#NumberDisplay").val(allNumberVals);
                $("#seatsDisplay").val(allSeatsVals);
            } else {
                alert("Please select " + $("#Numseats").val() + " seats");
            }
        }

        function myFunction() {
            alert($("input:checked").length);
        }

        /*
                                                      function getCookie(cname) {
                                                          var name = cname + "=";
                                                          var ca = document.cookie.split(';');
                                                          for(var i = 0; i < ca.length; i++) {
                                                              var c = ca[i];
                                                              while (c.charAt(0) == ' ') {
                                                                  c = c.substring(1);
                                                              }
                                                              if (c.indexOf(name) == 0) {
                                                                  return c.substring(name.length, c.length);
                                                              }
                                                          }
                                                          return "";
                                                      }
                                                      */

        $(":checkbox").click(function () {
            if ($("input:checked").length == $("#Numseats").val()) {
                $(":checkbox").prop("disabled", true);
                $(":checked").prop("disabled", false);
            } else {
                $(":checkbox").prop("disabled", false);
            }
        });
    </script>
    <?php 
    require "trialphp.php"; 
    initializeData();
    ?>
    <!-- //script for seat selection -->
</body>

</html>