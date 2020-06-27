void setup(){
  pinMode(13, OUTPUT);      //seleccionamos el pin numero 13 como salida
}

void loop(){
  digitalWrite(13, HIGH);   //activamos el led (1)
  delay(5000);              //equivale a milisegundos (1seg)
  digitalWrite(13, LOW);    //apagamos el led (0)
  delay(1000);
}
