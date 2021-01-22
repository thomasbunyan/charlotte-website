FROM amazonlinux:2

RUN yum update -y

RUN amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
RUN yum install -y httpd mariadb-server

RUN systemctl start httpd && systemctl enable httpd

EXPOSE 80

CMD ["/usr/sbin/init"]