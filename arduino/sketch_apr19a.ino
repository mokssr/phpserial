int led = 13;
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(led, OUTPUT);

}

void loop() {
  // put your main code here, to run repeatedly:
  if(Serial.available()){
    char data = Serial.read();
    if(data=='s'){
      Serial.print(random(1,50));
    }else if(data=='m'){
      digitalWrite(led, LOW);
    }else if(data=='h'){
      digitalWrite(led, HIGH);
    }
  }
}
