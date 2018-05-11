# docker-serv<br>
nginx,php-fpm,mariadb,mongo,postgres

v1:
cd empty folder
$start.sh

or

v2:
start serv<br>
$ docker-compose up -d<br>
info container and image<br>
$ docker ps -a<br>
$ docker image<br>


help command:<br>
sudo docker exec -it mysql mysql -uroot -padminpassword<br>
sudo docker exec -it mongo  mongo admin # use my_database # db.auth("my_user","password123");<br>
