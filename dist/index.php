<?php include 'header.php'; ?>

        <section class="section section-banner">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-12 col-lg-4">
                        <amp-state id="formState">
                            <script type="application/json">
                               {
                                 "propertyFinalized": "",
                                 "occupation":""
                                }
                            </script>
                         </amp-state>
                        <form  method="post" class="form" action-xhr="/"  target="_top" custom-validation-reporting="show-all-on-submit">
                            <div class="form-group">
                                <select name="loanType" class="form-control" id="loanType" required>
                                    <option value="" selected>Loan Type</option>
                                    <option value=54>Buy Ready to Occupy Home</option>
                                    <option value=50>For Land Purchase</option>
                                    <option value=53>Transfer Exisitng Home Loan</option>
                                    <option value=49>Repair Renovate your Home</option>
                                </select>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="loanType">Select loan type</span>
           
                            </div>
                            <div class="form-group">
                                <div class=" form-inline">
                                    <label>Property Finalized</label> 
                              
                                    <div class="radio-box ml-auto">
                                        <div class="radio">
                                            <input type="radio"  name="property" class="radio-input" id="property-yes" value="1" on="change:AMP.setState({formState:{propertyFinalized:'1'}})" >
                                            <label for="property-yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <input  type="radio"  name="property" class="radio-input" id="property-no" value="0"  on="change:AMP.setState({formState:{propertyFinalized:'0'}})">
                                            <label for="property-no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="propertyShortlisted" id="propertyShortlisted" [value]="formState.propertyFinalized" hidden required/>
                             
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="propertyShortlisted">Did you finalized your property?</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number" maxlength="10" required pattern="[0-9]{10}"/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="mobileNumber">Enter your mobile number </span>
                                <span class="form-error" visible-when-invalid="patternMismatch" validation-for="mobileNumber">Enter 10 digits numbers only</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="monthlyIncome" name="monthlyIncome" placeholder="Monthly Income" required  pattern="\d+"/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="monthlyIncome">Enter a monthly income </span>
                                <span class="form-error" visible-when-invalid="patternMismatch" validation-for="monthlyIncome">Enter numbers only</span>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label>Occupation</label> 
                                    <div class="radio-box  ml-auto">
                                        <div class="radio">
                                            <input type="radio" name="employment" class="occupation-input" id="occupation-yes" value="Salaried" on="change:AMP.setState({formState:{occupation:'Salaried'}})">
                                            <label for="occupation-yes">Salaried</label>
                                        </div>
                                        <div class="radio">
                                            <input  type="radio"  name="employment" class="occupation-input" id="occupation-no" value="Self Employed" on="change:AMP.setState({formState:{occupation:'Self Employed'}})">
                                            <label for="occupation-no">Self Employed</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="employmentType" id="employmentType" [value]="formState.occupation" hidden required/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="employmentType">Choose your occupation type</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="loanAmount"  name="loanAmount" placeholder="Loan Amount"  maxlength="10" required  pattern="\d+"/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="loanAmount">Enter a loan amount</span>
                                <span class="form-error" visible-when-invalid="patternMismatch" validation-for="loanAmount">Enter numbers only</span>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="residenceCity" name="residenceCity" required>
                                    <option value="" disabled="" selected="">Select your City</option>
                                    <optgroup label="Metros">
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Navi Mumbai">Navi Mumbai</option>
                                        <option value="Thane">Thane</option>
                                        <option value="New Delhi">New Delhi</option>
                                        <option value="Gurgaon">Gurgaon</option>
                                        <option value="Faridabad">Faridabad</option>
                                        <option value="Ghaziabad">Ghaziabad</option>
                                        <option value="Noida">Noida</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Chennai">Chennai</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Pune">Pune</option>
                                    </optgroup>
                                    <optgroup label="Non Metros">
                                        <option value="Abohar">Abohar</option>
                                        <option value="Adilabad">Adilabad</option>
                                        <option value="Adilabad">Adilabad</option>
                                        <option value="Adoni">Adoni</option>
                                        <option value="Agartala">Agartala</option>
                                        <option value="Agra">Agra</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Ahmedgarh">Ahmedgarh</option>
                                        <option value="Ahmednagar">Ahmednagar</option>
                                        <option value="Ajmer">Ajmer</option>
                                        <option value="Ajnala">Ajnala</option>
                                        <option value="Akbarpur">Akbarpur</option>
                                        <option value="Akola">Akola</option>
                                        <option value="Akot">Akot</option>
                                        <option value="Alappuzha">Alappuzha</option>
                                        <option value="Aligarh">Aligarh</option>
                                        <option value="Alipurduar">Alipurduar</option>
                                        <option value="Alirajpur">Alirajpur</option>
                                        <option value="Allahabad">Allahabad</option>
                                        <option value="Almora">Almora</option>
                                        <option value="Alwar">Alwar</option>
                                        <option value="Amalapuram">Amalapuram</option>
                                        <option value="Amalner">Amalner</option>
                                        <option value="Ambaji">Ambaji</option>
                                        <option value="Ambala">Ambala</option>
                                        <option value="Ambejogai">Ambejogai</option>
                                        <option value="Ambikapur">Ambikapur</option>
                                        <option value="Ambur">Ambur</option>
                                        <option value="Amravati">Amravati</option>
                                        <option value="Amreli">Amreli</option>
                                        <option value="Amritsar">Amritsar</option>
                                        <option value="Amtala">Amtala</option>
                                        <option value="Anand">Anand</option>
                                        <option value="Anantapur">Anantapur</option>
                                        <option value="Anantnag">Anantnag</option>
                                        <option value="Angul">Angul</option>
                                        <option value="Anjar">Anjar</option>
                                        <option value="Aonla">Aonla</option>
                                        <option value="Arrah">Arrah</option>
                                        <option value="Asansol">Asansol</option>
                                        <option value="Assandh">Assandh</option>
                                        <option value="Athni">Athni</option>
                                        <option value="Auraiya">Auraiya</option>
                                        <option value="Aurangabad">Aurangabad</option>
                                        <option value="Avanashi">Avanashi</option>
                                        <option value="Azamgarh">Azamgarh</option>
                                        <option value="Baddi">Baddi</option>
                                        <option value="Badgam">Badgam</option>
                                        <option value="Baghpat">Baghpat</option>
                                        <option value="Bagnan">Bagnan</option>
                                        <option value="Bagru">Bagru</option>
                                        <option value="Bahadurpur">Bahadurpur</option>
                                        <option value="Baheri">Baheri</option>
                                        <option value="Balaghat">Balaghat</option>
                                        <option value="Ballarpur">Ballarpur</option>
                                        <option value="Ballia">Ballia</option>
                                        <option value="Baloda">Baloda</option>
                                        <option value="Balotra">Balotra</option>
                                        <option value="Balrampur">Balrampur</option>
                                        <option value="Banda">Banda</option>
                                        <option value="Banga">Banga</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Banka">Banka</option>
                                        <option value="Bankura">Bankura</option>
                                        <option value="Bannur">Bannur</option>
                                        <option value="Banswara">Banswara</option>
                                        <option value="Barabanki">Barabanki</option>
                                        <option value="Baran">Baran</option>
                                        <option value="Barbil">Barbil</option>
                                        <option value="Bargarh">Bargarh</option>
                                        <option value="Barh">Barh</option>
                                        <option value="Barhalganj">Barhalganj</option>
                                        <option value="Barmer">Barmer</option>
                                        <option value="Barnala">Barnala</option>
                                        <option value="Barpeta">Barpeta</option>
                                        <option value="Basavakalyan">Basavakalyan</option>
                                        <option value="Basti">Basti</option>
                                        <option value="Batala">Batala</option>
                                        <option value="Batlagundu">Batlagundu</option>
                                        <option value="Beawar">Beawar</option>
                                        <option value="Begowal">Begowal</option>
                                        <option value="Begun">Begun</option>
                                        <option value="Begusarai">Begusarai</option>
                                        <option value="Belgaum">Belgaum</option>
                                        <option value="Bellary">Bellary</option>
                                        <option value="Betul">Betul</option>
                                        <option value="Bhachau">Bhachau</option>
                                        <option value="Bhadohi">Bhadohi</option>
                                        <option value="Bhadrak">Bhadrak</option>
                                        <option value="Bhagalpur">Bhagalpur</option>
                                        <option value="Bhalki">Bhalki</option>
                                        <option value="Bhandara">Bhandara</option>
                                        <option value="Bhanpuri">Bhanpuri</option>
                                        <option value="Bharatpur">Bharatpur</option>
                                        <option value="Bharthana">Bharthana</option>
                                        <option value="Bharuch">Bharuch</option>
                                        <option value="Bhatapara">Bhatapara</option>
                                        <option value="Bhatinda">Bhatinda</option>
                                        <option value="Bhavnagar">Bhavnagar</option>
                                        <option value="Bhawanigarh">Bhawanigarh</option>
                                        <option value="Bhikhi">Bhikhi</option>
                                        <option value="Bhikhiwind">Bhikhiwind</option>
                                        <option value="Bhilwara">Bhilwara</option>
                                        <option value="Bhinga">Bhinga</option>
                                        <option value="Bhiwani">Bhiwani</option>
                                        <option value="Bhopal">Bhopal</option>
                                        <option value="Bhubaneswar">Bhubaneswar</option>
                                        <option value="Biaora">Biaora</option>
                                        <option value="Bidar">Bidar</option>
                                        <option value="Bijapur">Bijapur</option>
                                        <option value="Bijbehara">Bijbehara</option>
                                        <option value="Bijnor">Bijnor</option>
                                        <option value="Bikaner">Bikaner</option>
                                        <option value="Bilari">Bilari</option>
                                        <option value="Bindki">Bindki</option>
                                        <option value="Bodeli">Bodeli</option>
                                        <option value="Bokaro">Bokaro</option>
                                        <option value="Bolpur">Bolpur</option>
                                        <option value="Bongaigaon">Bongaigaon</option>
                                        <option value="Borsad">Borsad</option>
                                        <option value="Botad">Botad</option>
                                        <option value="Budaun">Budaun</option>
                                        <option value="Budhana">Budhana</option>
                                        <option value="Budhana">Budhana</option>
                                        <option value="Bulandshahar">Bulandshahar</option>
                                        <option value="Bundi">Bundi</option>
                                        <option value="Burhanpur">Burhanpur</option>
                                        <option value="Buxar">Buxar</option>
                                        <option value="Challakere">Challakere</option>
                                        <option value="Champa">Champa</option>
                                        <option value="Champhai">Champhai</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chandrapur">Chandrapur</option>
                                        <option value="Chennai">Chennai</option>
                                        <option value="Cherthala">Cherthala</option>
                                        <option value="Chhindwara">Chhindwara</option>
                                        <option value="Chidambaram">Chidambaram</option>
                                        <option value="Chikmagalur">Chikmagalur</option>
                                        <option value="Chikodi">Chikodi</option>
                                        <option value="Chitradurga">Chitradurga</option>
                                        <option value="Chittoor">Chittoor</option>
                                        <option value="Chittorgarh">Chittorgarh</option>
                                        <option value="Chomu">Chomu</option>
                                        <option value="Churachandpur">Churachandpur</option>
                                        <option value="Churu">Churu</option>
                                        <option value="Coimbatore">Coimbatore</option>
                                        <option value="Cuddalore">Cuddalore</option>
                                        <option value="Cuddapah">Cuddapah</option>
                                        <option value="Cuttack">Cuttack</option>
                                        <option value="Dabra">Dabra</option>
                                        <option value="Dadri">Dadri</option>
                                        <option value="Dahod">Dahod</option>
                                        <option value="Dakor">Dakor</option>
                                        <option value="Daman">Daman</option>
                                        <option value="Damanjodi">Damanjodi</option>
                                        <option value="Damoh">Damoh</option>
                                        <option value="Darbhanga">Darbhanga</option>
                                        <option value="Datia">Datia</option>
                                        <option value="Dausa">Dausa</option>
                                        <option value="Dehradun">Dehradun</option>
                                        <option value="Deoli">Deoli</option>
                                        <option value="Deoria">Deoria</option>
                                        <option value="Devakottai">Devakottai</option>
                                        <option value="Dewas">Dewas</option>
                                        <option value="Dhamnod">Dhamnod</option>
                                        <option value="Dhampur">Dhampur</option>
                                        <option value="Dhanbad">Dhanbad</option>
                                        <option value="Dhanera">Dhanera</option>
                                        <option value="Dhar">Dhar</option>
                                        <option value="Dharamkot">Dharamkot</option>
                                        <option value="Dharampur">Dharampur</option>
                                        <option value="Dharmapuri">Dharmapuri</option>
                                        <option value="Dharwad">Dharwad</option>
                                        <option value="Dhenkanal">Dhenkanal</option>
                                        <option value="Dholpur">Dholpur</option>
                                        <option value="Dhrangadhra">Dhrangadhra</option>
                                        <option value="Dhubri">Dhubri</option>
                                        <option value="Dhule">Dhule</option>
                                        <option value="Dhuri">Dhuri</option>
                                        <option value="Dibrugarh">Dibrugarh</option>
                                        <option value="Digboi">Digboi</option>
                                        <option value="Dimapur">Dimapur</option>
                                        <option value="Dindigul">Dindigul</option>
                                        <option value="Dinhata">Dinhata</option>
                                        <option value="Diphu">Diphu</option>
                                        <option value="Diu">Diu</option>
                                        <option value="Dungarpur">Dungarpur</option>
                                        <option value="Durg">Durg</option>
                                        <option value="Durgapur">Durgapur</option>
                                        <option value="Dwarka">Dwarka</option>
                                        <option value="Egra">Egra</option>
                                        <option value="Ellenabad">Ellenabad</option>
                                        <option value="Ernakulam">Ernakulam</option>
                                        <option value="Erode">Erode</option>
                                        <option value="Etah">Etah</option>
                                        <option value="Etawah">Etawah</option>
                                        <option value="Faizabad">Faizabad</option>
                                        <option value="Faridabad">Faridabad</option>
                                        <option value="Faridkot">Faridkot</option>
                                        <option value="Fatehpur">Fatehpur</option>
                                        <option value="Firozabad">Firozabad</option>
                                        <option value="Forbesganj">Forbesganj</option>
                                        <option value="Gadag">Gadag</option>
                                        <option value="Gadarpur">Gadarpur</option>
                                        <option value="Gajraula">Gajraula</option>
                                        <option value="Ganaur">Ganaur</option>
                                        <option value="Ganderbal">Ganderbal</option>
                                        <option value="Gandevi">Gandevi</option>
                                        <option value="Gandhi Nagar">Gandhi Nagar</option>
                                        <option value="Gangawati">Gangawati</option>
                                        <option value="Gangtok">Gangtok</option>
                                        <option value="Gaya">Gaya</option>
                                        <option value="Ghanaur">Ghanaur</option>
                                        <option value="Ghatampur">Ghatampur</option>
                                        <option value="Ghatshila">Ghatshila</option>
                                        <option value="Ghaziabad">Ghaziabad</option>
                                        <option value="Ghosi">Ghosi</option>
                                        <option value="Gidderbaha">Gidderbaha</option>
                                        <option value="Giridih">Giridih</option>
                                        <option value="Goalpara">Goalpara</option>
                                        <option value="Godda">Godda</option>
                                        <option value="Gokak">Gokak</option>
                                        <option value="Gonda">Gonda</option>
                                        <option value="Gondia">Gondia</option>
                                        <option value="Gorakhpur">Gorakhpur</option>
                                        <option value="Goraya">Goraya</option>
                                        <option value="Gulbarga">Gulbarga</option>
                                        <option value="Gumla">Gumla</option>
                                        <option value="Guna">Guna</option>
                                        <option value="Guntur">Guntur</option>
                                        <option value="Gurdaspur">Gurdaspur</option>
                                        <option value="Gurgaon">Gurgaon</option>
                                        <option value="Guwahati">Guwahati</option>
                                        <option value="Gwalior">Gwalior</option>
                                        <option value="Hajipur">Hajipur</option>
                                        <option value="Haldia">Haldia</option>
                                        <option value="Haldwani">Haldwani</option>
                                        <option value="Handwara">Handwara</option>
                                        <option value="Hansi">Hansi</option>
                                        <option value="Hanumangarh">Hanumangarh</option>
                                        <option value="Harda">Harda</option>
                                        <option value="Hardoi">Hardoi</option>
                                        <option value="Haridwar">Haridwar</option>
                                        <option value="Hassan">Hassan</option>
                                        <option value="Hata">Hata</option>
                                        <option value="Hathras">Hathras</option>
                                        <option value="Haveri">Haveri</option>
                                        <option value="Himatnagar">Himatnagar</option>
                                        <option value="Hindupur">Hindupur</option>
                                        <option value="Hinganghat">Hinganghat</option>
                                        <option value="Hingoli">Hingoli</option>
                                        <option value="Hojai">Hojai</option>
                                        <option value="Hooghly">Hooghly</option>
                                        <option value="Hoshiarpur">Hoshiarpur</option>
                                        <option value="Hospet">Hospet</option>
                                        <option value="Hosur">Hosur</option>
                                        <option value="Howrah">Howrah</option>
                                        <option value="Hubli">Hubli</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Ichalkaranji">Ichalkaranji</option>
                                        <option value="Idar">Idar</option>
                                        <option value="Imphal">Imphal</option>
                                        <option value="Indore">Indore</option>
                                        <option value="Islampur">Islampur</option>
                                        <option value="Itarsi">Itarsi</option>
                                        <option value="Jabalpur">Jabalpur</option>
                                        <option value="Jagatsinghapur">Jagatsinghapur</option>
                                        <option value="Jagdalpur">Jagdalpur</option>
                                        <option value="Jahangirabad">Jahangirabad</option>
                                        <option value="Jaipur">Jaipur</option>
                                        <option value="Jaitu">Jaitu</option>
                                        <option value="Jalalabad">Jalalabad</option>
                                        <option value="Jalalpur">Jalalpur</option>
                                        <option value="Jalandhar">Jalandhar</option>
                                        <option value="Jalgaon">Jalgaon</option>
                                        <option value="Jalna">Jalna</option>
                                        <option value="Jalore">Jalore</option>
                                        <option value="Jamkhandi">Jamkhandi</option>
                                        <option value="Jammu">Jammu</option>
                                        <option value="Jamnagar">Jamnagar</option>
                                        <option value="Jangipur">Jangipur</option>
                                        <option value="Jasdan">Jasdan</option>
                                        <option value="Jatani">Jatani</option>
                                        <option value="Jaunpur">Jaunpur</option>
                                        <option value="Jaysingpur">Jaysingpur</option>
                                        <option value="Jhajjar">Jhajjar</option>
                                        <option value="Jhalawar">Jhalawar</option>
                                        <option value="Jhanjharpur">Jhanjharpur</option>
                                        <option value="Jhansi">Jhansi</option>
                                        <option value="Jharsuguda">Jharsuguda</option>
                                        <option value="Jhumri Tilaiya">Jhumri Tilaiya</option>
                                        <option value="Jhunjhunu">Jhunjhunu</option>
                                        <option value="Jind">Jind</option>
                                        <option value="Joda">Joda</option>
                                        <option value="Jodhpur">Jodhpur</option>
                                        <option value="Jorhat">Jorhat</option>
                                        <option value="Jowai">Jowai</option>
                                        <option value="Joya">Joya</option>
                                        <option value="Junagadh">Junagadh</option>
                                        <option value="Kadi">Kadi</option>
                                        <option value="Kagal">Kagal</option>
                                        <option value="Kaithal">Kaithal</option>
                                        <option value="Kakinada">Kakinada</option>
                                        <option value="Kalaamb">Kalaamb</option>
                                        <option value="Kalanaur">Kalanaur</option>
                                        <option value="Kanakapura">Kanakapura</option>
                                        <option value="Kanchipuram">Kanchipuram</option>
                                        <option value="Kandla">Kandla</option>
                                        <option value="Kangra">Kangra</option>
                                        <option value="Kanhangad">Kanhangad</option>
                                        <option value="Kannauj">Kannauj</option>
                                        <option value="Kanpur">Kanpur</option>
                                        <option value="Kantabanji">Kantabanji</option>
                                        <option value="Kapurthala">Kapurthala</option>
                                        <option value="Karaikal">Karaikal</option>
                                        <option value="Karaikudi">Karaikudi</option>
                                        <option value="Karimganj">Karimganj</option>
                                        <option value="Karnal">Karnal</option>
                                        <option value="Kartarpur">Kartarpur</option>
                                        <option value="Karur">Karur</option>
                                        <option value="Karwar">Karwar</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                        <option value="Kathua">Kathua</option>
                                        <option value="Katihar">Katihar</option>
                                        <option value="Katni">Katni</option>
                                        <option value="Katol">Katol</option>
                                        <option value="Katra">Katra</option>
                                        <option value="Kekri">Kekri</option>
                                        <option value="Kendrapara">Kendrapara</option>
                                        <option value="Khagaria">Khagaria</option>
                                        <option value="Khalilabad">Khalilabad</option>
                                        <option value="Khammam">Khammam</option>
                                        <option value="Khammam">Khammam</option>
                                        <option value="Khandwa">Khandwa</option>
                                        <option value="Kharagpur">Kharagpur</option>
                                        <option value="Kharar">Kharar</option>
                                        <option value="Khargone">Khargone</option>
                                        <option value="Khatauli">Khatauli</option>
                                        <option value="Kheda">Kheda</option>
                                        <option value="Khunti">Khunti</option>
                                        <option value="Kishangarh">Kishangarh</option>
                                        <option value="Kochi">Kochi</option>
                                        <option value="Kodaikanal">Kodaikanal</option>
                                        <option value="Kodungallur">Kodungallur</option>
                                        <option value="Kohima">Kohima</option>
                                        <option value="Kokrajhar">Kokrajhar</option>
                                        <option value="Kolhapur">Kolhapur</option>
                                        <option value="Kolkata">Kolkata</option>
                                        <option value="Kollam">Kollam</option>
                                        <option value="Koppal">Koppal</option>
                                        <option value="Korba">Korba</option>
                                        <option value="Kota">Kota</option>
                                        <option value="Kotputli">Kotputli</option>
                                        <option value="Kottayam">Kottayam</option>
                                        <option value="Kozhikode">Kozhikode</option>
                                        <option value="Krishnagar">Krishnagar</option>
                                        <option value="Kudal">Kudal</option>
                                        <option value="Kullu">Kullu</option>
                                        <option value="Kumta">Kumta</option>
                                        <option value="Kurali">Kurali</option>
                                        <option value="Kurnool">Kurnool</option>
                                        <option value="Kurukshetra">Kurukshetra</option>
                                        <option value="Lakhimpur">Lakhimpur</option>
                                        <option value="Lalitpur">Lalitpur</option>
                                        <option value="Latur">Latur</option>
                                        <option value="Leh">Leh</option>
                                        <option value="Lehragaga">Lehragaga</option>
                                        <option value="Lucknow">Lucknow</option>
                                        <option value="Ludhiana">Ludhiana</option>
                                        <option value="Lunawada">Lunawada</option>
                                        <option value="Lunglei">Lunglei</option>
                                        <option value="Macherla">Macherla</option>
                                        <option value="Machhiwara">Machhiwara</option>
                                        <option value="Madhepura">Madhepura</option>
                                        <option value="Madhupur">Madhupur</option>
                                        <option value="Madikeri">Madikeri</option>
                                        <option value="Madurai">Madurai</option>
                                        <option value="Mahabubnagar">Mahabubnagar</option>
                                        <option value="Maharajganj">Maharajganj</option>
                                        <option value="Mahilpur">Mahilpur</option>
                                        <option value="Mahoba">Mahoba</option>
                                        <option value="Mainpuri">Mainpuri</option>
                                        <option value="Majitha">Majitha</option>
                                        <option value="Makhu">Makhu</option>
                                        <option value="Malda">Malda</option>
                                        <option value="Malegaon">Malegaon</option>
                                        <option value="Malout">Malout</option>
                                        <option value="Malur">Malur</option>
                                        <option value="Manavadar">Manavadar</option>
                                        <option value="Mandi">Mandi</option>
                                        <option value="Mandla">Mandla</option>
                                        <option value="Mandsaur">Mandsaur</option>
                                        <option value="Mandvi">Mandvi</option>
                                        <option value="Mandya">Mandya</option>
                                        <option value="Mangaldoi">Mangaldoi</option>
                                        <option value="Mangalore">Mangalore</option>
                                        <option value="Markapur">Markapur</option>
                                        <option value="Mathura">Mathura</option>
                                        <option value="Maur">Maur</option>
                                        <option value="Mawana">Mawana</option>
                                        <option value="Medak">Medak</option>
                                        <option value="Medinipur">Medinipur</option>
                                        <option value="Meerut">Meerut</option>
                                        <option value="Mehsana">Mehsana</option>
                                        <option value="Mirzapur">Mirzapur</option>
                                        <option value="Mithapur">Mithapur</option>
                                        <option value="Moga">Moga</option>
                                        <option value="Mohali">Mohali</option>
                                        <option value="Mohammadabad">Mohammadabad</option>
                                        <option value="Mokokchung">Mokokchung</option>
                                        <option value="Moradabad">Moradabad</option>
                                        <option value="Morena">Morena</option>
                                        <option value="Morinda">Morinda</option>
                                        <option value="Motihari">Motihari</option>
                                        <option value="Mubarakpur">Mubarakpur</option>
                                        <option value="Mudhol">Mudhol</option>
                                        <option value="Muktsar">Muktsar</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Mundra">Mundra</option>
                                        <option value="Mungeli">Mungeli</option>
                                        <option value="Murgud">Murgud</option>
                                        <option value="Mussoorie">Mussoorie</option>
                                        <option value="Muvattupuzha">Muvattupuzha</option>
                                        <option value="Muzaffarpur">Muzaffarpur</option>
                                        <option value="Mysore">Mysore</option>
                                        <option value="Nabha">Nabha</option>
                                        <option value="Nadiad">Nadiad</option>
                                        <option value="Nagaon">Nagaon</option>
                                        <option value="Nagapattinam">Nagapattinam</option>
                                        <option value="Nagaur">Nagaur</option>
                                        <option value="Nagpur">Nagpur</option>
                                        <option value="Nahan">Nahan</option>
                                        <option value="Nainital">Nainital</option>
                                        <option value="Nakodar">Nakodar</option>
                                        <option value="Nalagarh">Nalagarh</option>
                                        <option value="Nalbari">Nalbari</option>
                                        <option value="Nalgonda">Nalgonda</option>
                                        <option value="Namakkal">Namakkal</option>
                                        <option value="Namchi">Namchi</option>
                                        <option value="Nanded">Nanded</option>
                                        <option value="Nandurbar">Nandurbar</option>
                                        <option value="Nandyal">Nandyal</option>
                                        <option value="Nanjangud">Nanjangud</option>
                                        <option value="Nanpara">Nanpara</option>
                                        <option value="Naraingarh">Naraingarh</option>
                                        <option value="Nashik">Nashik</option>
                                        <option value="Navi Mumbai">Navi Mumbai</option>
                                        <option value="Neemuch">Neemuch</option>
                                        <option value="New Delhi">New Delhi</option>
                                        <option value="Nellore">Nellore</option>
                                        <option value="Nilambur">Nilambur</option>
                                        <option value="Nimbahera">Nimbahera</option>
                                        <option value="Noida">Noida</option>
                                        <option value="Nokha">Nokha</option>
                                        <option value="Nongpoh">Nongpoh</option>
                                        <option value="Nongstoin">Nongstoin</option>
                                        <option value="North 24 Parganas">North 24 Parganas</option>
                                        <option value="North Goa">North Goa</option>
                                        <option value="Numaligarh">Numaligarh</option>
                                        <option value="Obra">Obra</option>
                                        <option value="Oddanchatram">Oddanchatram</option>
                                        <option value="Pachora">Pachora</option>
                                        <option value="Padra">Padra</option>
                                        <option value="Padrauna">Padrauna</option>
                                        <option value="Palakkad">Palakkad</option>
                                        <option value="Palampur">Palampur</option>
                                        <option value="Palanpur">Palanpur</option>
                                        <option value="Palavakkam">Palavakkam</option>
                                        <option value="Pali">Pali</option>
                                        <option value="Palladam">Palladam</option>
                                        <option value="Panchkula">Panchkula</option>
                                        <option value="Panchkula">Panchkula</option>
                                        <option value="Panipat">Panipat</option>
                                        <option value="Panna">Panna</option>
                                        <option value="Paralakhemundi">Paralakhemundi</option>
                                        <option value="Pathanamthitta">Pathanamthitta</option>
                                        <option value="Patiala">Patiala</option>
                                        <option value="Patna">Patna</option>
                                        <option value="Pattamundai">Pattamundai</option>
                                        <option value="Payal">Payal</option>
                                        <option value="Peddapuram">Peddapuram</option>
                                        <option value="Perambalur">Perambalur</option>
                                        <option value="Perinthalmanna">Perinthalmanna</option>
                                        <option value="Perumbavoor">Perumbavoor</option>
                                        <option value="Phalodi">Phalodi</option>
                                        <option value="Phaltan">Phaltan</option>
                                        <option value="Phulpur">Phulpur</option>
                                        <option value="Pilibanga">Pilibanga</option>
                                        <option value="Pilibhit">Pilibhit</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Ponnur">Ponnur</option>
                                        <option value="Porbandar">Porbandar</option>
                                        <option value="Pudukkottai">Pudukkottai</option>
                                        <option value="Pulwama">Pulwama</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Puri">Puri</option>
                                        <option value="Purnia">Purnia</option>
                                        <option value="Puttur">Puttur</option>
                                        <option value="Qadian">Qadian</option>
                                        <option value="Radhanpur">Radhanpur</option>
                                        <option value="Rahon">Rahon</option>
                                        <option value="Rahuri">Rahuri</option>
                                        <option value="Raichur">Raichur</option>
                                        <option value="Raiganj">Raiganj</option>
                                        <option value="Raikot">Raikot</option>
                                        <option value="Raipur">Raipur</option>
                                        <option value="Raisen">Raisen</option>
                                        <option value="Rajahmundry">Rajahmundry</option>
                                        <option value="Rajam">Rajam</option>
                                        <option value="Rajgarh">Rajgarh</option>
                                        <option value="Rajgir">Rajgir</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Rajpipla">Rajpipla</option>
                                        <option value="Ramanathapuram">Ramanathapuram</option>
                                        <option value="Ramapuram">Ramapuram</option>
                                        <option value="Ramgarh">Ramgarh</option>
                                        <option value="Ramnagar">Ramnagar</option>
                                        <option value="Rampur">Rampur</option>
                                        <option value="Ranbirsinghpora">Ranbirsinghpora</option>
                                        <option value="Ranchi">Ranchi</option>
                                        <option value="Rangareddy">Rangareddy</option>
                                        <option value="Rangpo">Rangpo</option>
                                        <option value="Ranibennur">Ranibennur</option>
                                        <option value="Ratlam">Ratlam</option>
                                        <option value="Ratnagiri">Ratnagiri</option>
                                        <option value="Raver">Raver</option>
                                        <option value="Rayagada">Rayagada</option>
                                        <option value="Rewa">Rewa</option>
                                        <option value="Rewa">Rewa</option>
                                        <option value="Rewari">Rewari</option>
                                        <option value="Rishikesh">Rishikesh</option>
                                        <option value="Rohru">Rohru</option>
                                        <option value="Rohtak">Rohtak</option>
                                        <option value="Roing">Roing</option>
                                        <option value="Rourkela">Rourkela</option>
                                        <option value="Rudrapur">Rudrapur</option>
                                        <option value="Sachin">Sachin</option>
                                        <option value="Safidon">Safidon</option>
                                        <option value="Saharanpur">Saharanpur</option>
                                        <option value="Saiha">Saiha</option>
                                        <option value="Salem">Salem</option>
                                        <option value="Salempur">Salempur</option>
                                        <option value="Samba">Samba</option>
                                        <option value="Sambalpur">Sambalpur</option>
                                        <option value="Sangli">Sangli</option>
                                        <option value="Sangrur">Sangrur</option>
                                        <option value="Sardulgarh">Sardulgarh</option>
                                        <option value="Satana">Satana</option>
                                        <option value="Satara">Satara</option>
                                        <option value="Satna">Satna</option>
                                        <option value="Sedam">Sedam</option>
                                        <option value="Sehore">Sehore</option>
                                        <option value="Senapati">Senapati</option>
                                        <option value="Seoni">Seoni</option>
                                        <option value="Shahdol">Shahdol</option>
                                        <option value="Shahganj">Shahganj</option>
                                        <option value="Shahjahanpur">Shahjahanpur</option>
                                        <option value="Shahkot">Shahkot</option>
                                        <option value="Shahpura">Shahpura</option>
                                        <option value="Shahpura">Shahpura</option>
                                        <option value="Sheopur">Sheopur</option>
                                        <option value="Shillong">Shillong</option>
                                        <option value="Shimla">Shimla</option>
                                        <option value="Shimoga">Shimoga</option>
                                        <option value="Shirur">Shirur</option>
                                        <option value="Shivpuri">Shivpuri</option>
                                        <option value="Sibsagar">Sibsagar</option>
                                        <option value="Sidhi">Sidhi</option>
                                        <option value="Sikar">Sikar</option>
                                        <option value="Silchar">Silchar</option>
                                        <option value="Sillod">Sillod</option>
                                        <option value="Simdega">Simdega</option>
                                        <option value="Sinnar">Sinnar</option>
                                        <option value="Sirsa">Sirsa</option>
                                        <option value="Sirsa">Sirsa</option>
                                        <option value="Sirsi">Sirsi</option>
                                        <option value="Sitamarhi">Sitamarhi</option>
                                        <option value="Sitapur">Sitapur</option>
                                        <option value="Sivakasi">Sivakasi</option>
                                        <option value="Solan">Solan</option>
                                        <option value="Solapur">Solapur</option>
                                        <option value="Sonepat">Sonepat</option>
                                        <option value="Sonepat">Sonepat</option>
                                        <option value="South 24 Parganas">South 24 Parganas</option>
                                        <option value="South Goa">South Goa</option>
                                        <option value="South Goa">South Goa</option>
                                        <option value="Srikakulam">Srikakulam</option>
                                        <option value="Srinagar">Srinagar</option>
                                        <option value="Sultanpur">Sultanpur</option>
                                        <option value="Sumerpur">Sumerpur</option>
                                        <option value="Sunam">Sunam</option>
                                        <option value="Sundargarh">Sundargarh</option>
                                        <option value="Supaul">Supaul</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Surendranagar">Surendranagar</option>
                                        <option value="Suri">Suri</option>
                                        <option value="Talaja">Talaja</option>
                                        <option value="Tanda">Tanda</option>
                                        <option value="Tandur">Tandur</option>
                                        <option value="Tasgaon">Tasgaon</option>
                                        <option value="Tawang">Tawang</option>
                                        <option value="Thalassery">Thalassery</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Thangadh">Thangadh</option>
                                        <option value="Thanjavur">Thanjavur</option>
                                        <option value="Theni">Theni</option>
                                        <option value="Thoubal">Thoubal</option>
                                        <option value="Tikamgarh">Tikamgarh</option>
                                        <option value="Tinsukia">Tinsukia</option>
                                        <option value="Tiptur">Tiptur</option>
                                        <option value="Tirunelveli">Tirunelveli</option>
                                        <option value="Tirur">Tirur</option>
                                        <option value="Tiruvallur">Tiruvallur</option>
                                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                                        <option value="Trichy">Trichy</option>
                                        <option value="Trivandrum">Trivandrum</option>
                                        <option value="Tumkur">Tumkur</option>
                                        <option value="Tura">Tura</option>
                                        <option value="Tuticorin">Tuticorin</option>
                                        <option value="Udaipur">Udaipur</option>
                                        <option value="Udgir">Udgir</option>
                                        <option value="Udhampur">Udhampur</option>
                                        <option value="Udupi">Udupi</option>
                                        <option value="Ujhani">Ujhani</option>
                                        <option value="Ujjain">Ujjain</option>
                                        <option value="Umred">Umred</option>
                                        <option value="Unnao">Unnao</option>
                                        <option value="Utraula">Utraula</option>
                                        <option value="Vadodara">Vadodara</option>
                                        <option value="Vaijapur">Vaijapur</option>
                                        <option value="Valsad">Valsad</option>
                                        <option value="Vapi">Vapi</option>
                                        <option value="Varanasi">Varanasi</option>
                                        <option value="Vellore">Vellore</option>
                                        <option value="Vidisha">Vidisha</option>
                                        <option value="Vijayawada">Vijayawada</option>
                                        <option value="Villupuram">Villupuram</option>
                                        <option value="Virudhunagar">Virudhunagar</option>
                                        <option value="Visakhapatnam">Visakhapatnam</option>
                                        <option value="Wani">Wani</option>
                                        <option value="Wardha">Wardha</option>
                                        <option value="Warud">Warud</option>
                                        <option value="Washim">Washim</option>
                                        <option value="Williamnagar">Williamnagar</option>
                                        <option value="Yadgir">Yadgir</option>
                                        <option value="Yavatmal">Yavatmal</option>
                                        <option value="Zirakpur">Zirakpur</option>
                                    </optgroup>	
                                </select>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="residenceCity">Select a city</span>
  
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailId" name="emailId" placeholder="Email Id" required/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="emailId">Please enter your email address</span>
                                <span class="form-error" visible-when-invalid="typeMismatch" validation-for="emailId"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required  pattern="\w+\s\w+"/>
                                <span class="form-error" visible-when-invalid="valueMissing" validation-for="fullName">Please enter your full name</span>
                                <span class="form-error" visible-when-invalid="patternMismatch" validation-for="fullName"> Please enter your first and last name separated by a space (e.g. Jane Miller)</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="submit"/>
                            </div>
                            <div class="form-note">
                                By Submitting I agree to  <a href="http://www.allmyfinance.com/terms.php" target="_blank">Terms &amp; Conditions</a> .I authorise AMF and its partners like HDFC Ltd to call, email or SMS me. This consent will override any registration for DNC/NDNC.
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="section-text">
                            <h1 class="section-header">Home Loan Starting At <span>6.70%</span> Only*</h1>
                            <p class="text-center text-lg-left">
                                Best Bank / Lender for your Home Loan shouldn’t be decided only upon the interest rates being charged. One also needs to factor in other things like processing fees, documentation required, post sales service, is your interest rate linked to external benchmark. We help you decide the best deal for your Home Loan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="banner-image">
                <amp-img alt="Banner"
                    src="/images/bg-main.jpg"
                    width="555"
                    height="550"
                    layout="intrinsic"
                    srcset="/images/bg-main.jpg 768w,
                    /images/bg-thumb.jpg 320w"
                    amp-fx="parallax" data-parallax-factor="1.15"
                >
                </amp-img>
            </div>
        </section>
        <!-- /.section-banner -->

        <section class="section section-banks section-pt-0">
            <div class="container">
                <h2 class="section-header">Best Banks for Home Loan</h2>
                <div class="row">
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-hdfc.jpg" alt="HDFC Ltd (Housing Development Finance Corporation)" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">HDFC Ltd (Housing Development Finance Corporation)</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-sbi.jpg" alt="State Bank Of India" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">State Bank Of India</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-icici.jpg" alt="CICI Bank India" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">CICI Bank India</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-punjab.jpg" alt="Punjab National Bank" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">Punjab National Bank</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-axis.jpg" alt="Axis Bank" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">Axis Bank</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-kotak.jpg" alt="Kotak Bank" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">Kotak Bank</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-citi.jpg" alt="CITI Bank" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">Citi Bank</div>
                        </div>
                    </div>
                    <!-- /.list-block -->

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 list-block">
                        <div  class="d-flex align-items-center list-content">
                            <div class="list-image">
                                <amp-img src="/images/banks/icon-lic.jpg" alt="LIC Housing Finance" width="78" height="44" layout="intrinsic"></amp-img>
                            </div>
                            <div class="list-text">LIC Housing Finance</div>
                        </div>
                    </div>
                    <!-- /.list-block -->
                    
                </div>
            </div>
        </section>

        <!-- /.section-banks -->

        <section class="section section-doc-testimonial bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="section-header  header-lg-left">Documentation for Home Loan</div>

                        <div class="doc-list">
                       
                            <div class="list-block">
                                <div class="list-title">Identity Proof</div>
                                <div class="list-text">Aadhar Card, Pan Card, Voter ID, Passport,Driving License.</div>
                            </div>
                            <!-- /.list-block -->
                            <div class="list-block">
                                <div class="list-title">Address Proof</div>
                                <div class="list-text">Driving  License, Voter ID, Electricity bill, Credit Card / bank statement, Rent agreement.</div>
                            </div>
                            <!-- /.list-block -->
                            <div class="list-block">
                                <div class="list-title">Income Proof</div>
                                <div class="list-text">Latest 6 months bank statements, latest 6 months pay slips, and form 16, latest 2-year ITR.</div>
                            </div>
                            <!-- /.list-block -->
                            <div class="list-block">
                                <div class="list-title">Property Documents</div>
                                <div class="list-text">All past chain agreements, society letter, property tax bill</div>
                            </div>
                            <!-- /.list-block -->
                        </div>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12 col-md-6">
                        <div class="section-header  header-lg-left">Trusted by Thousands of Brands</div>
                        
                        <div class="testimonial">
                            <div class="quote">
                                <amp-img src="/images/icon-quote.svg" height="60" width="60" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                <p> The Platform helps me quickly and easily find conversion optimization wins that I can standardize across our whole enterprise. I don’t like to use the phrase “best practice” unless I can prove it, and my proof is in the data provided by this platform. </p>
                                <div class="name">Naman Handa</div>
                                <div class="position">Director, Marketing, Dessiner Store</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section -->


        <section class="section section-plans">
            <div class="container">
                <div class="section-header ">Our Plans For You</div>

                <div class="row">
                    <div class="col-12 col-md-4 block text-center text-lg-left">
                        <div class="text-1">Interest Rates</div>
                        <div class="text-2">6.70% -7.50%*</div>

                        <div class="text-1">Pre - closure Charges</div>
                        <div class="text-2">Nil*</div>
                        <p>
                        *For Floating ROI
                        Zero Perclousre Charges</p>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12  col-md-4 block  text-center text-lg-left">
                        <div class="text-1">EMI (Monthly)</div>
                        <div class="text-2">₹649* per lakh</div>

                        <div class="text-1">Loan to value</div>
                        <div class="text-2">Up to 90%</div>
                        <p>
                            Up to 90% of property value
                        </p>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12 col-md-4 block  text-center text-lg-left">
                        <div class="text-1">Loan Tenure</div>
                        <div class="text-2">up to 30 years</div>

                        <div class="text-1">Processing Fees</div>
                        <div class="text-2">0.1% to 1%</div>
                        <p>
                            of Loan Amount
                        </p>
                    </div>
                    <!-- /.col-12 -->
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section section-offer-table">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="section-header header-lg-left">Compare Home Loan Offers</div>
                        <div class="text-center text-lg-left">
                            <p>
                                Compare Home Loan Offers from 20+ Top Banks in India. If you are looking for home loan then the best bank has to be decided not only on the interest rates that a lender is charging you but you need to compare all details including interest rates, processing fees, pre-payment charges, loan amount eligibility, whether the loan is external benchmark linked loan and also the documents which are required to process home loan. And not to forget the service that a customer will get from the bank on regular basis since Home Loan is usually for a longer tenure (10 years and more).
                            </p>
                            <p>
                                Schedule of Charges. They are Charged directly by the Lenders once you decide to proceed with the best available Offer. Our services are completely free.
                            </p>
                        </div>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12 col-lg-6">
                        <div class="table-responsive">
                            <div class="flex justify-content-center">
                                <table class="table mx-auto">
                                    <tbody>
                                        <tr>
                                            <td>Interest Rates</td>
                                            <td>6.70% to 7.50%*</td>
                                        </tr>
                                        <tr>
                                            <td>Processing Fees</td>
                                            <td>0% to 1% (Free for Balance Transfer)</td>
                                        </tr>
                                        <tr>
                                            <td>Franking Charges</td>
                                            <td>Charged as per Actual (depends on the State Government)</td>
                                        </tr>
                                        <tr>
                                            <td>Loan Tenure</td>
                                            <td>5 years to 30 Years</td>
                                        </tr>
                                        <tr>
                                            <td>EMI</td>
                                            <td>Rs 641 to Rs 761/ lac of Loan Amount</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.section -->

        <section class="section section-offers section-pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="offer-block">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <amp-img src="/images/icon-percentage.svg" height="34" width="34" layout="intrinsic" alt="percentage"></amp-img>
                                </div>
                                EMI & Eligibility
                            </div>
                            <div class="offer-description">
                                <p>
                                    As you have decided of taking a housing finance, you should always access your loan eligibility to know that for how much loan amount you are eligible for and can apply for. As per you net take home salary and other existing fixed obligations also calculate EMI that you can comfortably service. Your eligibility is calculated as per your age, net income, and existing obligations. You can shortlist the banks which offers you maximum loan amount to meet your requirements after you understand your minimum loan requirement, your eligibility and monthly EMI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12 col-lg-4">
                        <div class="offer-block">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <amp-img src="/images/icon-home.svg" height="34" width="34" layout="intrinsic" alt="home"></amp-img>
                                </div>
                                Home Loan Rates
                            </div>
                            <div class="offer-description">
                                <p>
                                    There are Fixed rates and floating rates Home Loans. Interest rates are higher on Fixed Rate Home Loan compared to floating rate of interest Home Loan.For Fixed rate Home Loan, your interest rate would remain static throughout the tenure of your Loan Term. As compared to fixed rate of interest, floating interest rates are reset at periodic intervals. Floating rate loan are offered by majority of home loan lenders in India as it helps borrowers to get loan interest which are aligned with the current interest rates. Before applying for loan compare interest rates of all banks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-12 col-lg-4">
                        <div class="offer-block">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <amp-img src="/images/icon-compare.svg" height="34" width="34" layout="intrinsic" alt="compare"></amp-img>
                                </div>
                                Compare Home Loan
                            </div>
                            <div class="offer-description">
                                <p>
                                    Compare Offers from multiple Lenders before finalizing your deal.Some new schemes like Pradhan Mantri Awas Yojna (PMAY) are extremely beneficial for first time borrowers. HDFC Bank, SBI Bank, PNB Bank, CITI Bank have schemes for women and existing customers of banks. Also check for other charges like Processing Fees, Legal & Technical Fees, Government Franking, Notice of Intimation Charges & other miscellaneous charges. Some banks charge you additional fee to reduce interest rates on your Home Loan even if external benchmark rates have reduce. Avoid them!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-12 -->
                </div>
            </div>
        </section>
        <!-- /.section-offers -->

        <section class="section section-why section-pt-0">
            <div class="container">
                <div class="section-header">Why MoneyMonk?</div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <p class="text-center">
                            MoneyMonk is a lorem ipsum dolor  simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        </p>
                    </div>
                </div>
           
                <div class="why-list">
                    <div class="row">
                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-low-interest-rate.png" alt="Low  Rate of Interest" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Low  Rate of Interest
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-processing.png" alt="Quick Processing" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Quick Processing
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-instant-approve.png" alt="Instant Approvals" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Instant Approvals
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-no-hidden-cost.png" alt="No Hidden Charges" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                No Hidden Charges
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-bank.png" alt="Multiple Quotes from Top Banks/NBFC" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Multiple Quotes from Top Banks/NBFC
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-pre-payment.png" alt="Pre-Payment & Foreclosure Facility" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Pre-Payment & Foreclosure Facility
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-transfer.png" alt="Balance Transfer with Rs. 0 Fees" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Balance Transfer with Rs. 0 Fees
                            </div>
                        </div>
                        <!-- /.list-item -->

                        <div class="list-item col-6 col-sm-4 col-md-3">
                            <div class="icon">
                                <amp-img src="/images/icon-pm-awas.png" alt="Pradhan Mantri Awas Yojana Subsidy" height="70" width="70" layout="intrinsic"></amp-img>
                            </div>
                            <div class="text">
                                Pradhan Mantri Awas Yojana Subsidy
                            </div>
                        </div>
                        <!-- /.list-item -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.why-list -->
            </div>
        </section>
        <!-- /.section-why -->

        <section class="section section-faq section-pt-0">
            <div class="container">
                <div class="section-header">Frequently Asked Questions</div>
                <div class="d-flex justify-content-center">
                    <ul class="col-12 col-md-10 col-lg-8">
                        <li><a href="https://google.com">Do I have to pay a penalty on pre-payment of loan?</a></li>
                        <li><a href="https://google.com">Do banks offer me what I ask for?</a></li>
                        <li><a href="https://google.com">Does taking a home loan mean I cannot take another loan?</a></li>
                        <li><a href="https://google.com">Can I transfer the loan multiple times?</a></li>
                        <li><a href="https://google.com">Do my age and occupation matter?</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /.section -->

  <?php  include 'footer.php';?>