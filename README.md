HyperStake Bootstrap Server (Ubuntu 16.04)


Install zip:

sudo apt-get install zip

Place hyperstake.service file to this location:

/etc/systemd/system

In this file change paths to the HyperStake build directory to match yours, then enable and start it:

systemctl enable hyperstake.service

systemctl start hyperstake.service

Add this string to the end of the /etc/crontab file for hourly update (set the actual absolute path to the script, which is in the site's root directory, i.e. where the index.php resides):

24 * * * * root sh /your/path/to/script/script.sh

Restart cron:

sudo service cron restart

Don't forget to set your credentials for JSON RPC session in index.php (line 87).
