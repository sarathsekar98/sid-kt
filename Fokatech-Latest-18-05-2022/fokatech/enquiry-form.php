 <a class="open-button" id="openBtn" onClick="openForm()" style="margin-right:-30px;text-decoration:none;"><i class="fa fa-plus-circle" area-hidden="true"></i>&nbsp;ENQUIRE NOW</a>
<div class = "col-md-4 float-right"  style = "padding-right: 1%;float:right!important;bottom:0;right:0; position:fixed;z-index:9999; max-width:380px;opacity:1;display:none" id="enquiryForm">
				<div class="modal-content" style="background-color:rgba(48, 45, 45, 0.856);color:white;border-radius: 2rem;">
                <div class="modal-header">
                    <span> <img src="assets/img/sbtenq.png" class="img-responsive" id="modalimg" style="width:280px!important;display:inline-block">
					<span style="float:right"><i class="fa fa-minus-square" style="color:#FFD662FF;padding-left:50px;" title="Click to Minimize" onClick="closeForm();"></i></span></span>
                </div>
				
                <form id="formAwesome" action="form.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-3 form-label">
                                Name
                            </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required="" style="border-radius:10rem;padding-left:20px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailid" class="col-3 col-form-label">
                                Email ID
                            </label>
                            <div class="col-9">
                                <input type="email" class="form-control" id="emailid" placeholder="Enter your email ID" name="email" required="" style="border-radius:10rem;padding-left:20px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phonenumber" class="col-3 col-form-label">
                                Mobile #                            </label>
                            <div class="col-9">
                                <input type="tel" class="form-control" id="phonenumber" placeholder="Enter your mobile number" name="phone_number" required="" style="border-radius:10rem;padding-left:20px;">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="city" class="col-3 col-form-label">
                                City
                            </label>
                            <div class="col-9">
                                <select class="form-control" id="city" name="city" required="" style="border-radius:10rem;">
                                    <option value="Alesund" title="Alesund">Alesund</option>
                                    <option value="Arendal" title="Arendal">Arendal</option>
                                    <option value="Bergen" title="Bergen">Bergen</option>
                                    <option value="Bodo" title="Bodo">Bodo</option>
                                    <option value="Drammen" title="Drammen">Drammen</option>
                                    <option value="Egersund" title="Egersund">Egersund</option>
                                    <option value="Farsund" title="Farsund">Farsund</option>
                                    <option value="Flekkefjord" title="Flekkefjord">Flekkefjord</option>
                                    <option value="Floro" title="Floro">Floro</option>
                                    <option value="Fredrikstad" title="Fredrikstad">Fredrikstad</option>
                                    <option value="Gjovik" title="Gjovik">Gjovik</option>
                                    <option value="Grimstad" title="Grimstad">Grimstad</option>
                                    <option value="Halden" title="Halden">Halden</option>
                                    <option value="Hamar" title="Hamar">Hamar</option>
                                    <option value="Hammerfest" title="Hammerfest">Hammerfest</option>
                                    <option value="Harstad" title="Harstad">Harstad</option>
                                    <option value="Haugesund" title="Haugesund">Haugesund</option>
                                    <option value="Holmestrand" title="Holmestrand">Holmestrand</option>
                                    <option value="Honefoss" title="Honefoss">Honefoss</option>
                                    <option value="Horten" title="Horten">Horten</option>
                                    <option value="Kongsberg" title="Kongsberg">Kongsberg</option>
                                    <option value="Kongsvinger" title="Kongsvinger">Kongsvinger</option>
                                    <option value="Kristiansand" title="Kristiansand">Kristiansand</option>
                                    <option value="Kristiansund" title="Kristiansund">Kristiansund</option>
                                    <option value="Larvik" title="Larvik">Larvik</option>
                                    <option value="Lillehammer" title="Lillehammer">Lillehammer</option>
                                    <option value="Mandal" title="Mandal">Mandal</option>
                                    <option value="Molde" title="Molde">Molde</option>
                                    <option value="Moss" title="Moss">Moss</option>
                                    <option value="Namsos" title="Namsos">Namsos</option>
                                    <option value="Narvik" title="Narvik">Narvik</option>
                                    <option value="Notodden" title="Notodden">Notodden</option>
                                    <option value="Oslo" title="Oslo">Oslo</option>
                                    <option value="Porsgrunn" title="Porsgrunn">Porsgrunn</option>
                                    <option value="Risor" title="Risor">Risor</option>
                                    <option value="Sandefjord" title="Sandefjord">Sandefjord</option>
                                    <option value="Sandnes" title="Sandnes">Sandnes</option>
                                    <option value="Sarpsborg" title="Sarpsborg">Sarpsborg</option>
                                    <option value="Skien" title="Skien">Skien</option>
                                    <option value="Sogne" title="Sogne">Sogne</option>
                                    <option value="Stavanger" title="Stavanger">Stavanger</option>
                                    <option value="Steinkjer" title="Steinkjer">Steinkjer</option>
                                    <option value="Tonsberg" title="Tonsberg">Tonsberg</option>
                                    <option value="Tromso" title="Tromso">Tromso</option>
                                    <option value="Trondheim" title="Trondheim">Trondheim</option>
                                    <option value="Vadso" title="Vadso">Vadso</option>
                                    <option value="Vardo" title="Vardo">Vardo</option>
                                    <option value="Vennesla" title="Vennesla">Vennesla</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-3 col-form-label">
                                State
                            </label>
                            <div class="col-9">
                                <select class="form-control" id="state" name="state" required="" style="border-radius:10rem;">
                                    <option value="More og Romsdal" title="More og Romsdal">More og Romsdal</option>
                                    <option value="Aust-Agder" title="Aust-Agder">Aust-Agder</option>
                                    <option value="Hordaland" title="Hordaland">Hordaland</option>
                                    <option value="Nordland" title="Nordland">Nordland</option>
                                    <option value="Buskerud" title="Buskerud">Buskerud</option>
                                    <option value="Rogaland" title="Rogaland">Rogaland</option>
                                    <option value="Vest-Agder" title="Vest-Agder">Vest-Agder</option>
                                    <option value="Sogn og Fjordane" title="Sogn og Fjordane">Sogn og Fjordane</option>
                                    <option value="Ostfold" title="Ostfold">Ostfold</option>
                                    <option value="Oppland" title="Oppland">Oppland</option>
                                    <option value="Hedmark" title="Hedmark">Hedmark</option>
                                    <option value="Finnmark" title="Finnmark">Finnmark</option>
                                    <option value="Troms" title="Troms">Troms</option>
                                    <option value="Vestfold" title="Vestfold">Vestfold</option>
                                    <option value="Nord-Trondelag" title="Nord-Trondelag">Nord-Trondelag</option>
                                    <option value="Telemark" title="Telemark">Telemark</option>
                                    <option value="Oslo" title="Oslo">Oslo</option>
                                    <option value="Sor-Trondelag" title="Sor-Trondelag">Sor-Trondelag</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group row">
                            <label for="product" class="col-3 col-form-label">
                                Product
                            </label>
                            <div class="col-9">
                                <select id="product" class="form-control" name="products" required multiple="multiple" size="3"><i class="fas fa-caret-down fa-3x"></i>
                                        <option value="Location Tracker" title="Location Tracker">Location Tracker</option>
                                        <option value="Battery Monitor" title="Battery Monitor">Battery Monitor</option>
                                        <option value="Security Monitor" title="Security Monitor">Security Monitor</option>
                                        <option value="THS Monitor" title="THS Monitor">THS Monitor</option>
                                        <option value="Smart Fluid_Monitor" title="Smart Fluid Monitor">Smart Fluid Monitor</option>
                                        <option value="Smart Connect" title="Smart Connect">Smart Connect</option>
                                        
                                    </select>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-12" style="margin-top:-20px;">
                     <div class="col-md-3">&nbsp;</div>
					 <div class="col-md-9">
	<input value="Submit Enquiry" type="submit" class="btn btn-warning" style="border-radius:25px 25px 0px 25px; font-size:13px;margin-bottom:5px;" name="enquire" align="middle">
                       </div>
                    </div>
                </form>
            </div>	
            </div>		
            </div>