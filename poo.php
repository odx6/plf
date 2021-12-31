<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="lQyRvhSgqcWoGgAZAfGa4RypByIRQW5aV1FM6X8y">

    <title>Paradigmas de programacion </title>

    <!-- Scripts -->
    <script src="https://typedatosapp.herokuapp.com/js/app.js" defer></script>
        
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    
     <!-- add icon link -->
     <link rel = "icon" href = 
     "img/crow.png" 
             type = "image/x-icon">
    <!-- Styles -->
    <link href="https://typedatosapp.herokuapp.com/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="https://typedatosapp.herokuapp.com">
                    Paradigmas de Programacion
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    
                                                                        </ul>
                </div>
            </div>
        </nav>
</div>
<main class="py-4">
    <div class="container">
        <h2>Programación orientada a objetos</h2>
        <p>En este modelo de paradigma se construyen modelos de objetos que representan elementos (objetos) del problema a resolver, que tienen características y funciones. Permite separar los diferentes componentes de un programa, simplificando así su creación, depuración y posteriores mejoras. La programación orientada a objetos disminuye los errores y promociona la reutilización del código. Es una manera especial de programar, que se acerca de alguna manera a cómo expresaríamos las cosas en la vida real.
        
            Podemos definir un objeto como una estructura abstracta que, de manera más fiable, describe un posible objeto del mundo real y su relación con el resto del mundo que lo rodea a través de interfaces.  Ejemplos de lenguajes de programación orientados a objetos serían Java, Python o C#.
            </p>
        <h2>La programación orientada a objetos se sirve de diferentes conceptos como:</h2>
        
        <ul>
            <li>Abstracción de datos</li>
            <li>Encapsulación</li>
            <li>Eventos</li>
            <li>Modularidad</li>
            <li>Herencia</li>
            <li>Polimorfismo</li>
            <li>Programación reactiva</li>
        </ul>
        
        Este paradigma se basa en escuchar lo que emite un evento o cambios en el flujo de datos, en donde los objetos reaccionan a los valores que reciben de dicho cambio. Las librerías más conocidas son Project Reactor, y RxJava. React/Angular usan RxJs para hacer uso de la programación reactiva. </p>
        <h2>Vamos a ver un ejemplo práctico de como se hace esto en Java:</h2>
        <pre>

            class Automovil {
            
               // VARIABLES DE CLASE
               private String marca;
               private String modelo;
               private String color;
               private String velocidadMaxima;
            
               // CONSTRUCTOR QUE INICIALIZA LAS VARIABLES DE CLASE
               public Automovil(String marca, String modelo, String color, String velocidadMaxima) {
                  this.marca = marca;
                  this.modelo = modelo;
                  this.color = color;
                  this.velocidadMaxima = velocidadMaxima;
               }
            
               // METODOS GETTER Y SETTER PARA PODER RECUPERAR O CAMBIAR
               // LOS DATOS DE LAS VARIABLES DE CLASE
            
               public String getMarca() {
                  return marca;
               }
            
               public void setMarca(String marca) {
                  this.marca = marca;
               }
            
               public String getModelo() {
                  return modelo;
               }
            
               public void setModelo(String modelo) {
                  this.modelo = modelo;
               }
            
               public String getColor() {
                  return color;
               }
            
               public void setColor(String color) {
                  this.color = color;
               }
            
               public String getVelocidadMaxima() {
                  return velocidadMaxima;
               }
            
               public void setVelocidadMaxima(String velocidadMaxima) {
                  this.velocidadMaxima = velocidadMaxima;
               }
            
            }</pre>
    </div>
    
</main>
</body>