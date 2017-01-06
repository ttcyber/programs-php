<html>
<head>
<title>tritechsc.org/programs/</title>
<script type='text/javascript' src='jwplayer/jwplayer.js'></script>

<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#8d1af8;
font-family:"Arial","sans-serif";color:#700070;font-size:12px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#71b9cf;font-size:18px;}

a{
font-family:"Arial","sans-serif";
font-size:18px;
font-size:2em;
color: #ffffff;
background-color:#000;
text-decoration:none;

}

a:hover {
font-family: arial, san-serif;
font-size:18px;
font-size:2em;
background-color: #111;
color: #fff;
text-decoration:none;

}

#list{
position:absolute;
text-align: left;
top: 100px;
left :100px;

}
#video-location{
text-align: left;
font-size:18px;
color: #8d1af8;
position:absolute;
top: 150px;
left :10px;
width: 680px;
height: 500px;
z-index:0;
}
</style>
</head>
<body>
<?php
	$theList = array("*");
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "db")
        {
            $thelist .= '<a href="'.$file.'" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>
<div id= "list">
<?php echo $thelist?>
<pre>

<a href = "https://www.youtube.com/watch?v=vam5WktVSP0">Digital Arts/Filmmaking </a>

<a href ="https://www.youtube.com/watch?v=ViObXK_cbLc"> Culinary Arts</a>

<a href ="https://www.youtube.com/watch?v=RunOznc73H8">Teen Parent/GRADS</a>

<a href ="https://www.youtube.com/watch?v=NlTt2l7zOmA">Construction Trades</a>

<a href ="https://www.youtube.com/watch?v=Hreg838LUIY">Welding Technology</a>

<a href ="https://www.youtube.com/watch?v=l0E-FiVlvX0 "> Pre-Vet Tech</a>

<a href ="https://www.youtube.com/watch?v=MYXDLolwE7Y">Law Enforcement</a>

<a href ="https://www.youtube.com/watch?v=a1juZ8jSj4A">Early Childhood Education</a>

<a href ="https://www.youtube.com/watch?v=Cscs976mCJU">Diesel Technology</a>
 
<a href ="https://www.youtube.com/watch?v=VxuVvCbw1kA">Auto Systems Tech </a>

<a href ="https://www.youtube.com/watch?v=Ww_Y4vKJ8vY">Auto Body Technology</a>
 
<a href ="https://www.youtube.com/watch?v=qXTjECpHxLY">Video Game Design</a>
 
<a href ="https://www.youtube.com/watch?v=bML15H4CPK8">Pre-Nursing</a>
 
<a href ="https://www.youtube.com/watch?v=gWCh_vtVEFI">Fire Fighting</a>

<a href ="https://www.youtube.com/watch?v=80W1chgCcyA">Dental Assisting</a>

<a href ="https://www.youtube.com/watch?v=fh93XznQfl4">Cyber Security</a>
  
<a href ="https://www.youtube.com/watch?v=9gudnJNrf0A">Cosmetology</a>
 
<a href ="https://www.youtube.com/watch?v=tMdgQStiqsg">Careers In Healthcare</a>
 
<a href ="https://www.youtube.com/watch?v=_DYJGD7b3dk">Radio Broadcasting</a>

</pre>

<pre>
CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(32) NOT NULL auto_increment,
  `ip` varchar(32) NOT NULL,
  `timein` varchar(32) NOT NULL,
  `datein` varchar(32) NOT NULL,
  `pagename` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

select distinct ip from programs where pagename = "Cyber-Security";

.htaccess to turn off php errors
php_value error_reporting 2039
</pre>

<pre>
- Auto Body Technology
- Auto Systems Technology
- Computer Science/Cyber Security 
- Construction Trades
- Cosmetology
- Culinary Arts
- Dental Assisting
- Diesel Technology
- Digital Arts & Filmmaking
- Early Childhood Education
- Firefighting
- Game Design
- Careers in Health Care
- Law Enforcement
- Pre-Nursing
- Pre-Veterinary Technician
- Radio Broadcasting and Production
- Teen Parenting 
- Welding Technology
</pre>

<pre>
Construction-Trades
Firefighting
Digital-Arts-Filmmaking
Cyber-Security
Pre-Veterinary-Technician
Welding-Technology
Auto-Body-Technology
Law-Enforcement
Culinary Arts
Radio-Broadcasting-and-Productio
Early-Childhood-Education
Auto-Systems-Technology
Teen-Parenting
Cosmetology
Dental-Assisting
Pre-Nursing
Careers-in-Health-Care
Diesel-Technology
Game-Design
</pre>
</div>
</body>
</head>
