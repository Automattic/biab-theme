#!/bin/sh
WP_CLI_PACKAGES_DIR=/home/pi/.wp-cli
REQ=/home/pi/.wp-cli/packages/vendor/wp-cli/restful/wp-rest-cli.php
TAKEPHOTO=/usr/bin/raspistill

# Config stuffs
WP=/usr/local/bin/wp
FILE=/tmp/photo-$$.jpg
TITLE=`/usr/games/fortune | head -1`

# Load config from WP
. /opt/wp/photo.config

# Take a picture
$TAKEPHOTO $FLIP -n -q $QUALITY --timeout 500 -o $FILE

# Create a blank post
POST_ID=`$WP --path=/opt/wp post create --post_type=post --post_title="$TITLE" --porcelain --post_status=publish`

# Upload photo and attach to post as featured image
PHOTO_ID=`$WP --path=/opt/wp media import $FILE --porcelain --post_id=$POST_ID --featured_image`

# Gather some data to show
PHOTO_URL=`$WP --require=$REQ --path=/opt/wp rest attachment get $PHOTO_ID --field=source_url`
POST_URL=`$WP --require=$REQ --path=/opt/wp rest post get $POST_ID --field=link`

echo '{"post_url":"'$POST_URL'","id":'$POST_ID',"photo_url":"'$PHOTO_URL'"}'

# Remove the temporary camera file
rm $FILE
