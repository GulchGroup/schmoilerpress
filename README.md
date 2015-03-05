# SchmoilerPress
## An hour of your life

- install node and npm if you don't have them already
- install wp-cli: http://wp-cli.org/
- add wp-cli to path
    - "chmod +x wp-cli.phar"
    - "sudo mv wp-cli.phar /usr/local/bin/wp"
- clone project
- navigate into newly created project folder
- download wordpress: "wp core download"
- create local mysql db (db name and creds of your choice)
- add creds to wp-config: "wp core config --dbname=mysite --dbuser=root --dbpass=password --dbhost=127.0.0.1"
- navigate to 'wp-content/themes/aledade/'
    - run "sudo npm install"
    - run "gulp"
- if your browser doesn't automatically open and take you to it, navigate to 127.0.0.1:8007 in a browser
- run through wordpress install process via browser (these settings are all local and are at your discretion)
- log in to wordpress admin at "/wp-admin" using your newly created wordpress creds
- navigate to 'settings/permalinks'
    - change permalink structure to "custom structure" with the path "/%postname%/" in the input field and save
- navigate to 'settings/reading'
    - change front page displays: to "a static page"
    - front page: "home"
    - posts page: "blog"
    - for each article in a feed, show: "summary"
- navigate to "appearance/themes"
    - activate "aledade" theme
- you're good to go... from now on you can just navigate to "wp-content/themes/aledade/" and run "gulp" to fire up a server that automatically processes, minifies, and error-checks css and js.