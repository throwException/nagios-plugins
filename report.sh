#!/bin/bash

wget -qO- --post-data="service=backup-creation&auth=secret&status=OK&detail=green" https://monitor.savvy.ch/report/report.php | grep ""
