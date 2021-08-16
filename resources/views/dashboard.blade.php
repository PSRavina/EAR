<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 style="text-align:center;font-size:revert">Cuestionario de Equipos de Alto Rendimiento</h1>
        </div>
        <div class="col-12 col-md-10 col-lg-8" style="margin:inherit;">
            <p class="text">
                <strong> ¡BIENVENIDO!</strong>
                Este cuestionario nos servirá para comenzar a trabajar, teniendo en cuenta dónde está el equipo en este momento. Sólo el facilitador conocerá las respuestas individuales. El equipo conocerá el agregado de todos los miembros del equipo. A continuación encontrarás 28 frases referidas a este Equipo de IT en LG España. Marca la opción que más se aproxime a su funcionamiento habitual, teniendo en cuenta si la frase se cumple siempre, casi siempre, a veces, pocas veces o nunca.<br>
            </p>
        </div>
        <div>
            <div>
                <form action="/dashboard" method="POST" name="form" value="submit">
                    <div class="row justify-content-center">
                        <div id="my-form" class="col-12 col-md-10 col-lg-8 text-center my-form">
                            @csrf
                            <p>1.-Todos somos conscientes de los comportamientos premiados y aceptados por el equipo y actuamos en consecuencia.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option1" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option1" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2"> casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option1" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option1" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option1" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>

                            <!-- <button type="submit" class="btn btn-success" style="vertical-align:middle" id="boton" value="submit">Enviar</button> -->


                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Seleccione una de las opciones disponibles
                            </div>
                            @endif
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>2.-Todos disfrutamos de discutir y compartir los problemas apasionadamente y sin tapujos.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option2" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option2" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option2" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option2" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option2" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Seleccione una de las opciones disponibles
                            </div>
                            @endif
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>3.-Señalamos las deficiencias y conductas improductivas propias y de los demás, sin miedos.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option3" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option3" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option3" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option3" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option3" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Seleccione una de las opciones disponibles
                            </div>
                            @endif
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>4.-Sabemos en qué están trabajando los otros miembros del equipo y cómo contribuyen a los objetivos comunes del equipo.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option4" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option4" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option4" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option4" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option4" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>5.-Las normas de funcionamiento del equipo son conocidas por todos y apelamos a ellas cuando alguien se las salta.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option5" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option5" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option5" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option5" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option5" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>6.-Nos disculpamos en el acto y con toda sinceridad cuando decimos o hacemos algo inadecuado o posiblemente perjudicial para el equipo.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option6" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option6" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option6" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option6" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option6" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>7.-Son importantes el respeto, la camaradería y la escucha de los demás, a nivel personal y profesional.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option7" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option7" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option7" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option7" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option7" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                            <!-- <button type="submit" class="btn btn-success" style="vertical-align:middle" id="boton" value="submit">Enviar</button> -->

                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>8.-Todos los miembros del equipo estamos dispuestos a sacrificar objetivos personales (tiempo, presupuesto, proyecto, carrera... ) por el bien común del equipo.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option8" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option8" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option8" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option8" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option8" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>9.-Confesamos abiertamente nuestras debilidades y errores, para mejora de todos.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option9" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option9" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option9" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option9" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option9" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>10.-Las reuniones del equipo son apasionantes, abiertas, enriquecedoras... nunca aburridas.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option10" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option10" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option10" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option10" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option10" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>11.-Nos marchamos de las reuniones confiados en que nuestros compañeros están por completo comprometidos con las decisiones acordadas, aunque hubiera desacuerdos inicialmente.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option11" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option11" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option11" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option11" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option11" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>12.-En este equipo, el apoyo emocional a compañeros de trabajo en momentos difíciles está asegurado.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option12" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option12" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option12" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option12" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option12" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>13.-El equipo lo pasa realmente mal cuando no se logran los objetivos comunes.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option13" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option13" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option13" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option13" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option13" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>14.-Durante las reuniones del equipo, los asuntos más importantes y difíciles se ponen sobre la mesa para ser resueltos.</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option14" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option14" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option14" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option14" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option14" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>15.-Hay unas reglas claras de funcionamiento en el equipo (valores compartidos, creencias, lo que es importante, lo que es accesorio...)</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option15" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option15" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option15" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option15" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option15" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>16.-A los miembros de este equipo nos preocupa seriamente la perspectiva de defraudar a nuestros compañeros.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option16" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option16" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option16" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option16" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option16" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>17.-Confiamos en que los errores son aceptados para mejorar y no son ocultados a los demás miembros del equipo.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option17" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option17" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option17" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option17" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option17" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>18.-Terminamos nuestros debates y reuniones con resoluciones claras y específicas y la decisión de actuar.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option18" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option18" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option18" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option18" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option18" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>19.-Sabemos que la vida personal de cada uno afecta al equipo y lo tenemos en cuenta para ayudarnos.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option19" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option19" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option19" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option19" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option19" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>20.-Nos desafiamos unos a otros acerca de nuestros proyectos, ideas nuevas y planteamientos.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option20" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option20" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option20" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option20" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option20" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>21.-Los miembros de nuestro equipo no tienen prisa en destacar sus propias contribuciones pero señalan las de los demás sin pérdida de tiempo.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option21" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option21" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option21" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option21" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option21" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>22.-Sabemos lo que hay que hacer, cómo, cuando y quien lo tiene que hacer.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option22" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option22" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option22" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option22" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option22" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>23.-La Confianza es uno de nuestros pilares.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option23" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option23" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option23" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option23" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option23" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>24.-Gestionamos los conflictos de manera positiva, para ayudarnos unos a otros.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option24" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option24" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option24" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option24" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option24" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>25.-Estamos totalmente comprometidos con los objetivos comunes.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option25" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option25" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option25" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option25" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option25" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>26.-Estamos todos "en el mismo barco" y nos co-responsabilizamos de "llegar a buen puerto" juntos.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option26" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option26" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option26" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option26" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option26" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>27.-Conseguir los objetivos nos llena de satisfacción.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option27" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option27" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option27" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option27" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option27" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8 text-center my-form" id="my-form">
                            @csrf
                            <p>28.-La comunicación, abierta y sincera, es importante en nuestro equipo.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option28" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option28" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option28" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">a veces</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option28" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option28" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">siempre</label>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Seleccione una de las opciones disponibles
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-lg btn-primary" style="vertical-align:middle" id="myBtn" value="submit">Enviar</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </x-slot>


</x-app-layout>

<style>
    p {
        text-align: start !important;
    }

    #my-form>p {
        font-weight: 700;
        margin-top: 1em;
    }

    .btn-primary {
        margin-top: 1em;
        background-color: #EE251A;
        border-color: black;
    }
</style>