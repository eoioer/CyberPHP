# CyberPHP: The Fastest and Smallest PHP Framework
![Performance](https://github.com/eoioer/CyberPHP/blob/main/performance.jpg?raw=true)


Suitable for individual developers to manage multiple regular applications. 

A 512MB host with one core can deploy hundreds of enterprise websites.

It offers excellent performance, supports virtual hosting, and is highly flexible, allowing for custom ORM or View Template Library.

You can customize request middleware and application middleware.

CyberPHP has very few files, yet delivers outstanding performance, and you can quickly understand its full capabilities by reviewing its source code, which consists of fewer than ten files.

Not suitable for large projects.

## Three Startup Modes

1. **Default High-Performance Mode**
   - Execute the following command in the project root directory:
     ```bash
     php server.php start
     ```

2. **PHP-FPM with Nginx**
   - Performance is several times better than traditional FPM frameworks.
   - Example Nginx configuration file:
     ```nginx
     server {
         listen       80;
         server_name  your_domain;
         root   "directory_path/public";
         index  index.html index.htm index.php;

         location / {
             try_files $uri $uri/ /index.php?$query_string;
         }

         location ~ \.php(.*)$ {
             fastcgi_pass   127.0.0.1:9000;
             fastcgi_index  index.php;
             fastcgi_split_path_info  ^((?U).+\.php)(/?.+)$;
             fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
             fastcgi_param  PATH_INFO  $fastcgi_path_info;
             fastcgi_param  PATH_TRANSLATED  $document_root$fastcgi_path_info;
             include        fastcgi_params;
         }
     }
     ```

3. **PHP Built-in Server**
   - Suitable for development.
   - Execute the following command in the project root directory:
     ```bash
     php -S 0.0.0.0:80 public/index.php
     ```



![CyberPHP.jpg](https://github.com/eoioer/CyberPHP/blob/main/CyberPHP.jpg?raw=true)
