# xpast
a simple open source pastebinit without nc<br>
Usage: xpast [-m your_api_url] [-p password]

# How make a custom xpast.deb?
open termian az superuser and write...
<ol>
  <li>git clone https://github.com/xtoolkit/xpast.git</li>
  <li>cp source</li>
  <li>sudo nano xpast_0.1-1/etc/xpast.conf -> edit for you -> ctrl+x -> y -> enter</li>
  <li>sudo nano xpast_0.1-1/DEBIAN/control -> edit for you -> ctrl+x -> y -> enter</li>
  <li>dpkg-deb --build xpast_0.1-1</li>
  <li>and final copy "xpast_0.1-1.deb"</li>
  <li>end :)</li>
</ol>
# config your host
it's simple :)<br>
upload api.php and index.php in your host.<br>
if set password for uploads open "api.php" and set your password in line 2

# demo & examples
you can install my xpast_0.1-1.deb (https://github.com/xtoolkit/xpast/blob/master/xpast_0.1-1.deb?raw=true) and write examples in terminal:
<ul>
  <li>dmesg | xpast</li>
  <li>dmesg 2>&1 | xpast</li>
  <li>ll /boot | xpast -m paste.vdev.ir/api.php -p 123456</li>
</ul>
