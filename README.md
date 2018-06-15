# Shop
Cakephp3 + angularjs

Cài đặt xampp

Cấu hình vhosts
```httpd-vhosts=
<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:\Users\PHP_New\eclipse-workspace\Store"
    ServerName dev.store.com
	
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
	<Directory "C:\Users\PHP_New\eclipse-workspace\Store">
		Options Indexes FollowSymLinks
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
```

Cấu hình hosts

Tham khảo
https://hackmd.io/s/SkKuTG0x7
