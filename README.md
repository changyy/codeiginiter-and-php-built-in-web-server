# PHP built-in Web server #

無論在 Windows/Linux/macOS 等環境中，都可以善用 PHP built-in web server 來進行開發測試

http://php.net/manual/en/features.commandline.webserver.php

# Windows #

1. 下載 PHP 7.0，挑個 Thread Safe 即可
	- http://windows.php.net/download#php-7.0-nts-VC14-x64
		- VC14 x64 Non Thread Safe (2018-Jan-03 18:33:05)
		- http://windows.php.net/downloads/releases/php-7.0.27-nts-Win32-VC14-x64.zip

2. 安裝 VC14-x64 相關套件
	- http://www.microsoft.com/en-us/download/details.aspx?id=48145
		- vc_redist_x64

3. 在 Windows 環境上執行，如 Desktop

```
C:\Users\user\Desktop> cd ci-project\web
C:\Users\user\Desktop\ci-project\web>C:\Users\user\Downloads\php-7.0.27-Win32-VC14-x64\php.exe -S localhost:8000 ..\tools\ci-routing.php
PHP 7.0.27 Development Server started at Tue Jan 23 10:11:32 2018
Listening on http://localhost:8000
Document root is C:\Users\user\Desktop\ci-project\web
Press Ctrl-C to quit.
```

4. 如此一來，用瀏覽器開啟 localhost:8000 就會看到網頁了，此招數唯一的缺點只剩 DB 位置連不到
