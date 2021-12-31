<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="lQyRvhSgqcWoGgAZAfGa4RypByIRQW5aV1FM6X8y">

    <title>Paradigmas Funcional </title>

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
        <h1>¿Qué es la programación funcional?</h1>
        <p >El nombre ya lo sugiere: la programación funcional o functional programming se centra en las funciones. En un programa funcional, todos los elementos pueden entenderse como funciones y el código puede ejecutarse mediante llamadas de función secuenciales. Por el contrario, no se asignan valores de forma independiente. Una función se imagina mejor como una variante especial de un subprograma. Esta es reutilizable y, a diferencia de un procedimiento, devuelve directamente un resultado.

            Por supuesto, en muchos lenguajes de programación superiores hay funciones que se definen y después se aplican. Por esto, esta no es la característica especial de la programación funcional. Lo que hace que la estrategia funcional sea tan importante para la informática y a la vez tan versátil es el hecho de que las funciones dentro de este paradigma de programación pueden adoptar diferentes “formas”: estas pueden enlazarseentre sí como los datos y utilizarse como parámetro y como resultado de la función. Este tratamiento especial de las funciones permite a los programadores implementar y procesar tareas computacionales muy complejas (especialmente las de naturaleza simbólica).</p>
        <p>Aunque las raíces de la programación funcional se remontan a la década de 1930 (como parte de la investigación matemática básica), la estrategia funcional sigue gozando de gran popularidad, especialmente en los campos técnico y matemático. Esto se debe a diversos motivos:

            amplias opciones de transformación algebraica de programas,
            amplias posibilidades de síntesis algebraica de programas,
            sencillas opciones de análisis semántico gracias a la renuncia a los “estados internos en el proceso de cálculo” y los “efectos secundarios”,
            desaparición de estados internos (a diferencia de la programación imperativa, no se requieren estados internos de un proceso de cálculo),
            renuncia a los efectos secundarios (los cambios de estado correspondientes a los estados internos, los llamados efectos secundarios, también se pueden eliminar en las tareas funcionales).</p>
            <h2>ejemplo de programacion Funcional java </h2>
            <pre class="wp-block-preformatted"><pre class="brush: java; title: ; notranslate" title="">

                package com.arquitecturajava.streams;// se importan los packetes
                
                import java.util.ArrayList;// e importan las librerias necesarias 
                
                public class Principal {// clase principal
                
                 public static void main(String[] args) {
                // metodo main
                 ArrayList&amp;amp;lt;Gasto&amp;amp;gt; lista= new ArrayList&amp;amp;lt;Gasto&amp;amp;gt;();// se crean los arreglos necesarios
                
                 lista.add(new Gasto(&quot;A&quot;,80));// se agregan gastos
                 lista.add(new Gasto(&quot;B&quot;,50));
                 lista.add(new Gasto(&quot;C&quot;,70));
                 lista.add(new Gasto(&quot;D&quot;,95));
                
                 double totalPago=0;
                
                 for (Gasto g:lista) {
                
                 if (g.getImporte()*1.21&amp;amp;lt;100) {
                
                 totalPago=totalPago+ g.getImporte()*1.21;// se calcula el total a pagar 
                
                 }
                 }
                
                 System.out.println(totalPago);
                
                 }
                
                }
                
                </pre></pre>
            
        

    </div>
    
</main>
</body>