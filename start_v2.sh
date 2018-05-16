#!/bin/bash
echo "git clone https://github.com/Jekshmek/docker-serv.git" 
git clone https://github.com/Jekshmek/docker-serv.git
cd docker-serv/
sudo rm -rf php-code/ 

echo "clone project"
git clone https://github.com/Jekshmek/php-code.git php-code

echo "sudo docker-compose up -d --build" 
#sudo docker-compose up -d  --build
sudo chown $USER:$USER -c -R docker-serv/php-code/
#gnome-open http://localhost:8080/
exit 0
