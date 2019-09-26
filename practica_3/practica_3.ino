#include <DHT11.h>
int pin=2;
DHT11 dht11(pin);                
#include <ESP8266WiFi.h>


const char* ssid = "INFINITUM9747_2.4";
const char* password = "Gcvb7G9UPD";
const char* host = "192.168.1.74";

float parametro1;
float parametro2;

/************************************************************************************************
 ************************************************************************************************/

void setup() {
  Serial.begin(9600); 
  delay(1);

  Serial.print("conectando a ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi conectado");
  Serial.println("direccion IP: ");
  Serial.println(WiFi.localIP());
}

/***********************************************************
 ***********************************************************/
 
void loop() {

  Serial.print("conectado a ");
  Serial.println(host);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("Fallo conexion");
    return;
  }

  int err;
       float temp, hum;
       if((err = dht11.read(hum, temp)) == 0)    // Si devuelve 0 es que ha leido bien
          {
             Serial.print("Temperatura: ");
             Serial.print(temp);
             parametro1=temp;
             Serial.print(" Humedad: ");
             Serial.print(hum);
             parametro2=hum;
             Serial.println();
          }
  // We now create a URI for the request
  String url = "/save_as.php?";
  url += "temperatura=";
  url += parametro1;
  
 url += "&humedad=";
 url += parametro2;

  Serial.print("Buscando URL: ");
  Serial.println(url);

  //..................................//
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();
  Serial.println("conexiÛn de cierre");
  delay(10000);
}
