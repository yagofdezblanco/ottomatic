int LED = 6;
char ESTADO = '0';

void setup() {
  Serial.begin(9600);        //comunicacion
  pinMode(LED, OUTPUT);       //led
}

void loop() {
  if (Serial.available()>0) {
    ESTADO = Serial.read();
    if (ESTADO == '1') {
       digitalWrite(LED, HIGH);   
    } else {
       digitalWrite(LED, LOW);
    }
  }
}
