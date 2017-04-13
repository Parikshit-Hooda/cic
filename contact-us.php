<DOCTYPE! html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  <title> Enter Details </title>


</head>
<body>
 <?php
    //  include 'form/script.php';
      $country=$name=$address=$mobile=$email="";
      $count_err=$name_err=$add_err=$mob_err=$email_err="";
      $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

  ?>
  <header>
    <div class="card-panel purple accent-3 ">
      <h2 class="white-text flow-text">
        Contact Us
      </h2>
    </div>

  </header>

  <main class="container">
    <div class="card-panel deep-purple accent-4">
      <h4 class="white-text flow-text">
          Enter Your details here so that we can reach you .<br>
      </h4>
    </div>
<br>
<br>
  <form method="POST" action="form/script.php">

<div class="input-field col s12">

    <select name="country" value="<?php echo $country;?>"  >
 <option value="" disabled >Please Select</option>
 <?php
  foreach($countries as $count){
       echo " <option "; if( isset($country) && ($country==$count)) echo "selected"; echo "value=".$count.">".$count."</option>";
     }
?>
</select>
<label>Select Country</label>
</div>


<div class="input-field col s12">

    <input type="text" name="name" value="<?php echo $name;?>">
    <?php echo $name_err ;?>
    <label>Name</label>
  </div>

    <div class="input-field col s12">
      <input type="text" name="address" value="<?php echo $address;?>">
      <?php echo $add_err ;?>
      <label>Address</label>
    </div>

    <div class="input-field col s12">
    <input type="text" name="mobile" value="<?php echo $mobile;?>">
    <?php echo $mob_err ;?>
    <label>Mobile No.</label>
  </div>

  <div class="input-field col s12">
    <input type="email" name="email" value="<?php echo $email;?>">
    <?php echo $email_err ;?>
    <label>Email Id.</label>
  </div>



    <button type="submit" name="submit" class="btn waves-effect waves-light">
      Submit
      <i class="material-icons right">send</i>
    </button>

    <button type="reset" name="reset" class="btn waves-effect waves-light">
      Reset
      <i class="material-icons right">replay</i>
  </form>
</main>
  <footer class="card-panel blue-grey darken-2 center-align">
    <a href="about-us.html" class="footer-a grey-text text-lighten-5">About Us</a>
    <br>
    <a href="prices.html" class="footer-a grey-text text-lighten-5">Prices</a>
    <br>
    <a href="careers.html" class="footer-a grey-text text-lighten-5">Careers</a>
    <br>
    <a href="contact-us.php" class="footer-a grey-text text-lighten-5">Contact Us</a>
    <br>
    <p class="grey-text text-lighten-5">Made with <img src="media/heartfavicon-16x16.png" id="heart" alt="♥"/> by Parikshit and Prince</p>
      <a href="#"><i class="material-icons">arrow_upward</i></a>
      <br>
      <script>
        $(document).ready(function() {
            $('select').material_select();
        });
  </script>

</body>

</html>
