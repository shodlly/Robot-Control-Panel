# Robot-Control-Panel
Building a web page to control the direction of the robot's movements and linking it to a database

## Features
- **Control Interface**: A web page with buttons to control the robot's movements.
- **Database Logging**: Stores movement commands in a MySQL database for tracking purposes.

## Prerequisites
- **XAMPP** (Apache and MySQL)
- **Visual Studio Code**

## Setup

1. **Install XAMPP**  
   Download and install XAMPP from [here](https://www.apachefriends.org/index.html).

2. **Start Services**  
   Start Apache and MySQL services from the XAMPP Control Panel.

3. **Place Files**  
   Copy the following files into the directory `C:\xampp\htdocs\ROBOT_CONTROL\`:
   - `action.php`
   - `db.php`
   - `index.php`
   - `robot_control.sql`
   - `script.js`
   - `send_command.php`
   - `style.css`

4. **Import Database**  
   Open phpMyAdmin (accessible via [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)), create a new database, and import the `robot_control.sql` file to set up the necessary tables.

## Usage

1. **Control the Robot**  
   Open your browser and go to `http://localhost/ROBOT_CONTROL/index.php` to access the control panel and send movement commands to the robot.

2. **View Last Movement**  
   To view the last recorded movement direction.

## Web-Based Control Interface
![Web-Based Control Interface](https://github.com/user-attachments/assets/a82f3cb7-0158-4024-9f1b-db81cf87c739)  
Interface for controlling the robot's movements through a web page.

## Example After Clicking the (RIGHT) Button
![Example After Clicking the (RIGHT) Button](https://github.com/user-attachments/assets/6c0c68d4-32af-49ab-be68-b4b7a695e5f0)  
Demonstration of the robot's response after sending the "RIGHT" command.

## HTML Page with Remote Control and Database Storage
![HTML Page with Remote Control and Database Storage](https://github.com/user-attachments/assets/1dae9b19-b867-4753-9d6a-2dc496a2fa7f)  
HTML page that integrates remote control with database storage functionality.

## Last Movement Display
![Last Movement Display](https://github.com/user-attachments/assets/ca31a0be-e1da-4aa6-8646-de122f48eed2)  
Displays the most recent movement direction recorded in the database.
