# My solution for the job interview assignment
This solution take a query that selects all users in a database and write them into a local file. The solution then checks if the file is empty to know if it can safely delete the users from the database.

# How to use/test
This solution is made on a localhost using WAMP server. To test the code you have to do the following:
 - Create a local database WAMP - PhpMyAdmin and name it "cegoopgave"
 - Insert the users using the SQL dump in this repo
 - Open the index.php and change the location to store the file in line 24-27 to where you want it.
 - Open an internet explore and type into the address bar "localhost/YourDesireFileLocation"
If everything works as desired a massage should appear saying "File with users has been created and users are removed from the database"

# Final considertations
Since I have not worked with any of the languages listed in the task or have learned about them at school, I hope you can bear with me if I do not write in common code terms or similar.
