#!/bin/sh

fname=`ls -t1 /usr/local/snapper/ | head -n 1`
ln -sf /usr/local/snapper/$fname $PWD/lastsnap.png
stat -f "%Sm" -t "%d.%m.%Y %H:%M:%S" /usr/local/snapper/$fname