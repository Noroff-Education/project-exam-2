# HOLIDAZE - HOTEL BOOKING SITE

There are two versions of the API you can choose.

The **hosted API version** you don't have to set up yourself, you will only need a key to use it. A key will be supplied to you if you choose this option - please contact Connor on Discord or via email to get a key: connor.brien@noroff.no.

You won't be able to change any code in this API.

---

The **PHP localhost version** you can run on your own computer using something like XAMPP. You will be able to change the code in this API (add fields or properties for example), but this does require manually setting the API up on your computer and a bit of PHP knowledge.

---

Information on using the hosted version is [here](hosted-API.md).

---

## PHP localhost version

A very basic scaffolding using PHP has been created for you to use.

## Installation

In order to get the PHP code to work you need to run it on a server. You could use your web host, but that would be quite cumbersome to work on. To make it easier to code, download XAMPP https://www.apachefriends.org/index.html (or another development environment) and install it. This allows you to run a server on your computer.

Once installed, open the panel and click 'Start' on Apache to start your local server. Now find where XAMPP has been installed on your computer (on Windows it's likely to be C:\xampp\) and once in this folder open 'htdocs'. Take the unzipped folder 'hotel-booking', which this README is inside of, and copy-paste the whole folder into the htdocs folder.

Now open your browser and go to http://localhost/hotel-booking/contact.html. There you should see a simple contact form. This means the files are correctly running on your local server.

If you run into any problems, please let your tutor know.

#### Repository

The provided HTML files are a way to test sending data to the server endpoints, but you can't send data to the server in a React or Vue project that way. Examples of posting data in the frontend frameworks will be provided.

-   the contact form should send data to http://localhost/hotel-api/contact-success.php
-   the enquiry form should send data to http://localhost/hotel-api/enquiry-success.php
-   the add establishment form should send data to http://localhost/hotel-api/add-establishments-success.php

Store your JSON files inside your frontend project's public folder, and ensure that your PHP files are reading and writing to these files. The section you need to update with the correct filepath is file_get_contents('establishments.json') and file_put_contents('establishments.json', \$jsonData); as these are what are writing and reading your JSON files.

You can fetch the contents of the json files by using the following URLs:

-   http://localhost/hotel-api/get-establishments.php
-   http://localhost/hotel-api/get-establishment.php
-   http://localhost/hotel-api/get-enquiries.php
-   http://localhost/hotel-api/get-contacts.php

## The Code

#### HTML

The names of the inputs in the provided HTML forms are the ones that must be used. The PHP codes is expecting those names.

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
