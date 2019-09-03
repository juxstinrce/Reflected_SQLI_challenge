# Reflected_SQL_injection
Goal:
  - Become an administrator
  
Steps:
  - Exploit an XSS
  - Exploit an SQLi Reflected
  - Getting an access to the admin panel to retrieve the validation password

# Usefull
I recommend the following links before starting the challenge:
  - https://portswigger.net/kb/issues/00200331_client-side-sql-injection-reflected-dom-based
  - https://sql.sh/
  - https://www.owasp.org/index.php/SQL_Injection

# Configuration
Necessary steps to configure the challenge correctly:
  - Be sure to change the credentials of your current database in the `config/db.php` file
  - Import `challenge.sql` into your favorite DBMS.
  - Create a bot system (with PhantomJS or something else) that visits the `bot/log.html` file every minute. 
  - The challenge is free of rights, reusable and modifiable. Feel free to send me your updates.

# DB architecture
This information needs to be divulged in a way (index.php.bak?), that's why I give it here:
  - The database contains a table `users`
  - The `users` table contains 4 columns: `username`, `password`, `admin` and `views` 
  - When registering, 0 is assigned to the `admin` column

# Creds
The front-end used comes from the site https://root-me.org (which I recommend).
