# TimeFlies
Technical Document
Leave your worries behind
Schiphol - Time Flies


Overview
Goal
Tools
File Directory
How to set up this app
Database Script
Architecture
Application system
How to use this app
Server
Reference
Licence





Overview
The system exist of an apache server linked to a database and a website for mobile phones.
Travelers can share their worries by uploading them on the mobile website, which will be then uploaded to the database. Travelers can see the worrie folding up into a paper airplane and fly away on their mobile phone. In addition travelers will see the ten latest uploaded worries fly away on a big screen in the waiting area . 

Goal
Our purpose for this design challenge is to entertain the leisure traveller in the waiting area by making the waiting time into a positive experience.
Tools
HTML
CSS
jQuery
PHP
mySQL
Text Editor
Apache Server
Adobe Photoshop
Adobe Illustrator
File Directory



How to set up this app
1.	Prepare Database and Apache Server.
2.	Create the database by using the script stated below.
3.	Upload these files to your apache server.


Database Script
Use the code stated below to generate the database which is needed for this application.
create table board( id int not null auto_increment primary key, name varchar(20), comment text);


Architecture


Application System
First the user sends a message (worry) to the database. Following this screen.php will pull the text from the database and showcase it on the big screen.The big screen has the following page open: forteamtext.php.





Server
Prepare the screen 
Put the screen in the waiting line
Go to http://37.97.136.49/timeflies/php/testscreen.php  (Recommend Google Chrome)
	



User Manual
User
Prepare your smartphone
Open a browser (Recommend Google Chrome)
Go to https://tinyurl.com/travelworryfree or http://37.97.136.49/timeflies/leave.html  
Write your name and  your worry
Enter “MAKE IT FLY AWAY”
See the paper airplane fly away
Receive a voucher (virtual voucher in the case of our prototype)


Reference
Paper Airplane Animation: http://codepen.io/cihadturhan/pen/KIJdD

Licence
Prodeced by Team Time Flies AMS
