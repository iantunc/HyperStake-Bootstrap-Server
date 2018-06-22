#!/bin/sh
# Go to the coin’s data directory
# Change yourUser to your actual user name
cd /home/yourUser/.HyperStake
# Find all the block files with the command “ls -1 blk[0-9]*.dat”
# Use the sort command to make sure they’re in order
# Use xargs to prevent an “Argument list too long” error
# Place bootstrap.dat to the desired destination
ls -1 blk[0-9]*.dat | sort | xargs cat > /your/path/to/bootstrap/bootstrap.dat
# Optionally, compress the file. You need to install zip for this
cd /your/path/to/bootstrap/
zip bootstrap.zip bootstrap.dat 
# Remove the original file
rm -f bootstrap.dat
