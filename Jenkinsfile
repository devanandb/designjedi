#!/usr/bin/env groovy

# Install PHP 7.1
sudo apt-add-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.1-cli php7.1-curl php7.1-sqlite3 php7.1-mysql php7.1-xml php7.1-mbstring php7.1-iconv 

# Install Composer
## Become Root (easier to install with the next command)
sudo su

## Install Composer directly to a global location
php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

## Go back to our normal user
exit
which composer # /usr/bin/composer

node('master') {
    try {
        stage('build') {
            // Checkout the app at the given commit sha from the webhook
            checkout scm

            // Install dependencies, create a new .env file and generate a new key, just for testing
            sh "composer install"
            sh "cp .env.example .env"
            sh "php artisan key:generate"

            // Run any static asset building, if needed
            // sh "npm install && gulp --production"
        }

        stage('test') {
            // Run any testing suites
            sh "./vendor/bin/phpunit"
        }

        stage('deploy') {
            // If we had ansible installed on the server, setup to run an ansible playbook
            // sh "ansible-playbook -i ./ansible/hosts ./ansible/deploy.yml"
            sh "echo 'WE ARE DEPLOYING'"
        }
    } catch(error) {
        throw error
    } finally {
        // Any cleanup operations needed, whether we hit an error or not
    }

}
