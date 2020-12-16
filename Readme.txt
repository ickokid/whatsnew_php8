https://nspeaks.com/install-nginx-php-mariadb-windows/
http://jhonydev.blogspot.com/2018/10/instalasi-nginx-php-mysql-pada-windows.html

INSTALL NGINX
==============
1. download versi stable windows : http://nginx.org/en/download.html
2. extract file download dan ganti nama folder jadi nginx. Path di D:\nginx
3. buka command prompt sebagai adminstrator. arahkan ke path D:\nginx
4. untuk mulai ketik : start nginx
5. untuk stop ketik : nginx -s stop / nginx -s quit / nginx -s reload
6. untuk melihat nginx sedang berjalan : taskkill /f /im nginx.exe


UBAH PORT & DOCUMENT ROOT DI NGINX
==================================
1. buka file nginx.conf di path D:\nginx\conf
2. edit bagian untuk ubah port => listen       86;
3. edit bagian untuk ubah document root => root   html;


CONFIG PHP DI NGINX
===================
1. download php versi windows di https://windows.php.net/download/ (Zip file VS16 x64 Thread Safe)
2. extract hasil download di D:\php8
3. buka command prompt sebagai adminstrator. arahkan ke path D:\nginx\php8
4. lalu jalankan : php-cgi.exe -b 127.0.0.1:9000
5. buka file nginx.conf di path D:\nginx\conf
6. edit bagian untuk mengaktfikan php di nginx
location ~ \.php$ {
	root           html;
	fastcgi_pass   127.0.0.1:9000;
	fastcgi_index  index.php;
#    fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
	fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
	include        fastcgi_params;
}
7. Copy file "php\php.ini.production" ke "D:\nginx\php8\php.ini"
extension_dir = ""D:\nginx\php8\ext"
date.timezone = "Asia/Jakarta"
enable_dl = On
cgi.force_redirect = 1
fastcgi.impersonate = 1
cgi.rfc2616_headers = 1
extension=bz2
extension=curl
extension=gettext
extension=fileinfo
extension=gd
extension=gmp
extension=intl
extension=imap
extension=ldap
extension=mbstring
extension=exif
extension=mysqli
extension=openssl
extension=pdo_mysql
extension=pdo_sqlite
extension=sqlite3
extension=soap
extension=sockets
extension=xsl


SETUP JIT PHP 8
===============
1. Edit file php.ini
2. aktifikan 
zend_extension=opcache.so
opcache.enable=1
opcache.enable_cli=1
3. tambahkan 
opcache.jit_buffer_size=100M
opcache.jit=1235
4. lalu restart nginx