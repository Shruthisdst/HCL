<!DOCTYPE html>
<html lang="en">
<head>
	<title>VIDYAGYAN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script  src="js/input_method.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		  <img src="images/images.jpeg" alt="Logo" />
		  <a class="title" href="#">VIDYAGYAN</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
<!--
			<li><a href="about.html">About Us</a></li>
			<li><a href="#">Application Form</a></li>
-->
			</ul>
	  </div>
	</div>
</nav>

<div class="container">
<!--
  <h1>Application Form</h1>
-->
  <hr />
  <h2 class="text-center">विद्याज्ञान स्कूल - प्रारम्भिक प्रवेश परीक्षा-२०१५</h2>
  <h3 class="text-center">आवेदन पत्र (बालिका हेतु)</h3>
  <h4 class="text-right">फॉर्म संं० G 38010459</h4>
  <h4 class="small_head">यह आवेदन पत्र निःशुल्क है |</h4>
   <div class="row">
     <div class="col-sm-12">
		<p><strong>नोट: फॉर्म को भरने से पूर्व निम्न अईतायें तथा संलग्न महत्वपूर्ण सूचनाओं का अध्ययन अवश्य कर लें ।</strong></p>
		<ol>
			<li>राजस्व विभाग द्वारा निर्गत प्रमाण-पत्र के अनुसार आवेदक जनपद के ग्रामीण क्षेत्र का स्थायी निवासी हो तथा उसके सम्पूर्ण परिवार की वार्षिक आय 1 लाख रुपये से अधिक न हो । दोनों प्रमाण-पत्रों की छाया प्रति (एक ही कागज पर फोटो स्टेट कराकर) तथा उस पर आवेदन पत्र का क्रमांक लिखकर संलग्न करना अनिवार्य है ।</li>
			<li>आवेदक ग्रामीण क्षेत्र में स्थापित किसी भी राजकिय अथवा मान्यता प्राप्त निजी विद्यालय से कक्षा 3 तथा 4 उत्तीर्ण होकर कक्षा 5 में अध्ययनरत हो ।</li>
			<li>दिनांक 30.06..2015 को बालक हेतु अधिकतम आयु 12 वर्ष तथा बालिका हेतु अधिकतम आयु 13 वर्ष ।</li>
			<li>आवेदन पत्र भरकर प्रेषित करने की अन्तिम तिथि 15.12.2014 है ।</li>
			<li>आवेदक आवेदन पत्र की छाया प्रति संदर्भ हेतु अपने पास सुरक्षित रख लें ।</li>
			<li>लिखित परीक्षा हेतु मात्र एक अवसर ही मान्य है । प्रारम्भिक लिखित परीक्षा की तिथि 22 फरवरी 2015 है ।</li>
			<li>आवेदन पत्र स्वीकार करने अथवा अस्वीकार करने संबंधी सम्पूर्ण अधिकार विद्याज्ञान में निहित रहेगा ।</li>
		</ol>
	</div>
 </div>

<div class="photograph">
	<img class="center" src="images/applications/38010459/38010459.png" alt="applicant photo" /><br />
	<p><strong>(अभिभावक फोटो पर हस्ताक्षर करे)</strong></p>
</div>
 
 <br />

