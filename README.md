# Cloud-Computing-IndividualAssignment
A dockerized laravel application
## Requirements
* git
* make
* docker
* docker-compose
## Installation
* Download the repo as ZIP file or clone into a directory using ssh or http (https://github.com/ktneranga/Cloud-Computing-IndividualAssignment.git)
* Then, go inside the ```docker_php``` directory, and run ```make up``` to start your project in Docker.
* Logs into the docker container to and to get the interactive shell of the container
## Available ```make``` Commands
| Command       | Description                                                                                 |
| ------------- | --------------------------------------------------------------------------------------------|
| Down          | Stops the development environment.                                                          |
| shell         | Logs in to the Docker Container for the App.                                                |
| up            | Starts the development environment.                                                         |
| up-f          | Starts the development environment in foreground, so you can view logs from the containers. |
