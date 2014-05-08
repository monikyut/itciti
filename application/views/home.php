<div id="homepage" class="content-homepage">
		<a onclick="$('#services').animatescroll();">
		<div id="swiffycontainer">
			<script type="text/javascript" src="<?php echo base_url();?>js/flashstage.js"></script>
    	</div>
    	</a>
			<img src="<?php echo base_url();?>resources/background2.png" id="bg-img" class="pure-img-responsive">
	</div>
	<div id="bg-right">
		<div id="about" class="pure-g-r">
			<div class="pure-u-1 content-about">
				<h3>About Us</h3>
				<blockquote>
					Established just in the advent of the new millenium, and a Filipino owned company as a player in the industry has provided both solutions -oriented and market- driven IT services to wide array of companies in almost all areas of business and industry. The company views each project as a long term partnership with the client. It emphasizes the use of current emerging technologies that best serve the client's business needs.
				</blockquote>
				<blockquote>
					IT Citi Inc. enhances the competitive advantage of its clients through superior use of information technology.
				</blockquote>
				<blockquote>
					IT Citi is committed to help its clients focus on managing their businesses rather than technologies. This is achieved by providing its clients with world-class products and world class IT training and consultancy services. IT Citi's capability to match its IT products with specific business environs ensures customers of solutions that fully address their requirement.
				</blockquote>
				<blockquote>
					It's competitive pricing, technical expertise, its ability to quickly respond to the demands of its clients by providing the most efficient and cost effective solutions have given the company an important place in the Philippine IT industry.
				</blockquote>
				<blockquote>
					Creative, resourceful, self-confident and customer focused are IT Citi Consultant's main character. As a practitioner of structured systems development, IT Citi maintains a full complement of seasoned project managers, information systems analysts, systems designers and programmers. It assigns a formidable assembly of professionals to handle analysis, design, development, implementation, and maintenance of a single client's IT requirements. Together, these experts have developed, maintained and supported IT applications for banking, financial, insurance, manufacturing, realty, pharmaceutical, government institutions and other service oriented institutions. The company strongly values the formation of long lasting relationships with its clients. Client welfare and satisfaction tops the list of concerns in the formulation of solutions to IT problems.
				</blockquote>
			</div>
		</div>
		<div class="pure-g-r">
			<div id="services" class="pure-u-1 content-services">
				<h3>IT CONSULTING</h3>
				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<h2>Placement</h2>
						<p>
                			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
        				</p>
    				</div>
    				<div class="pure-u-1-2">
						<h2>Project-based</h2>	
						<p>
                			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
        				</p>
    				</div>
    			</div>
    		</div>
		</div>
	</div>
	<div id="bg-left">
		<div id="careers" class="content-careers">
			<div class="pure-g-r">
				<div class="pure-u-1-1">
					<h2>Job Openings</h2>
				</div>
			</div>
			<div class="pure-g-r">
				<div class="pure-u-1-3">
				</div>
				<div class="pure-u-1-3">
				</div>
				<div class="pure-u-1-3">
					<div class="pure-form">
    					<input id="search" type="text" placeholder="Enter job title..">
    					<button type="submit" class="pure-button">Search</button>
					</div>
				</div>
			</div>
			<?php include_once 'careers.php';?>
			<div class="pure-g-r">
				<div class="pure-u-1">
					<!--<button type="submit" class="apply-btn pure-button" onClick="window.open('applicationform.php')">Apply Now</button>-->
					<button type="submit" class="apply-btn pure-button" onClick="window.location.href='applicationform.php'">Apply Now</button>
				</div>
			</div>
		</div>
		<div id="contact" class="pure-g-r content-contact">
			<div class="pure-u-1-3">
				<h3>Contact Us</h3>
					<p>
						Office Address <br /> 3rd Floor Emerald Place Bldg., <br /> 604 Shaw Blvd., <br /> Pasig City, Manila
    				</p>
    				<p>
		    			Telephone No. <br /> 634-7451 <br /> E-mail Address <br /> itct@pldtdsl.net
    				</p>
    		</div>
    		<div class="pure-u-1-3">
				<div class="pure-form pure-form-message-inline pure-form-stacked">
					<fieldset>
						<label for="message">Message</label>
						<textarea rows="7" cols="40" placeholder="We would love to hear from you!"></textarea>
						<label for="name">Name</label>
						<input id="name" type="text" placeholder="Your Name">     
						<label for="email">Email Address</label>
						<input id="email" type="email" placeholder="Your Email">
						<button type="submit" class="pure-button">Send Message</button>
   					</fieldset>
				</div>
			</div>
			<div class="pure-u-1-3" id="contact-map">
				<div class="pure-form pure-form-stacked">
					<fieldset>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3861.4143130124703!2d121.06013600000003!3d14.5754519999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c86e8f7feff9%3A0x6e585905552b3878!2sI.T.+Citi+Services+Inc.!5e0!3m2!1sen!2sph!4v1399120429489" width="200" height="200" frameborder="0" style="border:0"></iframe><br />
						<button class="pure-button" onClick="window.open('https://goo.gl/maps/r6IlG')">View Map</button>
					</fieldset>
				</div>
			</div>
		</div>
	</div>