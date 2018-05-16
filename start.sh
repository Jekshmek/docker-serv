#!/bin/bash
echo "git clone https://github.com/Jekshmek/docker-serv.git" 
git clone https://github.com/Jekshmek/docker-serv.git
cd docker-serv/
echo "sudo docker-compose up -d --build" 
sudo docker-compose up -d  --build
sudo chown $USER:$USER -сR docker-serv/php-code/
gnome-open http://localhost:8080/
exit 0
