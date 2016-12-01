# xpast

a simple open source pastebinit without nc
Usage: `xpast [-m your_api_url] [-p password]`

## How make a custom xpast.deb?

open termian az superuser and write...

1. `git clone https://github.com/xtoolkit/xpast.git`
2. `cp source`
3. `sudo nano xpast_0.1-1/etc/xpast.conf` -> edit for you -> ctrl+x -> y -> enter
4. `sudo nano xpast_0.1-1/DEBIAN/control` -> edit for you -> ctrl+x -> y -> enter
5. `dpkg-deb --build xpast_0.1-1`
6. and final copy "xpast_0.1-1.deb"
7. end :)

## Config your host

it's simple :)
upload api.php and index.php in your host.
if set password for uploads open "api.php" and set your password in line 2

## Demo & Examples

you can install my [xpast_0.1-1.deb](https://github.com/xtoolkit/xpast/blob/master/xpast_0.1-1.deb?raw=true) and write examples in terminal:

- `dmesg | xpast`
- `dmesg 2>&1 | xpast`
- `ll /boot | xpast -m paste.vdev.ir/api.php -p 123456`
