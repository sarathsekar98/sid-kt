 <?php include "header.php"; ?>
    <?php include "enquiry-form.php"; ?>
  <div class="container" style="padding-top:50px;">
  <div class="col-md-12">
 <h2 class="text-center" style="color:black; padding-bottom:2%">T.H.S Monitor</h2>
                    <hr class="divider align-self-center"
                        style="margin-bottom:8px;margin-top:0px;" /><br><br>
</div>
  	<div class="row">
	<div class="col-md-5 column" style="box-shadow:5px 5px 5px 5px #DDD;padding:10px;">
        <div class="xzoom-container">
          <img class="xzoom" id="xzoom-default" src="assets/img/location2.png" xoriginal="assets/img/location2.png" width="330" height="330" />
          <div class="xzoom-thumbs col-md-3">
            <a href="assets/img/watch.jpg"><img class="xzoom-gallery" width="80" src="assets/img/watch.jpg"  xpreview="assets/img/watch.jpg" title="The description goes here"></a>
            <a href="assets/img/mouse.jpg"><img class="xzoom-gallery" width="80" src="assets/img/mouse.jpg" title="The description goes here"></a>
            <a href="assets/img/headphone.jpg"><img class="xzoom-gallery" width="80" src="assets/img/headphone.jpg" title="The description goes here"></a>
            <a href="assets/img/macm1.jpg"><img class="xzoom-gallery" width="80" src="assets/img/macm1.jpg" title="The description goes here"></a>
			 <a href="assets/img/location2.png"><img class="xzoom-gallery" width="80" src="assets/img/location2.png" title="The description goes here"></a>
          </div>
        </div>        
    
      <div class="col-md-1 column"></div>
</div>
    <div class="col-md-7" style="font-family:trebuchet MS">
   <div class="container">
       

        <p>
            THS monitoring system includes a temperature sensor, smoke sensor and a
humidity sensor to monitor the temperature of various critical components such as
engine, battery, pumps etc. This system can also detect smoke leakage from kitchen
and humidity at the target decorum. The sensor continuously monitors the
temperature in the surrounded space such as engine room or electrical
cabinets/gadgets and can detect the smallest change in the temperature. Whenever the
temperature exceeds a specified threshold or rises faster then defined, an alert is 
generated as a possible indication of fire. The alert is forwarded to you and optionally
your home dock/port.
        </p>
		</div>
		</div></div>
        <p>
        <ul>
            <li>The sensor is designed to operate at high temperatures on long terms (85°C)
and even up to temperature of 130°C for about 7 minutes.
			<li>The battery-powered photoelectric smoke sensor is designed to protect you
and your boat from the dangers of smoke and fire. The photoelectric
technology is more sensitive in detecting slow smoldering fires which generate
light smoke, little heat and may smolder for hours before bursting into flames
			<li>In case of a smoke incident, the smoke sensor will repeat a beeping signal and
send a radio messages. The alerts will be forwarded to you via a notification
on your smartphone, email and phone call. Your home marina will be instantly
informed as well.
			<li>The sensor is equipped with a test button to periodically test its functionality.
In case of a false smoke alert, the test button is used to reset the alert.
        </ul>
        </p>
		<p>
		<b><u>Key Features</u></b><br><br>
		<ul><li>Detects rise in temperature at the target components & sends alert notification
to registered number & mail.
		<li>Detects leakage in propylene gas and notify the captain head through message
alert.

		<li>Detects humidity level at the target space inside the boat and alerts the concern
person through message.
		<li>Buzzer is also connected with this system to notify if any of these sensors
(temperature, gas, humidity) crosses beyond the threshold. 
		</ul>
		</p>
       
        <p align="center"><br /><br />
            <u>Technical Specifications:</u></p>
          <table style="width:80%;padding:10px!important;" align="center" border="1" cellpadding="10">
            <tr>
                <td>MAX6675 Module + K Type
Thermocouple Sensor</td>
                <td>Resolution: 12 bit<br>Operating Voltage: 3 to 5.5 V<br>Temperature Range: ( 0 to 1024oC)</td>
            </tr>
            <tr><td>Humidity Sensor</td>
            <td>Operating Voltage is 3V to 5.5V Working current
is 50mA</td></tr>
			<tr><td>ESP32 MCU</td>
            <td>Operating Voltage : 4.5V to 9V.<br>Flash memory is 4 MB</td></tr>
			<tr><td>LCD DISPLAYS</td>
            <td>LCD 1: Driver IC: SSD1306 Resolution: 128 x 64
Visual Angle: >160° Input Voltage: 3.3V ~ 6V
Only Need 2 I/O Port Control Pixel Color: Blue
 LCD 2: Operating Voltage: 5V DC Current
Consumption: <60mA Testing Voltage: 0-100V
Testing Current: 1-50A Easy to read even in dim
light</td></tr>
			<tr><td>Gas Sensor</td>
            <td>Operating Voltage is +5V<br>Preheat duration is 20 seconds</td></tr>
			<tr><td>Buzzer</td>
            <td>Operating Voltage: 3.3 to 5 V<br>Frequency: 2500HZ</td></tr>
        </table>


      <p align="center">
        <button class="btn btn-warning"
        style="padding: 0.75rem 1.25rem;font-size: 0.85rem;font-weight: 600;text-transform: uppercase;border: none;border-radius: 25px 25px 0px 25px;background:#FFD662FF; color:#FFF;margin-left:5px;margin-bottom:20px;margin-top:20px;" onClick="openForm()" type="button" class="btn btn-warning" data-toggle="modal" data-target="#formModal">Enquire Now</button>

</p>



    </div>

    
       

    <?php include "footer.php"; ?>