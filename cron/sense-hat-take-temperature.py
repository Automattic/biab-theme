#!/usr/bin/env python

from sense_hat import SenseHat

def main():
	sense = SenseHat()
	print sense.get_temperature()

if __name__ == "__main__":
	main()
