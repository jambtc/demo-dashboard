# demo-dashboard
Dashboard to List Application demos




### Setup site 

#### 1. add CNAME domain name to your server

#### 2. Move sites from one to another server

```bash
scp -r user@website.com:/source/folder/ /destination/folder
```

#### 3. Create apache configuration file
```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName subdomain.domain.com
    ServerAlias www.subdomain.domain.com
    DocumentRoot /var/www/subdomain/folder
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

#### 4. Enable site
```
a2ensite apacheconfigfile.conf
```

#### 5. Create Certificate
```
certbot --apache
```
