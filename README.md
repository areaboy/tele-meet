# Tele-Meet
An interactive virtual Face to Face Tele-Video Conferencing & Appointments Booking Applications that Connects Medical Teams, Business Women, Law-Makers, 
Enterpreneurs, IT-Experts etc. with Women seeking for help on Gender Equity in all works of life.




# How To Test the Application:
This application was written in **Agora.io Videocall sdk, PHP, Ajax, JQUERY, Bootstraps, Css, Mysql, Email-Server** etc.

 You will need Xampp Server with Mysql Database installed to run the application.

1.) First  you will need to download **php emailer clients** from **https://github.com/areaboy/php-emailer.**  Extract and copy **mail_vendor** folder into the main project folder called **equity_tele_meet**.

2.) visit **Agora.io** Website(https://www.agora.io). Get registered on their Website and get a free **app_id** secret keys for Videocall Telepresence API Integrations.

3.) Locate the database table called **equity_meetup_db.SQL** and import it to your database

4.) Edit **data6rst.php** file to reflect your database credentials.

5.) Edit **settings.php** file to reflect your Agora API Keys and  Email Server Credentials.

6.) Edit **settings.php** file to reflect your Site Project Url(Domain).  Warning:  Agora Videocall SDK does not work with url Localhost(http://localhost).
 You will have to set your correct domain pointing to your application folder. Eg https://example.com/equity_tele_meet

7.) callup the application on the browser Eg http://localhost/equity_tele_meet/

8.) Click on Signup Form to get registered. Click on Login Form to access the aplications.
