int INTERRUPTOR = 2;
int LED = 3;
int ESTADO = LOW;

void setup() {
  pinMode(INTERRUPTOR, INPUT);        //interruptor
  pinMode(LED, OUTPUT);       //led
}

void loop() {
  while (digitalRead(INTERRUPTOR) == LOW){  //mientras este apagado el interruptor
  
  }
  ESTADO = digitalRead(LED);
  digitalWrite(LED, !ESTADO);
  while(digitalRead(INTERRUPTOR) == HIGH){
    
  }
}
