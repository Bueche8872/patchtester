#!/bin/sh
rm -rf ../packaging && mkdir ../packaging
rm -rf ../packages && mkdir ../packages
cp -r ../../administrator/components/com_patchtester ../packaging/admin
cp -r ../../administrator/templates/hathor/html/com_patchtester ../packaging/hathor
rm -rf ../packaging/admin/backups/*.txt
mv ../packaging/admin/patchtester.xml ../packaging/patchtester.xml
mv ../packaging/admin/script.php ../packaging/script.php
cd ../packaging
tar jcf ../packages/com_patchtester.tar.bz2 admin/ hathor/ patchtester.xml script.php
tar zcf ../packages/com_patchtester.tar.gz admin/ hathor/ patchtester.xml script.php
zip -r ../packages/com_patchtester.zip admin/ hathor/ patchtester.xml script.php
