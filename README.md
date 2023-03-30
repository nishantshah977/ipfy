# ipfy
Alternative of iplogger.org

# About

With help of IPfy you can get IP address and HTTP user Agent. It will store these data in database. 
* index.html - User Interaction page to get url 
* form_handle.js - Generate tracking code & Submit Form to form_handle.php
* form_handle.php - Check url and update to ipfy_url DB table.
* collect.php - Collect user IP and User agent and redirect to url.
* retrieve.php - Display user IP and User agent

# Before Use
* You need to make your own UI as this project doesn't have except index.html
* You need to have CREATE TABLE privilege in DB

# URL Structures
* `http://localhost/collect.php?code=tracking_code` - Send to Victim to collect IP and User agent
* `http://localhost/retrieve.php?code=tracking_code` - Get IP and user Agent.

# Note
This project is made for my own practice. If you want to use it you can but need to create UI on your own.

**Tested on**
* Apache
* MariaDB
