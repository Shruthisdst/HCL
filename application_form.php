<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIDYAGYAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="#">Application Form</a></li>
			</ul>
	  </div>
	</div>
</nav>

<div class="container">
  <h1>Application Form</h1>
  <hr />
  <h2 class="text-center">विद्याज्ञान स्कूल - प्रारम्भिक प्रवेश परीक्षा-२०१५</h2>
  <h3 class="text-center">आवेदन पत्र (वालिका हेतु)</h3>
  <h4 class="text-right">फॉर्म संं० G 38010459</h4>
  <h4 class="small_head">यह आवेदन पत्र निःशुल्क है |</h4>
   <div class="row">
     <div class="col-sm-10">
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
     <div class="col-sm-2">
		<p class="img"></p>
		<p><strong>(अभिभावक फोटो पर हस्ताक्षर करे)</strong></p>
   </div>
 </div><br />
 
 <form class="form-horizontal" role="form">
  <div class="form-group">
     <label for="id1_1" class="control-label col-xs-2">1. आवेदक का नाम :</label>
        <div class="col-xs-8">
          <input type="text" class="form-control" id="id1_1" name="id1_1">
        </div>
  </div>
  <div class="form-group">
     <label for="id2_1" class="control-label col-xs-2">2. लिंग :</label>
        <div class="col-xs-8">
			बालिका &nbsp; <input type="radio" name="id2_1" value="male" id="id2_1">&nbsp;&nbsp;&nbsp;&nbsp;
			बालक &nbsp; <input type="radio" name="id2_2" value="female" id="id2_2">
        </div>
  </div>
  <div class="form-group">
     <label for="id3_1" class="control-label col-xs-2">3. जन्म तिथि :</label>
        <div class="col-xs-8">
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
			<input type="text" class="form-control" id="id4_1" name="id4_1">
		</div>
		<div class="col-xs-3">
			(जन्म प्रमाण-पत्र के अनुसार)
		</div>	
	</div>
	<div class="form-group">
		<label for="id5_1" class="control-label col-xs-2">5. पिता का नाम :</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" id="id5_1" name="id5_1"><br />
			पुत्र श्री : &nbsp;	<input type="text" class="form-control" id="id5_2" name="id5_2"><br />
			शैक्षिक योग्यता : &nbsp;	<input type="text" class="form-control" id="id5_3" name="id5_3"><br />
			व्यवसाय : &nbsp;	<input type="text" class="form-control" id="id5_4" name="id5_4"><br />
		</div>	
	</div>  
	<div class="form-group">
		<label for="id6_1" class="control-label col-xs-2">6. माता का नाम :</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" id="id6_1" name="id6_1"><br />
			पुत्री श्री : &nbsp;	<input type="text" class="form-control" id="id6_2" name="id6_2"><br />
			शैक्षिक योग्यता : &nbsp;	<input type="text" class="form-control" id="id6_3" name="id6_3"><br />
			व्यवसाय : &nbsp;	<input type="text" class="form-control" id="id6_4" name="id6_4"><br />
		</div>	
	</div>  
	<div class="form-group">
		<label for="id7_1" class="control-label col-xs-2">7. मूल निवास का पता (मूल निवास प्रमाण-पत्र की छायाप्रति संलग्न करें ।) जनपद के ग्रामीण क्षेत्र का स्थायी निवासी होना अनिवार्य है</label>
		<div class="col-xs-8">
			ग्राम का नाम : &nbsp; <input type="text" class="form-control" id="id7_1" name="id7_1"><br />
			पोस्ट ऑफिस &nbsp; <input type="text" class="form-control" id="id7_2" name="id7_2"><br /> 
			विकास खण्ड : &nbsp; <input type="text" class="form-control" id="id7_3" name="id7_3"><br />
			तहसील &nbsp; <input type="text" class="form-control" id="id7_4" name="id7_4"><br /> 
			जिला : &nbsp; <input type="text" class="form-control" id="id7_5" name="id7_5"><br />
			पिन कोड &nbsp; <input type="text" class="form-control" id="id7_6" name="id7_6"> 
		</div>	
	</div>  
	<div class="form-group">
		<label for="id8_1" class="control-label col-xs-2">8. (अ) संरक्षक का नाम तथा पूर्ण पता : (यदि माता-पिता संरक्षक नहीं है)</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" id="id8_1" name="id8_1"><br />
			(ब) विद्यार्थी का संरक्षक से संबंध :
			<input type="text" class="form-control" id="id8_2" name="id8_2">
		</div>	
	</div>	
</form>
</div>


</body>
</html>
