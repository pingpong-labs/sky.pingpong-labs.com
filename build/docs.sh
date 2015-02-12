#!/bin/bash

DEPLOYDIR=/var/www/skypingponglabscom

cd $DEPLOYDIR/resources/docs/master && git pull origin master
cd $DEPLOYDIR/resources/docs/1.0 && git pull origin 1.0
cd $DEPLOYDIR/resources/docs/2.0 && git pull origin 2.0
