<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Test purpose</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" media="screen">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material_style.css') }}">
    <!-- animation -->
    <link href="{{ asset('css/pages/animate_page.css') }}" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="{{ asset('plugins/dropzone/dropzone.css') }}" rel="stylesheet" media="screen">
    <!--tagsinput-->
    <link href="{{ asset('plugins/jquery-tags-input/jquery-tags-input.css') }}" rel="stylesheet">
    <!--select2-->
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <!--  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
<!-- <link href="{{ asset('css/styles.imageuploader.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    
    <style>
    .gold{
        color: #fdd307;
            }

     .control-label{
         font-size:13px;
     }

     .form-control {
         font-size:13px;
     }
     /* .uploader__submit-button , .js-uploader__submit-button{
    display: none;
  }*/

    </style>

</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
       <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img alt="" src="">
                    <span class="logo-default" >PayQ</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->              
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">                      
                    </div>
                </div>
            </div>
             <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Property Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                               
                                <li class="active">Property Form</li>
                            </ol>
                        </div>
                    </div>

                    @if ($errors->any())
                         @foreach ($errors->all() as $error)
                             <div>{{$error}}</div>
                         @endforeach
                    @endif
                
                  
            <form class="form-horizontal" id="propertyform" action="{{ route('store') }}" method="POST"  enctype="multipart/form-data">
                                        @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Property Detail</header>
                                    <button id = "panel-button8" 
                                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                           data-upgraded = ",MaterialButton">
                                           <i class = "material-icons">more_vert</i>
                                        </button>
                                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                           data-mdl-for = "panel-button8">
                                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent10">

                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label">  Property Name
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="name" type="text" class="form-control" required> 
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label">  Property Number
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="number" type="text" class="form-control" required=""> 
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                                    <label class="col-lg-4 col-md-5 control-label">Select Country
                                                    </label>
                                                    <div class="col-lg-8 col-md-7">
                                                        <select class="form-control" id="selitemIcon" name="property_country" required="">
                                                            <option value="">Select a country</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands
                                                            </option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands
                                                            </option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of
                                                            </option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                        <label class="col-lg-4 col-md-5 control-label">Select State
                                                        </label>
                                                        <div class="col-lg-8 col-md-7">
                                                            <select class="form-control" name="state"  select2 required="">
                                                                <option value="">Select a state</option>
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>



                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label">  City
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="property_city" type="text" class="form-control" required> 
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> Phone Number
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input disabled="" type="text" class="form-control" Style="width: 20%;  display: inline-block;" value="+91">
                                            <input name="phone" pattern="[0-9]{10}" type="text" class="form-control" style=" width: 78%; display: inline-block;">  
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label">  Address
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="address" type="text" class="form-control" required> 
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> GPS Location
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="location" type="text" class="form-control" required=""> 
                                            </div>
                                            </div>   

                                            <div class="form-group row">
                                                    <label class="col-lg-4 col-md-5 control-label">  Rent/Night
                                                    </label> 
                                                    <div class="col-lg-8 col-md-7">
                                                    <input disabled="" type="text" class="form-control" Style="width: 20%;  display: inline-block;" value="$">
                                                    <input name="rent" type="text" class="form-control" style=" width: 78%; display: inline-block;" required="">  
                                                    </div>
                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> Traveller Rating
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                                    <div class="form-group">
                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios1" value="4.5" checked>
                                                            <label for="optionsRadios1">
                                                            4.5 <i class="fa fa-star gold"></i> Economical 
                                                            </label>    
                                                            </div>

                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios2" value="4.6">
                                                            <label for="optionsRadios2">
                                                            4.6 <i class="fa fa-star gold"></i> Good 
                                                            </label>
                                                            </div>

                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios3" value="4.7">
                                                            <label for="optionsRadios3">
                                                            4.7 <i class="fa fa-star gold"></i> Awesome 
                                                            </label>
                                                            </div>

                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios4" value="4.8">
                                                            <label for="optionsRadios4">
                                                            4.8 <i class="fa fa-star gold"></i> Excellent  
                                                            </label>
                                                            </div>

                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios5" value="4.9">
                                                            <label for="optionsRadios5">
                                                            4.9 <i class="fa fa-star gold"></i> Exceptional 
                                                            </label>
                                                            </div>

                                                            <div class="radio p-0">
                                                            <input type="radio" name="rating" id="optionsRadios6" value="5.0">
                                                            <label for="optionsRadios6">
                                                            5.0<i class="fa fa-star gold"></i> Flagship 
                                                            </label>
                                                            </div>  
                                                        </div>
                                            </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-4 col-md-5 control-label"> Property Type
                                                </label> 
                                                <div class="col-lg-8 col-md-7">
                                                        <div class="form-group">
                                                                <div class="radio p-0 col-md-6" style="display:inline-block;">
                                                                <input type="radio" name="type" id="optionsRadios8" value="Private" checked>
                                                                <label for="optionsRadios8">
                                                                 Private  
                                                                </label>    
                                                                </div>
    
                                                                <div class="radio p-0 col-md-6" style="display:inline;">
                                                                <input type="radio" name="type" id="optionsRadios9" value="Shared">
                                                                <label for="optionsRadios9">
                                                                Shared
                                                                </label>
                                                                </div>  
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> Property
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                                    <div class="form-group">
                                                            <div class="radio p-0 col-md-6" style="display:inline-block;">
                                                            <input type="radio" id="optionsRadios10" value="On Sale" name="status" checked>
                                                            <label for="optionsRadios10">
                                                             On Sale  
                                                            </label>    
                                                            </div>

                                                            <div class="radio p-0 col-md-6" style="display:inline;">
                                                            <input type="radio" name="status" id="optionsRadios11" value="On Display">
                                                            <label for="optionsRadios11">
                                                            On Display
                                                            </label>
                                                            </div>  
                                                    </div>
                                            </div>
                                    </div>



                                            
                                            <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> Add cover Photo
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input accept="image/*"  name="coverimage" type="file" class="form-control" required=""> 
                                            </div>
                                            </div>  
                                    

                                        <!-- <div class="card-head">
                                        <header>Add atleast 15 photos of Property</header>                  
                                        </div> -->

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label"> Add 15 Photos
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input accept="image/*"  name="property_images[]" type="file" class="form-control" multiple> 
                                            </div>
                                            </div>  
                                        <!-- <div class="card-body" id="bar-parent">
                                       
                                            <div class="uploader__box js-uploader__box l-center-box">
                
                                            <div class="uploader__contents">
                                                <label class="button button--secondary" for="fileinput">Select Files</label>
                                                <input id="fileinput" name="property_images" class="uploader__file-input" type="file" multiple value="Select Files">
                                            </div>
                                        
                                            </div>
                                        </div> -->
                                        
                                        <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 control-label">  Hotel Facilities
                                                </label> 
                                                
                                                

                                                            <div class="checkbox checkbox-icon-black">
                                                            <input id="checkbox1" name="facilities[]" value="Wi-Fi Internet" type="checkbox" checked="checked">
                                                            <label for="checkbox1">
                                                            Wi-Fi Internet
                                                            </label>
                                                            </div>
                                                            <div class="checkbox checkbox-icon-yellow">
                                                            <input id="checkbox2" name="facilities[]" value="Parking" type="checkbox" checked="checked">
                                                            <label for="checkbox2">                     Parking

                                                            </label>
                                                            </div>


                                                            <div class="checkbox checkbox-icon-red">
                                                            <input id="checkbox3" name="facilities[]" value="Intercom" type="checkbox" checked="checked">
                                                            <label for="checkbox3">
                                                            Intercom        
                                                            </label>
                                                            </div>
                                                            

                                                            <div class="checkbox checkbox-icon-aqua">
                                                            <input id="checkbox4" name="facilities[]" value="Pool" type="checkbox" checked="checked">
                                                            <label for="checkbox4">
                                                            Pool

                                                            </label>
                                                            </div>


                                                            <div class="checkbox checkbox-icon-black">
                                                            <input id="checkbox5" value="Heater" name="facilities[]" type="checkbox" checked="checked">
                                                            <label for="checkbox5">
                                                            Heater  
                                                            </label>
                                                            </div>

                                                            <div class="checkbox checkbox-icon-yellow">
                                                            <input id="checkbox6" name="facilities[]" values="Smart TV" type="checkbox" checked="checked">
                                                            <label for="checkbox6">
                                                            Smart TV    
                                                            </label>
                                                            </div>
        

                                                            
                                                            <div class="checkbox checkbox-icon-red">
                                                            <input id="checkbox7" name="facilities[]" type="checkbox" value="Private Kitchen" checked="checked">
                                                            <label for="checkbox7">
                                                            Private Kitchen
                                                             </label>
                                                             </div>
                                                         </div>

                                                        
                            </div>
                        </div>
                      
                    </div>
                        


                        <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>Add Reviews To Property</header>
                                        <button id = "panel-button8" 
                                               class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                               data-upgraded = ",MaterialButton">
                                               <i class = "material-icons">more_vert</i>
                                            </button>
                                            <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                               data-mdl-for = "panel-button8">
                                               <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                               <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                               <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                            </ul>
                                    </div>
                                    <div class="card-body " id="bar-parent10">
    
                                                 
                                                        <div id="room_fileds">
                                                                <div>
                                                                 <div class='label'>Review 1:</div>
                                                                 <div class="content">          
                                                                     <span class="form-group row"> <label class="col-lg-4 col-md-5 control-label">Name Of Person: </label><input type="text"  name="person[1]" value="" required="" /> </span>

                                            <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-md-5 control-label">  Name Of Person:
                                            </label> 
                                            <div class="col-lg-8 col-md-7">
                                            <input name="person[1]" type="text" class="form-control" required> 
                                            </div>
                                            </div> -->

                                                                     <span class="form-group row"><label class="col-lg-4 col-md-5 control-label">Review Of Person:</label> <input type="text" name="comment[1]" value="" required /></span>
                                                                     <span class="form-group row"><label class="col-lg-4 col-md-5 control-label">DP Of Person:</label> <input accept="image/*"  type="file" name="dp[1]" value="" required="" /></span>
                                                                     <span class="form-group row"><label class="col-lg-4 col-md-5 control-label">Country:</label> <input type="text" name="country[1]" value="" required="" /></span>
                                                                     <span class="form-group row"><label class="col-lg-4 col-md-5 control-label">City:</label> <input type="text" name="city[1]" value="" required="" /></span>         
                                                                 </div>
                                                                </div>
                                                             </div> 

                                                                                                                      
                                                 <div class="btn-group pull-right form-group row">
                                                  <input type="button" id="more_fields"  class="btn btn-info" value="Add atleast Ten Review +" />
                                                 </div>                         

                                       
                                    </div>
                                </div>
                            </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="submit" value="Submit">
                </div>
                 
            </form>
                
                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2018 
                    <a href="" target="_top" class="makerCss"></a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
    </div>
    <!-- start js include path -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js') }}" ></script>
    <!-- Common js-->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/layout.js') }}" ></script>
    <script src="{{ asset('js/theme-color.js') }}" ></script>
    <!-- Material -->
    <script src="{{ asset('plugins/material/material.min.js') }}"></script>
    <!-- animation -->
    <script src="{{ asset('js/pages/ui/animations.js') }}" ></script>
    <!-- dropzone -->
    <script src="{{ asset('plugins/dropzone/dropzone.js') }}" ></script>
    <!--tags input-->
    <script src="{{ asset('plugins/jquery-tags-input/jquery-tags-input.js') }}" ></script>
    <script src="{{ asset('plugins/jquery-tags-input/jquery-tags-input-init.js') }}" ></script>
    <!--select2-->
    <script src="{{ asset('plugins/select2/js/select2.js') }}" ></script>
    <script src="{{ asset('js/pages/select2/select2-init.js') }}" ></script>
    <!-- end js include path -->

    <script>
            var review = 1;
    $(document).on('click' , '#more_fields' , function(){
        review++;
        var objTo = document.getElementById('room_fileds')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div class="label">Review ' + review +':</div><div class="content form-group"><span class="form-group row"> <label class="col-lg-4 col-md-5 control-label">Name Of Person:</label> <input type="text" name="person['+review+']" value="" required /></span><span class="form-group row"> <label class="col-lg-4 col-md-5 control-label">Review Of person:</label> <input type="text" name="comment['+review+']" value="" required /></span><span class="form-group row"><label class="col-lg-4 col-md-5 control-label">DP:</label><input type="file" accept="image/*"  name="dp['+review+']" value="" required /></span><span class="form-group row"><label class="col-lg-4 col-md-5 control-label">Country:</label> <input type="text" name="country['+review+']" value="" required /></span><span class="form-group row"><label class="col-lg-4 col-md-5 control-label">City:</label> <input type="text" name="city['+review+']" value="" required /></span></div>';
        
        objTo.appendChild(divtest);
    });
   
            
            </script>

            <script src="{{ asset('js/jquery.imageuploader.js') }}"></script>
            <script>
            (function(){
                var options = {};
                $('.js-uploader__box').uploader(options);
            }());
            </script>
            <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

            </script>
          <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
          <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.4.0/dist/sweetalert2.all.min.js"></script> -->
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
           $('#propertyform').validate();

           $(document).on('submit' , '#propertyform' , function(){
               var imgs = $("[name='property_images[]']");
               if (parseInt($(imgs).get(0).files.length) < 3){
                 Swal.fire({
                              icon: 'error',
                              text: 'Upload atleast 15 photos of your property.',
                            })
                  return false;
               }
           });
            </script>


</body>

</html>