<p class="note">Type in Hindi (Press Ctrl+g to toggle between English and Hindi)</p>
 
 <form  method="POST" class="form-horizontal" role="form">
  <div class="form-group">
     <label for="id1_1" class="control-label col-xs-2">1. आवेदक का नाम :</label>
        <div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id1_1.png" alt="" id="id1_1_img" /><br />
			<input type="text" class="form-control" id="id1_1" name="id1_1">
        </div>
  </div>
  <div class="form-group">
     <label for="id2_1" class="control-label col-xs-2">2. लिंग :</label>
        <div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id2_1.png" alt="" id="id2_1_img" /><br />
			बालिका &nbsp; <input type="radio" name="id2_1" value="male" id="id2_1">&nbsp;&nbsp;&nbsp;&nbsp;
			बालक &nbsp; <input type="radio" name="id2_2" value="female" id="id2_2">
        </div>
  </div>
  <div class="form-group">
     <label for="id3_1" class="control-label col-xs-2">3. जन्म तिथि :</label>
        <div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id3_1.png" alt="" id="id3_1_img" /><br />			
			दिन &nbsp; 
			<select name="id3_1" id="id3_1">
				<option value=""></option>
			<?php 
				for($i=1;$i<=31;$i++)
				{
					echo '<option value="'. str_pad($i,2,0,STR_PAD_LEFT) .'">'. str_pad($i,2,0,STR_PAD_LEFT) .'</option>';
					
				}
			?> 
			</select> &nbsp;&nbsp;
			माह &nbsp; 
			<select name="id3_2" id="id3_2">
				<option value=""></option>
			<?php 
				for($i=1;$i<=12;$i++)
				{
					echo '<option value="'. str_pad($i,2,0,STR_PAD_LEFT) .'">'. str_pad($i,2,0,STR_PAD_LEFT) .'</option>';
					
				}
			?> 
			</select>&nbsp;&nbsp;
			वर्ष &nbsp; 
			<select name="id3_3" id="id3_3">
				<option value=""></option>
			<?php 
				for($i=1970;$i<=date("Y");$i++)
				{
					echo '<option value="'. $i .'">'. $i .'</option>';
					
				}
			?> 
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id4_1" class="control-label col-xs-2">4. 30.6.2015 को आयु :</label>
		<div class="col-xs-7">
			<img class="form_images" src="images/applications/38010459/id4_1.png" alt="" id="id4_1_img" /><br />
			<input type="text" class="form-control" id="id4_1" name="id4_1">
		</div>
		<div class="col-xs-3">
			(जन्म प्रमाण-पत्र के अनुसार)
		</div>	
	</div>
	<div class="form-group">
		<label for="id5_1" class="control-label col-xs-2">5. पिता का नाम :</label>
		<div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id5_1.png" alt="" id="id5_1_img" /><br />			
			<input type="text" class="form-control" id="id5_1" name="id5_1"><br />
			पुत्र श्री : &nbsp;	
			<img class="form_images" src="images/applications/38010459/id5_2.png" alt="" id="id5_2_img" /><br />
			<input type="text" class="form-control" id="id5_2" name="id5_2"><br />
			शैक्षिक योग्यता : &nbsp;			
			<img class="form_images" src="images/applications/38010459/id5_3.png" alt="" id="id5_3_img" /><br />	
			<input type="text" class="form-control" id="id5_3" name="id5_3"><br />
			व्यवसाय : &nbsp;	
			<img class="form_images" src="images/applications/38010459/id5_4.png" alt="" id="id5_4_img" /><br />			
			<input type="text" class="form-control" id="id5_4" name="id5_4"><br />
		</div>	
	</div>  
	<div class="form-group">
		<label for="id6_1" class="control-label col-xs-2">6. माता का नाम :</label>
		<div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id6_1.png" alt="" id="id6_1_img" /><br />			
			<input type="text" class="form-control" id="id6_1" name="id6_1"><br />
			पुत्री श्री : &nbsp;	
			<img class="form_images" src="images/applications/38010459/id6_2.png" alt="" id="id6_2_img" /><br />			
			<input type="text" class="form-control" id="id6_2" name="id6_2"><br />
			शैक्षिक योग्यता : &nbsp;	
			<img class="form_images" src="images/applications/38010459/id6_3.png" alt="" id="id6_3_img" /><br />			
			<input type="text" class="form-control" id="id6_3" name="id6_3"><br />
			व्यवसाय : &nbsp;	
			<img class="form_images" src="images/applications/38010459/id6_4.png" alt="" id="id6_4_img" /><br />			
			<input type="text" class="form-control" id="id6_4" name="id6_4"><br />
		</div>	
	</div>  
	<div class="form-group">
		<label for="id7_1" class="control-label col-xs-2">7. मूल निवास का पता (मूल निवास प्रमाण-पत्र की छायाप्रति संलग्न करें ।) जनपद के ग्रामीण क्षेत्र का स्थायी निवासी होना अनिवार्य है</label>
		<div class="col-xs-8">
			ग्राम का नाम : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_1.png" alt="" id="id7_1_img" /><br />
			<input type="text" class="form-control" id="id7_1" name="id7_1"><br />
			पोस्ट ऑफिस &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_2.png" alt="" id="id7_2_img" /><br />
			<input type="text" class="form-control" id="id7_2" name="id7_2"><br /> 
			विकास खण्ड : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_3.png" alt="" id="id7_3_img" /><br />
			<input type="text" class="form-control" id="id7_3" name="id7_3"><br />
			तहसील &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_4.png" alt="" id="id7_4_img" /><br />
			<input type="text" class="form-control" id="id7_4" name="id7_4"><br /> 
			जिला : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_5.png" alt="" id="id7_5_img" /><br />
			<input type="text" class="form-control" id="id7_5" name="id7_5"><br />
			पिन कोड &nbsp; 
			<img class="form_images" src="images/applications/38010459/id7_6.png" alt="" id="id7_6_img" /><br />
			<input type="text" class="form-control" id="id7_6" name="id7_6"> 
		</div>	
	</div>  
	<div class="form-group">
		<label for="id8_1" class="control-label col-xs-2">8. (अ) संरक्षक का नाम तथा पूर्ण पता : </label>
		<div class="col-xs-8">
			(यदि माता-पिता संरक्षक नहीं है) &nbsp; 			
			<img class="form_images" src="images/applications/38010459/id8_1.png" alt="" id="id8_1_img" /><br />
			<input type="text" class="form-control" id="id8_1" name="id8_1"><br />
			(ब) विद्यार्थी का संरक्षक से संबंध : &nbsp;
			<img class="form_images" src="images/applications/38010459/id8_2.png" alt="" id="id8_2_img" /><br />
			<input type="text" class="form-control" id="id8_2" name="id8_2">
		</div>	
	</div>	
	<div class="form-group">
		<label for="id9_1" class="control-label col-xs-2">9. पत्र-व्यवहार का पता :</label>
		<div class="col-xs-8">
			ग्राम का नाम : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_1.png" alt="" id="id9_1_img" /><br />
			<input type="text" class="form-control" id="id9_1" name="id9_1"><br />
			पोस्ट ऑफिस &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_2.png" alt="" id="id9_2_img" /><br />
			<input type="text" class="form-control" id="id9_2" name="id9_2"><br /> 
			विकास खण्ड : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_3.png" alt="" id="id9_3_img" /><br />
			<input type="text" class="form-control" id="id9_3" name="id9_3"><br />
			तहसील &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_4.png" alt="" id="id9_4_img" /><br />
			<input type="text" class="form-control" id="id9_4" name="id9_4"><br /> 
			जिला : &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_5.png" alt="" id="id9_5_img" /><br />
			<input type="text" class="form-control" id="id9_5" name="id9_5"><br />
			पिन कोड &nbsp; 
			<img class="form_images" src="images/applications/38010459/id9_6.png" alt="" id="id9_6_img" /><br />
			<input type="text" class="form-control" id="id9_6" name="id9_6"> 			
		</div>
	</div>	
	<div class="form-group">
		<label for="id10_1" class="control-label col-xs-4">10. परिवार की कुल वार्षिक आय (राजस्व विभाग द्वारा निर्गत आय प्रमाण-पत्र संलग्न करें ।) रु०</label>	
		<div class="col-xs-8">
			<img class="form_images" src="images/applications/38010459/id10_1.png" alt="" id="id10_1_img" /><br />
			<input type="text" class="form-control" id="id10_1" name="id10_1"><br />
			 (1) पिता की कुल आय (क) खेती से रु० :&nbsp;
  			<img class="form_images" src="images/applications/38010459/id10_2.png" alt="" id="id10_2_img" /><br />			 
			 <input type="text" class="form-control" id="id10_2" name="id10_2"><br />
			(ख) नौकरी से रु० &nbsp;
			<img class="form_images" src="images/applications/38010459/id10_3.png" alt="" id="id10_3_img" /><br />			
			<input type="text" class="form-control" id="id10_3" name="id10_3"><br />
			(ग) अन्य स्रोतों से रु० &nbsp;
			<img class="form_images" src="images/applications/38010459/id10_4.png" alt="" id="id10_4_img" /><br />			
			<input type="text" class="form-control" id="id10_4" name="id10_4"><br /><br />
			 (2) माता की कुल आय (क) खेती से रु० : &nbsp;
			<img class="form_images" src="images/applications/38010459/id10_5.png" alt="" id="id10_5_img" /><br />			 
			 <input type="text" class="form-control" id="id10_5" name="id10_5"><br />
			(ख) नौकरी से रु० &nbsp;
			<img class="form_images" src="images/applications/38010459/id10_6.png" alt="" id="id10_6_img" /><br />			
			<input type="text" class="form-control" id="id10_6" name="id10_6"><br />
			(ग) अन्य स्रोतों से रु० &nbsp;
			<img class="form_images" src="images/applications/38010459/id10_7.png" alt="" id="id10_7_img" /><br />			
			<input type="text" class="form-control" id="id10_7" name="id10_7"><br /><br />
		</div>
	</div>
	<div class="form-group">
		<label for="id11_1" class="control-label col-xs-4">11. पिता/अभिभावक के परिवार की कुल भूमि का ब्यौरा :</label>	
		<div class="col-xs-8">
			जोत बही के अनुसार खतौनी खाता सं० : &nbsp;
			<img class="form_images" src="images/applications/38010459/id11_1.png" alt="" id="id11_1_img" /><br />			
			<input type="text" class="form-control" id="id11_1" name="id11_1"><br />
			एवं कुल भूमि का क्षेत्रफल : &nbsp;
			<img class="form_images" src="images/applications/38010459/id11_2.png" alt="" id="id11_2_img" /><br />			
			<input type="text" class="form-control" id="id11_2" name="id11_2"><br />			
			पिता/अभिभावक का कुल भूमि में अंश : &nbsp;
			<img class="form_images" src="images/applications/38010459/id11_3.png" alt="" id="id11_3_img" /><br />			
			<input type="text" class="form-control" id="id11_3" name="id11_3">
		</div>
	</div>
	<div class="form-group">
		<label for="id12_1" class="control-label col-xs-6">12. विद्यालय/विद्यालयों का विवरण जहाँ से कक्ष 3 व 4 की परीक्षा उत्तीर्ण है तथा कक्षा 5 में अध्ययनरत है :-</label>
	</div>	
	<table class="table table-bordered">
		<thead>
		  <tr>
			<th rowspan="2">कक्षा</th>
			<th rowspan="2">विद्यालय का नाम एवं पता</th>
			<th rowspan="2">राजकीय/मान्यता प्राप्त निजी विद्यालय</th>
			<th rowspan="2">विद्यालय में प्रथम प्रवेश का दिनांक</th>
			<th>एस०</th>
			<th>आर०</th>
		  </tr>
		  <tr>
			<th>क्रमांक</th>
			<th>पृष्ठ संख्या</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>कक्षा-3</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_1.png" alt="" id="id12_1_img" /><br />
				<input type="text" class="form-control" id="id12_1" name="id12_1">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_2.png" alt="" id="id12_2_img" /><br />				
				<input type="text" class="form-control" id="id12_2" name="id12_2">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_3.png" alt="" id="id12_3_img" /><br />				
				<input type="text" class="form-control" id="id12_3" name="id12_3">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_4.png" alt="" id="id12_4_img" /><br />				
				<input type="text" class="form-control" id="id12_4" name="id12_4">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_5.png" alt="" id="id12_5_img" /><br />				
				<input type="text" class="form-control" id="id12_5" name="id12_5">
			</td>
		  </tr>
		  <tr>
			<td>कक्षा-4</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_6.png" alt="" id="id12_6_img" /><br />				
				<input type="text" class="form-control" id="id12_6" name="id12_6">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_7.png" alt="" id="id12_7_img" /><br />				
				<input type="text" class="form-control" id="id12_7" name="id12_7">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_8.png" alt="" id="id12_8_img" /><br />				
				<input type="text" class="form-control" id="id12_8" name="id12_8">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_9.png" alt="" id="id12_9_img" /><br />				
				<input type="text" class="form-control" id="id12_9" name="id12_9">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_10.png" alt="" id="id12_10_img" /><br />				
				<input type="text" class="form-control" id="id12_10" name="id12_10">
			</td>
		  </tr>
		  <tr>
			<td>कक्षा-5</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_11.png" alt="" id="id12_11_img" /><br />				
				<input type="text" class="form-control" id="id12_11" name="id12_11">
			</td>
			<td>
				<img class="form_images" src="images/applications/38010459/id12_12.png" alt="" id="id12_12_img" /><br />				
				<input type="text" class="form-control" id="id12_12" name="id12_12">
			</td>		  
			<td>
				<img class="form_images" src="images/applications/38010459/id12_13.png" alt="" id="id12_13_img" /><br />				
				<input type="text" class="form-control" id="id12_13" name="id12_13">
			</td>		  
			<td>
				<img class="form_images" src="images/applications/38010459/id12_14.png" alt="" id="id12_14_img" /><br />				
				<input type="text" class="form-control" id="id12_14" name="id12_14">
			</td>		  
			<td>
				<img class="form_images" src="images/applications/38010459/id12_15.png" alt="" id="id12_15_img" /><br />				
				<input type="text" class="form-control" id="id12_15" name="id12_15">
			</td>		  
		  </tr>
		</tbody>
	</table>	
	<div class="form-group">
		<label for="id13_1" class="control-label col-xs-4">13. आवेदक का सम्पर्क-दूरभाष (टेलीफोन एसटीडी कोड सहित/मोबाइल) जिस पर आसानी से सम्पर्क किया जा सके :</label>
		<div class="col-xs-8">
				1. &nbsp;
				<img class="form_images" src="images/applications/38010459/id13_1.png" alt="" id="id13_1_img" /><br />
				<input type="text" class="form-control" id="id13_1" name="id13_1"><br />
				2. &nbsp;
				<img class="form_images" src="images/applications/38010459/id13_2.png" alt="" id="id13_2_img" /><br /> 
				<input type="text" class="form-control" id="id13_2" name="id13_2">
		</div>
	</div>
	<div class="form-group">
		<label for="id14_1" class="control-label col-xs-2">14. आवेदक के अभिभावक द्वारा घोषणा :</label>
		<div class="col-xs-10">
			<p>मैं यह घोषित करता हूँ कि विद्याज्ञान स्कूल में प्रवेश हेतु प्रारम्भिक लिखित परीक्षा संबंधि उपरोक्त आवेदक के परिवार के संबंध में प्रेषित उपरोक्त सुचना सही है और कोई भी तथ्य छिपाया नहीं गया है । य्दि कोई सूचना अपूर्ण, असत्य या गलत पायी जाती है तो उसके लिए मैं स्वयं उत्तरदायी होऊँगा । मेरे द्वारा अपूर्ण, असत्य या गलत सूचना देने पर विद्याज्ञान स्कूल को मेरे पुत्र/पुत्री का प्रवेश हेतु आवेदन निरस्त करने का पूर्ण अधिकार होगा । मेरे परिवार (स्वयं मैं और मेरी पत्नी) की समस्त स्रोत्रों से कुल वार्षिक आय एक लाख रुपये से अधिक नहीं है ।</p>
			<p>मैं इस आवेदन के साथ मेरे परिवार से संबंधित निम्नलिखित प्रमाण-पत्र की छायाप्रति संलग्न कर रहा हूँ :-</p>
			<ol>
				<li>राजस्व विभाग द्वारा निर्गत आय प्रमाण-पत्र ।</li>
				<li>राजस्व विभाग द्वारा निर्गत जनपद के ग्रामीण क्षेत्र के स्थायी निवास संबंधित प्रमाण-पत्र ।</li>
			</ol>
			अभिभावक का नाम &nbsp;
			<img class="form_images" src="images/applications/38010459/id14_1.png" alt="" id="id14_1_img" /><br /> 
			<input type="text" class="form-control" id="id14_1" name="id14_1"><br />
			आवेदक से सम्बन्ध &nbsp;
			<img class="form_images" src="images/applications/38010459/id14_2.png" alt="" id="id14_2_img" /><br />
			<input type="text" class="form-control" id="id14_2" name="id14_2"><br />
			अभिभावक के हस्ताक्षर &nbsp; <img class="form_images" src="images/applications/38010459/id14_2.png" alt="" id="id14_2_img" /><br />
			----------------
		</div>
	</div>				

	<div class="row">
		<div class="col-xs-12 center dashed_border"></div>
	</div>

	<div class="row">
		<div class="col-xs-12 center large bold">प्राप्ति<br />
			फॉर्म संं० G 38010459
		</div>	
	</div>
	<br />
	<br />
	<div class="form-group">
		<div class="col-xs-6">
			विद्याज्ञान स्कूल में प्रवेश हेतु प्रारम्भिक लिखित परीक्षा का आवेदन एवं प्रवेश-पत्र दिनांक 	 <img class="form_images" src="images/applications/38010459/id_date.png" alt="" id="id_date_img" />
		</div>	
		<div class="col-xs-3">
			<input type="text" class="form-control" id="id_date" name="id_date">
		</div>
		<div class="col-xs-3">	
			को नम्न प्रमाण-पत्र सहित आवेदक/अभिभावक के  माध्यम से प्राप्त किया ।	
		</div>	
	</div>
	<div class="form-group">
		<div class="col-xs-8">
			1. &nbsp;
			<img class="form_images" src="images/applications/38010459/id_998.png" alt="" id="id_998_img" /><br />
			<input type="text" class="form-control" id="id998" name="id998"><br />
		</div>			
		<div class="col-xs-8">
			2. &nbsp;
			<img class="form_images" src="images/applications/38010459/id_999.png" alt="" id="id_999_img" /><br />			
			<input type="text" class="form-control" id="id999" name="id999">
		</div>			
	</div>
	<br />
	<br />
	<div class="row right">
		<div class="col-xs-10 center">
			<button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;
			<button type="reset" class="btn btn-default">Reset</button>
		</div>
		<div class="col-xs-2">
			हस्ताक्षर प्राप्तकर्ता मुहर सहित<br />
			पद -----------------------
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-10"></div>
		<div class="col-xs-2 right">
		</div>
	</div>	


</form>
</div>


</body>
</html>

 
