# Famular - Influencer Advertisement Marketing Website

## Overview

Famular is an influencer advertisement marketing website designed to connect brands with influencers for effective marketing campaigns. The platform leverages YouTube, Instagram, and regional influencers to help businesses reach their target audience and maximize their brand visibility.

## Features & Services

Famular provides three core services:

-- YouTube Influencer Marketing – Connects brands with YouTube influencers to promote products and services    through video content.

-- Instagram Influencer Marketing – Helps businesses collaborate with Instagram influencers for impactful social media promotions.

-- Regional Influencer Marketing – Targets local audiences by engaging influencers from specific regions to enhance localized brand outreach.

## Technologies Used

The website is developed using the following technologies:

1. **Frontend:** HTML, CSS, JavaScript

2. **Backend:** PHP

3. **Database:** SQL

## Installation & Setup

To set up and run the Famular website on your local or web server:

1. Clone or download the repository.
      ```
      git clone https://github.com/NavedAlam0/Famular---website.git
      cd Famular
      ```

2. Configure your web server (Apache, Nginx, etc.) to support PHP.
   1. Install Apache (if not installed)

        - Windows (XAMPP/WAMP): Install XAMPP or WAMP.
        - Linux (Ubuntu/Debian):
           ```
           sudo apt update
           sudo apt install apache2
           ```
        - Mac (Homebrew):
           ```
           brew install httpd
           ```
   2. Configure Apache for PHP
        If PHP is not enabled, install it:

        - Ubuntu/Debian:
          ```
          sudo apt install php libapache2-mod-php php-mysql
          sudo systemctl restart apache2
          ```
        - Mac (Homebrew):
          ```
          brew install php
          brew services restart httpd
          ```
   3. Setup Virtual Host for Your Website
        - Locate Apache Configuration File:
            - Ubuntu/Debian: /etc/apache2/sites-available/famular.conf
            - Windows (XAMPP): C:\xampp\apache\conf\extra\httpd-vhosts.conf
            - Mac: /usr/local/etc/httpd/httpd.conf
        - Create or Edit Virtual Host Configuration:
            - Add the following configuration:
                ```
                <VirtualHost *:80>
                    ServerAdmin admin@famular.com
                    DocumentRoot "/var/www/html/famular"
                    ServerName famular.com
                    ServerAlias www.famular.com
                    <Directory "/var/www/html/famular">
                        AllowOverride All
                        Require all granted
                    </Directory>
                    ErrorLog ${APACHE_LOG_DIR}/error.log
                    CustomLog ${APACHE_LOG_DIR}/access.log combined
                </VirtualHost>
                ```
            - Replace /var/www/html/famular with the path where your Famular website is located.
   4. Enable the Site & Restart Apache
        - Linux/Mac:
            ```
            sudo a2ensite famular.conf
            sudo systemctl restart apache2
            ```
        - Windows (XAMPP):
            - Open XAMPP Control Panel
            - Start Apache
   5. Update Hosts File (If Using Custom Domain Locally)
        - Edit your hosts file:

        - Windows: C:\Windows\System32\drivers\etc\hosts
        - Linux/Mac: /etc/hosts
        - Add the following line:
            ```
            127.0.0.1 famular.com www.famular.com
            ```
   6. Test Your Website
        - Open http://famular.com/ in your browser.

3. Import the provided SQL database into your MySQL server.
   1. Open MySQL
        - For XAMPP/WAMP (Windows)
            - Open XAMPP Control Panel and start Apache & MySQL.
            - Click Shell and run:
                ```
                mysql -u root -p
                ```
             (Default root password is empty unless you set one.)

        - For Linux/macOS 
            - Open Terminal and run:
                ```
                mysql -u root -p
                ```
                (Enter your MySQL root password when prompted.)

   2. Create a New Database
        - Before importing the SQL file, create a database:
            ```
            CREATE DATABASE famular;
            USE famular;
            ```
   3. Import the SQL File
        - Option 1: Using MySQL Command Line
            - If you have an SQL file (famular.sql), run:
                ```
                mysql -u root -p famular < /path/to/famular.sql
                ```
                Replace /path/to/famular.sql with the actual file path.

        - Option 2: Using phpMyAdmin (XAMPP/WAMP)
           - Open phpMyAdmin (http://localhost/phpmyadmin).
           - Click Databases → Create a database (famular).
           - Click Import → Choose famular.sql → Click Go.
   4. Verify the Import
        - After import, check if the tables exist:
            ```
            SHOW TABLES;
            ```
4. Update database connection details in the PHP configuration file.

5. Start the server and access the website through your browser.

## Usage

1. ***Brands & Businesses:*** Register to connect with influencers.

2. ***Influencers:*** Apply for campaigns that match their niche.

3. ***Admins:*** Manage users, campaigns, and transactions via the admin dashboard.

## Contribution

If you would like to contribute to Famular, feel free to submit issues or pull requests.

## License

This project is licensed.
