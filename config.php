<?php
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']			= 'Valerie';
$personal['last_name']			= 'Merchant';
$personal['phone_number']		= '641-430-3590';
$personal['email_address']	= 'hello@vmerch.me';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Facebook', 'https://www.facebook.com/vmerch');
$social_media[] = array('Twitter', 'http://twitter.com/valeriemerchant');
$social_media[] = array('LinkedIn', 'http://www.linkedin.com/in/valeriemerchant');
$social_media[] = array('Google+', 'https://plus.google.com/117930008344922530179/about');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2012',
	'Web Designer',
	'Banno (formerly T8 Webware), Cedar Falls, Iowa',
	'January 2011 – Present<br>
	Lead bank and credit union clients through discovery, sitemap, and wireframe phases; then designed their responsive websites, ads, launch kits, and icons.');
$work_history[] = array('2012',
	'Freelance Design',
	'Rife Recording Sudio',
	'Created new corporate identity: logo and stationery design.');
$work_history[] = array('2011–2012',
	'Freelance Design',
	'Deck Restore & More',
	'Designed print materials for promotions.');
$work_history[] = array('2009',
	'Graphic Designer',
	'Hawthorn Market & Cafe, Ames, Iowa<br>',
	'Design signs for specials and promotions, including but not limited to drinks and featured sandwiches.');				

$work_history[] = array('2009, May – August',
	'Design Intern',
	'G-G Amalgamated, Minneapolis, Minnesota',
	'Designed backgrounds for website; created business cards; edited movie clips from video archives and converted them into usable formats.');
$work_history[] = array('2008, May – August',
	'Design Intern',
	'e10 inc., Minneapolis, Minnesota',
	'Designed logotype signature for Golden Opps; imported and formatted book layout and text.');
$work_history[] = array('2007–2009',
	'Designer',
	'UHURU magazine',
	'Photographed material, and designed layouts and type treatments for feature articles.');
$work_history[] = array('2008',
	'Designer',
	'Clear Lake Dance Team',
	'Designed warm-up jackets, from concept to final production.');
$work_history[] = array('2008',
	'Designer',
	'ISU Practicum',
	'Selected by a competitive portfolio review. Created design solutions for non profit organizations.');
	
// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('Iowa State University', 'Master of Art in Graphic Design, College of Design<br>Graduated May 2011');
$education[] = array('Iowa State University', 'Bachelor of Fine Arts in Graphic Design, College of Design<br>Graduated May 2009');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.
$skills[] = array('Design Strengths', 'Typography, visual branding, symbology, grid structures, computer illustration, design principles, website design.');
$skills[] = array('Software Skills', 'Adobe Illustrator, InDesign, and Photoshop; Flash, Dreamweaver, Cinema 4-D.');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('Honors', 'Deans List: 2007, 2008, 2009, 2010');
$awards[] = array('Exhibitions', 'International Corrugated Packaging Foundation: 2008 Top honor in national logo design');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media']	= true;
$settings['education']		= true;
$settings['skills']				= true;
$settings['awards']				= true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable']	= true;
$settings['style']			= "dark";
$settings['lang']				= "en";
?>
