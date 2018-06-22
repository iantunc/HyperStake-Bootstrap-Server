HyperStake Bootstrap Server (Ubuntu 16.04)



Place hyperstake.service file to this location:

/etc/systemd/system

Then enable and start it:

systemctl enable hyperstake.service

systemctl start hyperstake.service

Add this string to the end of the /etc/crontab file for hourly update (set the actual path to the script):

24 * * * * root /your/path/to/script/script.sh

Restart cron:

sudo service cron restart
