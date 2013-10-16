#!/usr/bin/python
import sys
import random

# read file & make list of it
buddylist=[]
filename = sys.argv[1]
f = open(filename)
for i in f:
	buddylist.append(i.rstrip())

def win():
	global buddylist
	print "how many? ",
	n = input()
	random.shuffle(buddylist)
	for i in range(1,n + 1):
		print buddylist[i]


def pair():
	global buddylist
	random.shuffle(buddylist)
	i=0
	last = len(buddylist)
	while i < last:
		if i == last -1 and i % 2 == 0:
			print buddylist[i], "Solo!"
		else:
			print buddylist[i], ":", buddylist[i+1]
		i = i + 2

print "#################################"
print "# 1. random pairs               # "   
print "# 2. choose winner(s)           # "   
print "#################################"
print "which function(1-2)?",

# choose function
n = input()
if n == 1:
	pair()
elif n ==2:
	win()
else: 
	print "not support yet"

