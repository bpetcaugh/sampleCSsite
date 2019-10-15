<!DOCTYPE html>
    <html>
               <!-- Metadata -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="description" content="Holy Ghost Prep Announcement Page">
        <link rel="shortcut icon" href="favicon.ico">


        <title>EHGP Announcements</title>

        <!-- JQuery and AJAX -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Our Custom JS -->
        <script src="textSearcher.js" charset="utf-8"></script>
        <script src="main_functions.js" charset="utf-8"></script>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- JS to set body HEX color as a cookie -->
        <script>
            function rgb2hex(rgb){
             rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
             return (rgb && rgb.length === 4) ? "#" +
              ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
              ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
              ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
            }

            $(document).ready(function(){
                let color = $("body").css("background-color");
                document.getElementById("settings-bg-color").value = rgb2hex(color);
                var domain = window.location.host.split(/\.(.+)/)[1];
                document.cookie = "css=" + rgb2hex(color) + "; path=/; domain=" + domain;
            });
        </script>
        <link rel="stylesheet" href="themes/main.css">
		<link rel="stylesheet" href="themes/style.css" type="text/css">
    </head>        

	<body>
            <div class='centered'>
                <div class='headerLeft'> 
                    </div>
                    <div class='headerCenter'>
                <p></p>
                    <center><img src="logo.png" class="headerMap" usemap="#headermap" alt="Holy Ghost Prep"/></center><p></p>
                    <!--<map name="headermap">
                        <area shape="rect" coords="225,34,615,123" href="http://www.holyghostprep.org" alt="HGP Home" />
                        <area shape="circle" coords="161,70,65" href="http://www.holyghostprep.org" alt="HGP Home" /> 

                        <area shape="rect" coords="695,9,788,24" href="http://www.holyghostprep.org/page.cfm?p=317" alt="News And Events" />
                        <area shape="rect" coords="815,9,909,24" href="http://www.holyghostprep.org/page.cfm?p=76" alt="Donate to HGP" />
                        <area shape="rect" coords="931,9,988,24" href="http://www.holyghostprep.org/page.cfm?p=299" alt="Calender" />

                        <area shape="rect" coords="644,125,715,144" href="http://www.holyghostprep.org/page.cfm?p=2" alt="About HGP" />
                        <area shape="rect" coords="740,125,808,144" href="http://www.holyghostprep.org/page.cfm?p=3" alt="Academics" />
                        <area shape="rect" coords="837,125,906,144" href="http://www.holyghostprep.org/page.cfm?p=4" alt="Admissions" />
                        <area shape="rect" coords="933,125,1008,144" href="http://www.holyghostprep.org/page.cfm?p=7" alt="Campus Life" />
                        <area shape="rect" coords="1028,125,1135,144" href="http://www.holyghostprep.org/page.cfm?p=5" alt="Alunmi & Parents" />
                    </map> -->
            </div>
            <center>
            <div class='headerRight'></div>  
		
<form action='https://ehgp.holyghostprep.org/announcements.php' style='display:inline-block'><input style='display:inline-block' type='submit' class='btn btn-primary announcements-btns' value='Announcements'>
		
<form action='https://ehgp.holyghostprep.org/BellSchedules.pdf' style='display:inline-block'><input style='display:inline-block' type='submit' class='btn btn-primary announcements-btns' value='Bell Schedules'>
		
<form action='https://ehgp.holyghostprep.org/scheduleViewS_2.php' style='display:inline-block'><input style='display:inline-block' type='submit' class='btn btn-primary announcements-btns' value='Computer Lab Usage'>
		
<form action='https://ehgp.holyghostprep.org/login_2.php?home=1' style='display:inline-block'><input style='display:inline-block' type='submit' class='btn btn-primary announcements-btns' value='Login'>
<p></p>

<td height="20px"></td></tr></table><table border=1  class="calendar">
    <tr><th class="weekDays">Sunday</th><th class="weekDays">Monday</th><th class="weekDays">Tuesday</th><th class="weekDays">Wednesday</th><th class="weekDays">Thursday</th><th class="weekDays">Friday</th><th class="weekDays">Saturday</th></tr>
    <tr><td class='valign'>06<br><p></p></td><td class='valign'>07<br><p>D</p></td><td class='valign'>08<br><p>E</p></td><td class='valign'>09<br><p>F</p></td><td class='valign'><b>10</b><p>G</p></td><td class='valign'>11<br><p>H</p></td><td class='valign'>12<br><p></p></td></tr><tr><td class='valign'>13<br><p></p></td><td class='valign'>14<br><p></p></td><td class='valign'>15<br><p>A</p></td><td class='valign'>16<br><p></p></td><td class='valign'>17<br><p>B</p></td><td class='valign'>18<br><p></p></td><td class='valign'>19<br><p></p></td></tr><tr><td class='valign'>20<br><p></p></td><td class='valign'>21<br><p></p></td><td class='valign'>22<br><p>C</p></td><td class='valign'>23<br><p>D</p></td><td class='valign'>24<br><p>E</p></td><td class='valign'>25<br><p>F</p></td><td class='valign'>26<br><p></p></td></tr><tr><td class='valign'>27<br><p></p></td><td class='valign'>28<br><p>G</p></td><td class='valign'>29<br><p>H</p></td><td class='valign'>30<br><p>A</p></td><td class='valign'>31<br><p>B</p></td><td class='valign'>01<br><p>C</p></td><td class='valign'>02<br><p></p></td></tr></table>
  
        <h6 class="centerWhite">EHGP Redesign by Robert Conway '13, Computer Science Advanced Topics Honors (CSATH) Class<br />
                With artistic advice from Mrs. Karen O'Brien Smallen, HGP Art Teacher,  and coding work by other CSATH Class members<br/>
				Vincent Pillinger '13, Frederick Kummer '13, and Christian Kardish '14, with advice and direction from <br />
                Mr. Michael Jacobs '01, Director of Technology, and Mr. Michael M. Meistering, Computer Science Teacher, Nick Madaio 20, Genius</h6>
                <!--</tr>//-->
        <!--</table> //-->
</center>
        </body>
        </html>