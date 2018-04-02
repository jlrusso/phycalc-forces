<!DOCTYPE html>
<html>
<head>
	<title>PhyCalc | Forces</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forces.css">
</head>
<body>

	<?php
		include_once "navSearch.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="animated bounceInDown section-heading">Forces</h2>
					<div class="pages-nav animated bounceInDown">
						<ul class="pager">
							<li><a href="circularMotion.html" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Circular Motion</a></li>
							<li><a href="gravitationalForces.html" class="next-page-btn">Next: Gravitational Forces<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="solve-selection">
									<form>
										<span class="badge">1</span>
										<span><b>Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btn" name="radio-one" id="net-force-radio-btn">
										    <span class="checkmark">net force</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="mass-radio-btn">
										    <span class="checkmark">mass</span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btn" name="radio-one" id="acceleration-radio-btn">
										    <span class="checkmark">acceleration</span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Units:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="unit-btn" units="ft" name="radio-two" id="newtons-radio-btn">
										    <span class="checkmark">newtons</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="m" name="radio-two" id="kilograms-radio-btn">
										    <span class="checkmark">kilograms</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="mi" name="radio-two" id="grams-radio-btn">
										    <span class="checkmark">grams</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="km" name="radio-two" id="meters-radio-btn">
										    <span class="checkmark">meters</sup></span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="km" name="radio-two" id="kilometers-radio-btn">
										    <span class="checkmark">kilometers</sup></span>
										</label>
									</form>
								</div>
								<div class="time-selection">
									<form>
										<span class="badge">3</span>
										<span><b>Time:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="time-btn" units="ft" name="radio-two" id="seconds-radio-btn">
										    <span class="checkmark">seconds</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="m" name="radio-two" id="minutes-radio-btn">
										    <span class="checkmark">minutes</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="mi" name="radio-two" id="hours-radio-btn">
										    <span class="checkmark">hours</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="km" name="radio-two" id="days-radio-btn">
										    <span class="checkmark">days</span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">4</span>&nbsp;<strong>Values</strong></h4>
									<form class="values-form">
									<span id="delta-symbol">&Delta;</span>
									<input class="form-control input-field" type="number" id="net-force-field" placeholder="net force (Fnet)">
									<input class="form-control input-field" type="number" id="mass-field" placeholder="mass (m)">
									<input class="form-control input-field" type="number" id="acceleration-field" placeholder="acceleration (a)">
									<input class="form-control input-field" type="number" id="sig-figs-field" placeholder="# of sigfigs (optional)">
									<div class="form-divider"></div>
									<div class="calc-and-clear">
										<button type="button" class="btn" id="calculate-btn"><b>Calculate</b></button>
										<button type="button" class="btn" id="clear-btn"><b>Clear</b></button>
									</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrows-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../img/force-equation-one.png" class="img-responsive slide" alt="Force Equation 1"/>
											<img src="../img/force-equation-two.png" class="img-responsive slide" alt="Force Equation 2"/>
											<img src="../img/force-equation-three.png" class="img-responsive slide" alt="Force Equation 3"/>
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../img/force-solo-image.png" class="img-responsive" alt="Acceleration Graph"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><h4 id="background-heading"><b>Background:</b></h4></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module top-corners-rounded">
									<div class="module-front first-front">Newton's 1st Law</div>
									<div class="module-back first-back">
										An object at rest will remain at rest, and an object in motion will remain in motion.
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Newton's 2nd Law</div>
									<div class="module-back">
										If there is a net force on an object, then the object's acceleration satisfies: F = m*a
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Newton's 3rd Law</div>
									<div class="module-back">
										If Object 1 exerts a force on Object 2, then Object 2 is also exerting a force on Object 1
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front last-front">Force Units</div>
									<div class="module-back last-back">
										Newtons (N) or (kg * m)/s<sup>2</sup>
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../img/force-module-image.png" class="img-responsive" alt="Normal Force">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-body" id="third-pics-panel">
					<div class="row animated fadeInLeft">
						<div class="col-sm-4 third-page-pics">
							<input type="image" src="../img/face-punch.jpg" alt="Face Punch" class="img-responsive">
							<div class="img-caption">
								<p>In a biomedical engineering study, Cindy Bir found that boxers can 'generate up to 5,000 newtons of force' in one punch. <a href="https://www.livescience.com/6040-brute-force-humans-punch.html" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<input type="image" src="../img/hockey-puck.jpg" alt="Hockey" class="img-responsive">
							<div class="img-caption">
								<p>A slapshot in hockey can generate up to 350,000 newtons of force at the point of contact with the puck. <a href="https://en.wikipedia.org/wiki/Formula_One_car#Acceleration" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<input type="image" src="../img/crocodile.jpeg" alt="Crocodile" class="img-responsive">
							<div class="img-caption">
								<p>Gregory M. Erickson and colleagues found that all 23 crocodilian species can close their jaws with a force of 16,460 N. <a href="https://gizmodo.com/the-science-of-the-slapshot-stanley-cup-slo-mo-physics-1555118731" target="_blank"/> (Source)</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="line-divider"></div>

			<div class="row text-center" id="practice-btns-outer">
				<div class="text-center" id="practice-btns-container">
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-one">Example 1</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-two">Example 2</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-three">Example 3</button>
				</div>
			</div>


			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Net Force</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<div class="modal-text">
									<p>
									What is the net force acted on a 65kg crate that is on a frictionless horizontal surface and is accelerating east at 13.5 m / s<sup>2</sup>?
									</p>
								</div>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel">
								<img src="img/forcesAccordionImg1.png" class="img-responsive"/>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation :</b> F<sub>net</sub> = (mass) * (acceleration)</li>
										<li><b>Mass of Crate :</b> 65 kilograms</li>
										<li><b>Crate Acceleration :</b> 13.5 m / s<sup>2</sup></li>
									</ul>
								</p>
							</div>
							<button class="accordion last-accordion"><strong>Solution:</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Force<sub>(net)</sub> east:</b> (65kg)(13.5 m/s<sup>2</sup>)</li>
										<li><b>Answer :</b>877 (kg * m) / s<sup>2</sup>, or 877 Newtons (N)</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>





				<div class="modal fade example-modal" id="my-modal-two" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Mass</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
									Tom is pushing a box of unknown mass with a force of 50 Newtons on a frictionless surface. If the acceleration of the box is 2 m/s<sup>2</sup>, what is the mass of the box?
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="img/forcesAccordionImg2.png" class="img-responsive"/>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Equation:</b> Force<sub>(net)</sub> = (mass) * (acceleration)</li>
											<li><b>Solve For Mass:</b> mass = Force<sub>(net)</sub> / (acceleration)</li>
											<li><b>Given Force<sub>(net)</sub>:</b> 50 Newtons</li>
											<li><b>Given Acceleration:</b> 2 m/s<sup>2</sup></li>
										</ul>
									</p>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Equation:</b> mass = Force<sub>(net)</sub> / (acceleration)</li>
											<li><b>Calcualte mass:</b> mass = (50 N) / (2 m/s<sup>2</sup>)</li>
											<li><b>Answer:</b> 25 kg</li>
										</ol>
									</p>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>





				<div class="modal fade example-modal" id="my-modal-three" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Acceleration</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
										Two boxes are pushed along a frictionless horizontal surface. The first box has a mass of 90 kg and is being pushed with a force of 250 N. If the first box is in contact with a second box with a mass of 40 kg, what is the acceleration of both boxes?
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="img/forcesAccordionImg3.png" class="img-responsive"/>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Equation:</b>Force<sub>(net)</sub> = (mass) * (acceleration)</li>
											<li><b>Solve For Acceleration:</b> acceleration = Force<sub>(net)</sub> / (mass)</li>
											<li><b>Given Force:</b> 250 Newtons</li>
											<li><b>Masses:</b> Box 1 mass = 90 kg, box 2 mass = 40 kg</li>
										</ul>
									</p>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Equation:</b> acceleration = Force<sub>(net)</sub> / (mass)</li>
											<li><b>Given Force:</b> 250 N is force pushing both boxes (90 kg + 40 kg)</li>
											<li><b>Solve Acceleration:</b> acceleration = (250 N) / (90 kg + 40 kg)</li>
											<li><b>Answer:</b> 1.91 m/s<sup>2</sup></li>
										</ol>
									</p>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>

				<div id="conversion-outer">
					<div id="conversion-container">
						<div id="conversion-heading">Unit Conversions</div>
						<div class="input-option-input">
							<input type="number" id="unit-input-field" max="999" placeholder="(input)"/>
							<select name="unitConversions" id="unit-converter">
								<option value="mmToM" id="millimetersToCentimeters" selected>mm to cm</option>
								<option value="mToMm" id="centimetersToMillimeters">cm to mm</option>
								<option value="cmToM" id="centimetersToMeters">cm to m</option>
								<option value="mtoCm" id="metersToCentimeters">m to cm</option>
								<option value="mToKm" id="metersTokilometers">m to km</option>
								<option value="kmToM" id="kilometersToMeters">km to m</option>
								<option value="mToMi" id="metersToMiles">m to mi</option>
								<option value="miToM" id="milesToMeters">mi to m</option>
								<option value="mToMi" id="metersToMiles">m to mi</option>
								<option value="kmToMi" id="kilometersToMiles">km to mi</option>
								<option value="miToKm" id="milesToKilometers">mi to km</option>
								<option value="ftToYds" id="feetToYards">ft to yds</option>
								<option value="ydsToFt" id="yardsToFeet">yds to ft</option>
								<option value="ftToM" id="feetToMeters">ft to m</option>
								<option value="mToFt" id="metersToFeet">m to ft</option>
								<option value="inToCm" id="inchesToCentimeters">in to cm</option>
								<option value="cmToIn" id="centimetersToInches">cm to in</option>
								<option value="mgToG" id="milligramsToGrams">mg to g</option>
								<option value="gToMg" id="gramsToMilligrams">g to mg</option>
								<option value="gToKg" id="gramsToKilograms">g to kg</option>
								<option value="kgToG" id="kilogramsToGrams">kg to g</option>
								<option value="lbsToKg" id="poundsToKilograms">lbs to kg</option>
								<option value="kgToLbs" id="kilogramsToPounds">kg to lbs</option>
								<option value="km2Tom2" id="kilometerSquaredToSquareMeters">km² to m²</option>
								<option value="m2ToKm2" id="squareMetersToKilometersSquared">m² to km²</option>-->
							</select>
							<input type="text" id="unit-output-field" placeholder="(output)" disabled="disabled">
						</div>
					</div>
				</div>


		<div class="row">
			<div class="col-md-12" id="bottom-pager">
				<ul class="pager">
					<li><a href="circularMotion.html" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Circular Motion</a></li>
					<li><a href="gravitationalForces.html" class="next-page-btn">Next: Gravitational Forces<span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
			</div>
		</div>


		<!-- Calculator Modal -->
				<div class="modal fade" id="calculator-modal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Calculator</h4>
							</div>
								<div class="modal-body">
									<div class="calculator-whole">
										<input type="text" id="input-field">
										<div class="row">
												<div class="col-half">
														<div id="radians-container">
																<button type="button" id="radians-btn">Radians</button>
																<span id="radians-indicator"></span>
														</div>
												</div>
												<div class="col-half">
														<div id="degrees-container">
																<button type="button" id="degrees-btn">Degrees</button>
																<span id="degrees-indicator"></span>
														</div>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="trig-btn">sin</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="trig-btn">cos</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="trig-btn">tan</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn pi-btn">&pi;</button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="trig-btn">sin<sup>-1</sup></button>
												</div>
												<div class="col-fourth">
														<button type="button" class="trig-btn">cos<sup>-1</sup></button>
												</div>
												<div class="col-fourth">
														<button type="button" class="trig-btn">tan<sup>-1</sup></button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">/</button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="reg-btn">7</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">8</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">9</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn"><b>*</b></button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="reg-btn">4</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">5</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">6</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">-</button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="reg-btn">1</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">2</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">3</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">+</button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" class="reg-btn">0</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn"><b>.</b></button>
												</div>
												<div class="col-fourth">
														<button type="button" id="square-btn">x<sup>2</sup></button>
												</div>
												<div class="col-fourth">
														<button type="button" id="nth-power">x<sup>n</sup></button>
												</div>
										</div>
										 <div class="row">
												<div class="col-fourth">
														<button type="button" id="square-root-btn">&radic;</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">(</button>
												</div>
												<div class="col-fourth">
														<button type="button" class="reg-btn">)</button>
												</div>
												<div class="col-fourth">
														<button type="button" id="ten-power">EE</button>
												</div>
										</div>
										<div class="row">
												<div class="col-fourth">
														<button type="button" id="calculator-calculate-btn">=</button>
												</div>
												<div class="col-fourth">
														<button type="button" id="calculator-clear-btn">Clear</button>
												</div>
												<div class="col-fourth">
														<button type="button" id="delete-btn">Del</button>
												</div>
												<div class="col-fourth">
														<input type="number" id="sig-fig-field" placeholder="#"/>
												</div>
										</div>
								</div>
										<div id="calculator-tooltip"></div>
								</div>
							<div class="modal-footer text-center" id="calc-modal-footer">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
					<div class="close-modal-btn">
						<span class="btn glyphicon glyphicon-remove"></span>
					</div>
				</div>
				<!-- End of Calculator Modal -->

	</section>

	<script type="text/javascript" src="forces.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jsCalculator.js"></script>





</body>
</html>
