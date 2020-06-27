int LED_li = 3;
int LED_k = 4;
int LED_ba = 5;
int LED_be = 6;
int LED_lo = 7;
char ESTADO = '0';

void setup() {
  Serial.begin(9600);        //comunicacion
  pinMode(LED_li, OUTPUT);       //leds
  pinMode(LED_k, OUTPUT);       //leds
  pinMode(LED_ba, OUTPUT);       //leds
  pinMode(LED_be, OUTPUT);       //leds
  pinMode(LED_lo, OUTPUT);       //leds
}

void loop() {
  if (Serial.available()>0) {
    ESTADO = Serial.read();
    switch (ESTADO) {
      case 'A':
        digitalWrite(LED_li, HIGH);
        break;
      case 'B':
        digitalWrite(LED_li, LOW);
        break; 
      case 'C':
        digitalWrite(LED_k, HIGH);
        break;
      case 'D':
        digitalWrite(LED_k, LOW);
        break;
      case 'E':
        digitalWrite(LED_ba, HIGH);
        break;
      case 'F':
        digitalWrite(LED_ba, LOW);
        break;                 
      case 'G':
        digitalWrite(LED_be, HIGH);
        break;
      case 'H':
        digitalWrite(LED_be, LOW);
        break; 
      case 'I':
        digitalWrite(LED_lo, HIGH);
        break;
      case 'J':
        digitalWrite(LED_lo, LOW);
        break; 
    }
  }
}
