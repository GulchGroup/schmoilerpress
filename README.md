# SchmoilerPress
## The easiest way to spin up a boilerplate wordpress theme and environment
### An hour of your life in a github repo

Prerequisites:
- install node and npm (if you don't have them)
- install php (if you don't have it)
- install mysql (if you don't have it)
- install wp-cli: http://wp-cli.org/
- add wp-cli to path
    - "chmod +x wp-cli.phar"
    - "sudo mv wp-cli.phar /usr/local/bin/wp"

SchmoilerPress Installation

- clone project
- navigate into newly created project folder
- download wordpress: "wp core download"
- create local mysql db (db name and creds of your choice)
- add creds to wp-config: "wp core config --dbname=mysitedb --dbuser=root --dbpass=password --dbhost=127.0.0.1"
- navigate to 'wp-content/themes/mytheme/'
    - run "sudo npm install"
    - run "gulp"
- if your browser doesn't automatically open and take you to it, navigate to 127.0.0.1:8007 in a browser
- run through wordpress install process via browser (these settings are all local and are at your discretion)
- log in to wordpress admin at "/wp-admin" using your newly created wordpress creds
- navigate to "appearance/themes"
    - activate "mytheme" theme
- you're good to go... from now on you can just navigate to "wp-content/themes/mytheme/" and run "gulp" to fire up a server that automatically processes, minifies, and error-checks css and js.