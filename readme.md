# What It Does #
This project was used to get an idea of how to structure SQL queries and how to use PHP to interface with a database. 

# What I Learned #
* Basics of SQL (element and table CRUD, sorting, joining, subqueries)
* Writing SQL DDL and data by hand ready for importing.
* Usage of mariaDB and PHPmyAdmin.
* Basics of PHP (variables, loops and conditionals, working with databases and displaying data, importing  files such as headers).

Uploading this project to github and my project site has also taught me how to ensure the site and database can still talk to each other through deployment. The original site used a custom php server program to run the site only on the local machine so I've had to learn how to replicate that remotely. I've also learned how to pull the connection details out from being inline into an ini file and secured those details with the .htaccess file, allowing an extra level of security.

Later changes included moving the entire project into Docker containers, so that a local demo can take place. This involved learning how to write a Dockerfile and docker-compose.yml, and how these containers interact with each other.

# Usage Notes #
Feel free to try out the project in demo mode.
Firstly, pull this project onto your local machine using git. If you're not running the services on your own machine then you will also need to grab the latest version of [Docker Desktop](https://www.docker.com/products/docker-desktop/) in order to better manage the containers.

You will need to create a suitable .env file to run the project. To do so, open a terminal in the project root folder `database-design` and run `python _docker/create_secrets.py`. This will create a file in `_docker` called `web-php.env`, which is needed to create the test database.

With your terminal still open, run `docker compose -f .\_docker\docker-compose.yml up -d`.
This creates three containers in a compose stack called database-design. The command is executed in detached mode so you can still use that terminal. You will need to wait 60-90 seconds for everything on the stack to initialise. The stack comprises of the following containers:
- canary-web: This runs the provided PHP files in `htdocs` via a basic Apache sever. The server can be accessed from http://localhost:9001/, where the database can be modified or data viewed using the provided forms.
- canary-db: This is a MariaDB database instance holding the data for our site. Upon startup, it should execute the files in the `db` folder to create and populate the database tables. 
- canary-phpmyadmin: This runs an instance of PHPMyAdmin, which you can use to see the data in the database. It is accessed from http://localhost:3306/. The server is `mariadb`, and the username is `devtest` and password is `devtestpass1`. Logging in, you should be able to browse data within the `canarytest` database.

Once you are finished, shut down the container with `docker-compose down -v`. This also removes any volumes that might have been created.

Obviously, the SQL files used for testing would not be the same ones used in production, as they would be giving away information about the database such as the db, table and column names, which would compromise the security of the database.