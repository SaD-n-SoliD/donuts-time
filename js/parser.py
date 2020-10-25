import requests

from bs4 import BeautifulSoup as BS

r = requests.get('https://rusladysp.ru/novosti')
html = BS(r.content, 'html.parser')

count = 0

for el in html.select('.c590 p'):
	title = el.select('span>strong>span')
	altTitle = el.select('span>span>strong')
	altTitle2 = el.select('strong>span>span')
	if title:
		count += 1
		print (title[0].text)
	if altTitle:
		count += 1
		print (altTitle[0].text)
	if altTitle2:
		count += 1
		print (altTitle2[0].text)
print (count)
