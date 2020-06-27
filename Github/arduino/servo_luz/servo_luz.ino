/*
Into Robotics
*/
 
#include <Servo.h>  //add '<' and '>' before and after servo.h

Servo servo; 
#define servoPin 9
#define switchPin 2
#define lightPin 3

int angle = 90; // servo position in degrees
int stepAngle = 30;
int switchPushed = 0;
int ESTADO = LOW;

const int minAngle = 90;
const int maxAngle = 180;

 
void setup()
{
  Serial.begin(9600);
  servo.attach(servoPin);
  pinMode(switchPin, INPUT_PULLUP);        //interruptor
  pinMode(lightPin, OUTPUT);
  servo.write(angle);
}
 
 
void loop() {
  if(digitalRead(switchPin) == HIGH){
    switchPushed = 1;
  }
   if( switchPushed ){
  // change the angle for next time through the loop:
  angle = angle + stepAngle;

    // reverse the direction of the moving at the ends of the angle:
    if (angle >= maxAngle) {
      stepAngle = -stepAngle;
      digitalWrite(lightPin, ESTADO);
      switchPushed =0;                    
    }
    
    if (angle <= minAngle) {
      stepAngle = -stepAngle;
      digitalWrite(lightPin, !ESTADO);
      switchPushed =0;       
    }
    
    servo.write(angle); // move the servo to desired angle
    Serial.print("Moved to: ");
    Serial.print(angle);   // print the angle
    Serial.println(" degree");    
    delay(100); // waits for the servo to get there
   }

  
}
