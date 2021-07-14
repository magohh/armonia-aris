    <style type="text/css">
      #repeat div { padding-top: 2px;  }
      #repeatList div { padding-top: 2px; padding-bottom: 2px; } 
    </style>
    <div id="repeat" style="display:none">
        <div>
            <label id="rl1">Repeats:</label>
            <select id="freq" name="freq">
                <option id="opt0" value="10">No</option>
                <option id="opt0" value="0">Daily</option>
                <option id="opt1" value="1">Every weekday (Monday to Friday)</option>
                <option id="opt2" value="2">Every Monday, Wednesday, and Friday</option>
                <option id="opt3" value="3">Every Tuesday, and Thursday</option>
                <option id="opt4" value="4">Weekly</option>
                <option id="opt5" value="5">Monthly</option>
                <option id="opt6" value="6">Yearly</option>
            </select>
        </div>
        <div id="repeatOptions" style="display:none">
            <div id="intervaldiv">
                <label id="rl2">Repeat every:</label>
                <select id="interval"></select> <span id="interval_label">weeks</span>
            </div>
            <div id="bydayweek">
                <label id="rl3">Repeat on:</label>
                <input id="bydaySU" class="bydayw" name="SU" type="checkbox"><span id="chk0">SU</span>
                <input id="bydayMO" class="bydayw" name="MO" type="checkbox"><span id="chk1">MO</span>
                <input id="bydayTU" class="bydayw" name="TU" type="checkbox"><span id="chk2">TU</span>
                <input id="bydayWE" class="bydayw" name="WE" type="checkbox"><span id="chk3">WE</span>
                <input id="bydayTH" class="bydayw" name="TH" type="checkbox"><span id="chk4">TH</span>
                <input id="bydayFR" class="bydayw" name="FR" type="checkbox"><span id="chk5">FR</span>
                <input id="bydaySA" class="bydayw" name="SA" type="checkbox"><span id="chk6">SA</span>
            </div>
            <div id="bydaymonth">
                <label id="rl4">Repeat by:</label>
                <input id="byday_m" class="bydaym" name="bydaym" type="radio" value="1" checked="checked"> <span id="bydaymonth1">day of the month</span>
                <input id="byday_w" class="bydaym" name="bydaym" type="radio" value="2"> <span id="bydaymonth2">day of the week</span>
            </div>
            <div class="clear"></div>
            <div>                
                <div class="fl">                    
                    <!--<div><input id="end_never" name="end" checked="" title="Ends never" type="radio"> <span id="end1">Never</span></div>-->
                    <div>Ends <input style="display:none" id="end_count" name="end" checked=""  title="Ends after a number of occurrences" type="radio"> <span id="end21">after</span> <select id="end_after" onchange="document.getElementById('end_count').checked=true;"></select> <span id="end22">occurrences</span> or <input style="display:none" id="end_until" name="end" title="Ends on a specified date" type="radio"> <span id="end3">on</span> <input size="10" id="end_until_input" value="" onchange="document.getElementById('end_until').checked=true;"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div style="display:none">
                <label id="rl7">Summary:</label>
                <span id="summary"></span>
            </div>
            <div>
                <label id="rl5">Starts on</label>
                <label id="starts" style="font-weight:bold;"></label>
                <label id="rl5"> and repeated on:</label>
            </div>
        </div>
        <input type="hidden" id="format" value="FREQ=DAILY" size=55 />
        <div id="repeatList" style="margin-left:10px;"></div>
    </div>
    <br />
    * Note: Repeat / recurrent options are displayed after selecting a time-slot in the calendar.