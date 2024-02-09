#! /bin/bash

CHAT_ID=${CHAT_ID}
BOT_TOKEN=${BOT_TOKEN}

L="--------------------------------------------"
Log=$(git log -n 1 --pretty=format:"<b>COMMITER</b>: %cN %n<b>DATE</b>: %ci %n<b>MESSAGE</b>: %s")
Server="<b>Server</b>: heng-visothi.shop"
MSG="${L}%0A<b>PROJECT</b>: first-deploy-wesite%0A<b>APPLICATION</b>: E-commerce%0A<b>STATUS</b>: Success%0A<b>VERSION</b>: ${BUILD_NUMBER}%0A<b>FROM</b>: @heng123456_bot%0A${L}%0A${Log}%0A${L}%0A${Server}%0A${L}"

if [ -z "${Log}" ]; then 
    echo "String is empty"
    else
    curl -s -X POST https://api.telegram.org/bot${BOT_TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d text="${MSG}" -d parse_mode="HTML"
fi