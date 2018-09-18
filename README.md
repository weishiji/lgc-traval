# lgc-traval
ubuntu 安装nodejs
-----------------------

``` cammand
curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
sudo apt-get install -y nodejs
```
nginx 配置
---------------------

```config
upstream rockjins {
    server 127.0.0.1:8080; 
    keepalive 64;
}

server {
    listen 80; 

    location / {
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header Host $http_host;
        proxy_set_header X-Nginx-Proxy true;
        proxy_set_header Connection "";
        proxy_pass http://rockjins; 
    }
}
```
