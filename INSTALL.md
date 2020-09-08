
## Import the PostgreSQL signing key, add the PostgreSQL apt repository, install PostgreSQL

    wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -
    sudo add-apt-repository "deb http://apt.postgresql.org/pub/repos/apt/ xenial-pgdg main"
    sudo apt-get update
    sudo apt-get -y install postgresql-10 postgresql-client-10 postgresql-contrib-10 libpq-dev
