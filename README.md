# symfony_tp

Run docker sqlite web : docker run -d -p 8080:8080 --rm -v $(pwd)/var/data.db:/db/my_database.db tomdesinto/sqliteweb my_database.db

1. The .env file is a file to configure project, it allows to set up the environment to run the project without password or sensitive files. To have your own configuration you can copy the .env and create a .env.local and add your own configuration (db use, password, etc)

2. You have to configure the connector to database to set up the db conf that you want 
