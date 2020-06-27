#include <Servo.h>  

Servo servo; 

int DOOR = 9;
char ESTADO = '0';
int ANGLE1 = 90; // servo position in degrees
int ANGLE2 = 0;

void setup() {
  Serial.begin(9600);        //comunicacion
  servo.attach(DOOR);        //door
  servo.write(ANGLE1);
}
//
void loop() {
  if (Serial.available()>0) {
    ESTADO = Serial.read();
    if (ESTADO == '1') {
       servo.write(ANGLE2);         
    } else {
       servo.write(ANGLE1);
    }
  }
}
