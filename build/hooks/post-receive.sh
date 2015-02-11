#!/bin/sh
#
## store the arguments given to the script
read oldrev newrev refname
 
## Where to store the log information about the updates
LOGFILE=./post-receive.log
 
# The deployed directory (the running site)
DEPLOYDIR=/var/www/skypingpong-labscom/
 
# The composer directory
COMPOSERDIR=composer
 
# Repository Directory
REPODIR=$HOME/sky.git
 
##  Record the fact that the push has been received
echo -e "Received Push Request at $( date +%F )" >> $LOGFILE
echo " - Old SHA: $oldrev New SHA: $newrev Branch Name: $refname" >> $LOGFILE
 
## Down
php $DEPLOYDIR/artisan down
 
## Update the deployed copy
echo "Starting Deploy" >> $LOGFILE
 
echo "- Deploying"
GIT_WORK_TREE="$DEPLOYDIR" git checkout -f
echo "- OK"
 
echo "- Composer Hook : Updating Dependencies"
cd $DEPLOYDIR && $COMPOSERDIR update
echo "- OK"
 
echo "Updating folder permission"
chown -R root:www-data $DEPLOYDIR
chmod -R 0775 $DEPLOYDIR
echo "- OK"
 
## Live
php $DEPLOYDIR/artisan up
 
echo "- Done"
 
echo "Finished Deploy" >> $LOGFILE