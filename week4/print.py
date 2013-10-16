#!/usr/bin/python
prompt = "[py] "
while True:
	try:
		print prompt,
		i = raw_input()
		if i == ".quit":
			break
		print i;
	except EOFError:
		break
print "bye"
