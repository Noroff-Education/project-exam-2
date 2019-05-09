# HOLIDAZE - HOTEL BOOKING SITE
This readme file will give you the tools you need to complete the project and explains what the different files are and how to use them.

A very basic scaffolding using PHP has been created for you to use.

## Installation
In order to get PHP code to work you need to run it on a server. You could use your web host, but that would be quite cumbersome to work on. To make it easier to code, download XAMPP https://www.apachefriends.org/index.html (or another development environment) and install it. This allows you to run a server on your computer.

Once installed open the panel and click 'Start' on Apache to start your local server. Now find where XAMPP has been installed on your computer (on PC it's likely to be C:\xampp\) and once in this folder open 'htdocs'. Take the unzipped folder 'hotel-booking', which this README is inside of, and copy-paste the whole folder into the htdocs folder.

Now open your browser and go to http://localhost/hotel-booking/server/contact.html. There you should see a simple contact form. This means the files are correctly running on your local server.

If you run into any problems, please let your tutor know.

#### Repository
Inside your 'hotel-booking' folder running on XAMPP, you will see two folders, one called 'server' with all your PHP, html snippets and JSON files. 

Your single page application will live inside of the client folder, so please place all your Angular, React or Vue files inside this folder.

You should CD into the client folder to create your single page application and you can run one of these commands to start the application up: npm start, npm run serve, ng serve.

We have given you HTML snippets which need to be included in your client application. Ensure that the action for your form is going to the PHP files in the server folder.
- contact.html should send data to http://localhost/hotel-api/server/contact-success.php
- enquiry.html should send data to http://localhost/hotel-api/server/enquiry-success.php
- add-establishments.html should send data to http://localhost/hotel-api/server/add-establishments-success.php

Store your JSON files inside your client/public folder, and ensure that your PHP files are reading and writing to these files. The section you need to update with the correct filepath is file_get_contents('establishments.json') and file_put_contents('establishments.json', $jsonData); as these are what are writing and reading your JSON files.

## The Code
#### HTML
The simplest possible forms were written to make the site work. Feel free to adjust layouts as you see fit, but please ensure the input names remain the same to get handled correctly by the PHP.

#### PHP
The PHP code used is fairly simple and has been tested and works correctly. In most projects you'd use a database to store and retrieve data, but to make things easier for you we have created PHP to generate JSON files for you to access. This means that when a user on the front-end sends a contact message, this gets handled by PHP and the data added to a JSON file with an array of contact messages.

#### JSON
The reason we have chosen to create JSON files for you, is that you are likely to find this the most simple way of handling the data on the front-end. One thing to note is that the way the PHP has been written it requires a minimum of one entry in the JSON files, so please don't delete all records in the JSON file.

## Pages
For this project it's important to understand the two views of the website. The first is from the customer-facing side where they can view establishments, make enquiries and send contact messages. These enquiries and messages all get handled from an admin area. This admin area allows an administrator to view the enquiries and messages, and create a new establishment to view on the customer-facing side.

#### Contact
The contact page is for visitors to the site to message the admin team at Holidaze. The page has three inputs for full name, email address and message. The customer submits the form, which gets processed on a separate page, and the data gets added to a JSON file.

#### Enquiry
The enquiry page is the same as above, except with more inputs. One important thing to note on this page is that the name of the establishment has been hard-coded to the page into the value of the input. You need to change the value of the input based on which establishment the user is on. This data then gets sent via the form to the admin area where they can see the name of the establishment being enquired for.

#### Add Establishments
This page is on the admin area and allows the administrators to create a new establishment. When the form is submitted, the data is added to the establishments.json file.
