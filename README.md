# mod_pagspeed test


# Result without mod_pagspeed
![](http://dl.dropbox.com/u/314491/Screenshots/bfzq7t8-_1m5.png)

# Result with mod_pagspeed
![](http://dl.dropbox.com/u/314491/Screenshots/482ligilgh6a.png)

# How to run:

```
docker build -t mia3/mod-pagespeed-test . && docker run \
	-v /Users/mneuhaus/Docker/mia3/mod-pagespeed-test/www/:/var/www \
	-v /Users/mneuhaus/Docker/mia3/mod-pagespeed-test/logs/:/var/log \
	-p 3380:80 \
	mia3/mod-pagespeed-test
```

# How to disable mod pagespeed:

comment out line 7-10 of the Dockerfile and restart the docker image