#import subprocess
#subprocess.call(["arduino", "--upload", "C:/Users/yagof/Desktop/Ottomatic/controls/bathroom/bathroom.ino"])
#import os
#import subprocess
import serial
import time
#comand = "arduino --upload C:/Users/yagof/Desktop/Ottomatic/controls/bathroom/bathroom.ino"
#os.system('cmd /k "arduino --upload C:/Users/yagof/Desktop/Ottomatic/controls/bathroom/bathroom.ino"')
#subprocess.call(["dir"])
arduino = serial.Serial('/dev/ttyACM0', 9600)
time.sleep(2)
arduino.write(b'1')
arduino.close()
