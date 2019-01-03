<div aria-hidden="true" aria-expanded="false"  role="tabpanel" aria-labelledby="ui-id-7"
     id="awe-search-tabs-7" class="search-bus ui-tabs-panel ui-widget-content ui-corner-bottom">
    <h2>Search Now</h2>
    <form target="_blank" action="http://eeanpatterson.outsideagents.com/travel/cruise/search_adv.rvlx" method="" name='cruiseForm' class="cruise_class">
        <div class="form-group">
            <input type="hidden" name="cstid" value=””>
            <div class="form-elements">
                <label>Cruise Lines:</label>
                <div class="form-item">
                    <select name="VendorID" class="splashsearch vendor_id" data-validation='required' data-validation-error-msg="This field is required.">
                        <option value="" selected>Any cruise line</option>
                        <option value="70">AMA Waterways</option>
                        <option value="1591">Azamara Cruises</option>
                        <option value="1">Carnival Cruise Lines</option>
                        <option value="2">Celebrity Cruises</option>
                        <option value="16">Costa Cruise Lines</option>
                        <option value="3">Crystal Cruises</option>
                        <option value="17">Cunard Line Ltd</option>
                        <option value="20">Disney Cruise Line</option>
                        <option value="4">Holland America Line</option>
                        <option value="60">MSC Italian Cruises</option>
                        <option value="5">Norwegian Cruise Line</option>
                        <option value="61">Oceania Cruises</option>
                        <option value="6">Princess Cruises</option>
                        <option value="7">Regent Seven Seas</option>
                        <option value="8">Royal Caribbean</option>
                        <option value="18">Seabourn Cruise Line</option>
                        <option value="69">Sea Dream Yacht Club</option>
                        <option value="19">Silversea Cruises</option>
                        <option value="68">Star Clippers</option>
                        <option value="59">Viking River Cruises</option>
                        <option value="71">Voyages of Discovery</option>
                        <option value="9">Windstar Cruises</option>
                    </select>
                    <div class="error-message vendor_id_error"></div>

                </div>
            </div>
            <div class="form-elements">
                <label>Destination</label>
                <div class="form-item">
                    <select name="DestinationID" class="splashsearch destination_id" data-validation='required' data-validation-error-msg="This field is required.">
                        <option value="" selected>Any destination</option>
                        <option value="1">Africa</option>
                        <option value="2">Alaska</option>
                        <option value="4">Australia</option>
                        <option value="5">Bahamas</option>
                        <option value="6">Baltic Sea</option>
                        <option value="7">Bermuda</option>
                        <option value="78">Canada/New England</option>
                        <option value="45">Caribbean</option>
                        <option value="12">Caribbean – Eastern</option>
                        <option value="11">Caribbean – Southern</option>
                        <option value="13">Caribbean – Western</option>
                        <option value="14">Costa Rica</option>
                        <option value="49">Cruise To Nowhere</option>
                        <option value="47">Europe</option>
                        <option value="15">Europe – Northern</option>
                        <option value="16">Europe – Western</option>
                        <option value="17">Far East</option>
                        <option value="18">Greek Isles</option>
                        <option value="19">Hawaii</option>
                        <option value="22">Mediterranean</option>
                        <option value="23">Mexico</option>
                        <option value="61">New York</option>
                        <option value="26">New Zealand</option>
                        <option value="27">Orient</option>
                        <option value="29">Pacific Coastal</option>
                        <option value="50">Pacific Northwest</option>
                        <option value="30">Panama Canal</option>
                        <option value="31">Red Sea</option>
                        <option value="34">South America</option>
                        <option value="35">South Pacific</option>
                        <option value="3">Southeast Asia</option>
                        <option value="36">Tahiti</option>
                        <option value="38">Transatlantic</option>
                        <option value="39">Transcanal</option>
                        <option value="40">Transpacific</option>
                        <option value="42">World Cruise</option>
                    </select>
                    <div class="error-message destination_id_error"></div>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-elements">
                <label>Sailing Date:</label>
                <div class="form-item">
                    <select name="cruise_month" class="splashsearch" style="width : 100px;" data-validation='required' data-validation-error-msg="This field is required.">
                        <option value="0">All months</option>
                        <option value="1" >January</option>
                        <option value="2" >February</option>
                        <option value="3" >March</option>
                        <option value="4" >April</option>
                        <option value="5" >May</option>
                        <option value="6" >June</option>
                        <option value="7" >July</option>
                        <option value="8" selected>August</option>
                        <option value="9" >September</option>
                        <option value="10" >October</option>
                        <option value="11" >November</option>
                        <option value="12" >December</option>
                        </select>
                    <select name="cruise_year" class="splashsearch" style="width : 55px;" data-validation='required' data-validation-error-msg="This field is required.">
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        </select>
                </div>
            </div>
            <div class="form-elements">
                <label>How Many Nights?</label>
                <div class="form-item">
                    <select name="cruise_duration" class="splashsearch cruise_duration" data-validation='required' data-validation-error-msg="This field is required.">
                        <option value="">Any cruise length</option>
                        <option value="1-2">1-2 Night</option>
                        <option value=" 3-6">3-6 Nights</option>
                        <option value="7-9">7-9 Nights</option>
                        <option value=" 10-14">10-14 Nights</option>
                        <option value="14-9999">Over 14 Nights</option>
                    </select>
                    <div class="error-message cruise_duration_error"></div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <!--<input value="Search Now" type="submit">-->
            <input value="Search Now" type="button" onclick="validateInput()">
        </div>

    </form>
</div>
<script>
    function validateInput(){
        $(".error-message").html('');
        cruise_duration=$(".cruise_duration").val();
        vendor_id=$(".vendor_id").val();
        destination_id=$(".destination_id").val();
        flag=0;
        if(cruise_duration=="") {
            flag=1;
            $(".cruise_duration_error").html('This field is required');
        }
        if(vendor_id=="") {
            flag=1;
            $(".vendor_id_error").html('This field is required');
        }
        if(destination_id=="") {
            flag=1;
            $(".destination_id_error").html('This field is required');
        }
        if(flag==0)
           $(".cruise_class").submit();
    }
</script>