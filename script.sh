#!/bin/sh
# Absolute path to this script, e.g. /home/user/bin/foo.sh
SCRIPT=$(readlink -f "$0")
# Absolute path this script is in, thus /home/user/bin
SCRIPTPATH=$(dirname "$SCRIPT")
# Go to the coin’s data directory
cd $HOME/.HyperStake
# Find all the block files with the command “ls -1 blk[0-9]*.dat”
# Use the sort command to make sure they’re in order
# Use xargs to prevent an “Argument list too long” error
ls -1 blk[0-9]*.dat | sort | xargs cat > $SCRIPTPATH/bootstrap.dat
# Optionally, compress the file. You need to install zip for this
cd $SCRIPTPATH
zip bootstrap.zip bootstrap.dat 
# Remove the original file
rm -f bootstrap.dat
