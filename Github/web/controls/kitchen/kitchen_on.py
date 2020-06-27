import serial
import time
arduino = serial.Serial('/dev/ttyACM0', 9600)
time.sleep(2)
arduino.write(b'1')
arduino.close()