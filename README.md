# domjudge_setup

This is the docker file for domjudge 8.1.3 set up.
You have to change the path under your user name, or just comment the mount option.

The directory "container" is the mount directory.
You can remove it if it is unnecessary for you.

run "sudo docker-compose -f Domjudge up" to set up the Domjudge and the database
(You will have to install docker.io , docker-compose first)
("sudo apt-get install docker.io")
("sudo apt-get install curl")
("sudo  curl -L "https://github.com/docker/compose/releases/download/1.24.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose")
("sudo chmod +x /usr/local/bin/docker-compose")

You can check the password of the domserver and the judgehost during the installation.
(in the install information)
