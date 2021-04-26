encuesta cirugia
<!--Encuesta Cirugia-->

<form action="{{url('/cirugia')}}" method="post">
    @csrf
    <div id="contenedor-encuestas" class="container">
        <section id="encabezado-encuesta" class="row">
            <div class="col-md-12">
            <h2 class="text-center">FORMATO ENCUESTA DE SATISFACIÓN CIRUGIA</h2>
            <p class="texto-parrafo">Estimado Usuario<br>          
                Para Perfect Body Medical Center, sus opiniones y sugerencias son de valiosa importancia para la
                mejora continua. Permitanos conocer su percepción para la toma de decisiones que nos permita
                prestarle cada vez, un mejor servicio.</p>
            </div>
        </section>
        <hr><br />
        <section class="row">
            <section class="col-md-12">
            <h3>Datos basicos</h3>
            <p></p>
            </section>
        </section>
        <section class="row">
            <section class="col-md-12">
                <section class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nombreCompleto">Nombre del Paciente:*</label>
                            <input type="text" name="nombre_paciente" class="form-control" id="nombre_paciente" maxlength="128" placeholder="Nombre del Paciente" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="idIdentificacion">Identificación:*</label>
                            <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Numero de Identificación" maxlength="15" required/>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="email">Correo Electronico:*</label>
                            <input type="email" name="correo" class="form-control" id="correo" maxlength="128" placeholder="Correo Electronico">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="telefono">Telefono/Celular:*</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono/Celular" maxlength="30"/>
                    </div>
                </section>
                
                <section class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="NumeroHabitación">Numero de Habitacion: *</label>
                            <input type="text" name="habitacicion" class="form-control" id="habitacion">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="NumeroHabitación">Numero de Habitacion: *</label>
                            <input type="text" name="habitacicion" class="form-control" id="habitacion">
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <hr />

        <!--  Servicios  -->
        <section id="seccion_nivel_estandar" class="row">
            <div class="col-md-12">
            <h4>
                POR FAVOR SELECCIONE UNA OPCIÓN SEGÚN SU PERCEPCIÓN DEL SERVICIO RECIBIDO
            </h4>
            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Como califica nuestras instalaciones?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar1" id="">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo califica el trato recibido por parte del personal?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar2" id="">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo califica la atención del equipo de enfermeras?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar3" id="">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo fue aseo de las instalaciones?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar4" id="">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo califica información sobre los procedimientos realizados?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar5">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo califica la atención durante el traslado asistencial (ambulancia)?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar6">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo calificaría usted la comida?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar7">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo fue la información que recibió de normas y servicios?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar8">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>

            <div class="row">
                <div id="preguntas_estandar" class="col-md-6 ">
                <!--<div class="items_preguntas_estandar">-->
                    <p class="">¿Cómo fue la experiencia global respecto a los servicios recibidos?</p>
                <!--</div>-->
                </div>
                <div class="col-md-4 items_preguntas_estandar">
                <select class="opciones_desplegables" name="pregunta_estandar9">
                    <option value="0">Seleccionar</option>
                    <option value="5">Muy Bueno</option>
                    <option value="4">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="2">Malo</option> 
                    <option value="1">Muy Malo</option> 
                </select>
                </div>
            </div>


            
            </div>
        </section>
        
        <section class="row">
            <div class="col-md-12">
            <h3>Servicio.</h3>
            <p></p>
            </div>
        </section>
        <!--  PREGUNTA 1  -->
        <section class="row">
            <div class="col-md-4">
            <p>¿Los controles médicos se realizaron a Tiempo?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta1" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta1" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?</label>
            <textarea name="justificacion1" class="texto-justificacion form-control texto-justificacion" rows="4" id="comentarios"></textarea>
            </div>


        </section>
        <!--  PREGUNTA 2  -->
        <section class="row">
            <div class="col-md-4">
            <p>¿Recomendaria a PERFECT BODY MEDICAL CENTER a sus familiares y amigos?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta2" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta2" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?
            
            </label>
            <textarea name="justificacion2" class="texto-justificacion form-control texto-justificacion" rows="4" id="comentarios"></textarea>
            </div>
        </section>
        <!--  PREGUNTA 3  -->
        <section class="row">
            <div class="col-md-4">
            <p>¿Volvería usted a utilizar los servicios de PERFECT BODY MEDICAL CENTER?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta3" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta3" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?
            
            </label>
            <textarea name="justificacion3" class="texto-justificacion form-control texto-justificacion" rows="4" id="comentarios"></textarea>
            </div>
        </section>
        <!--  PREGUNTA 4  -->
        <section class="row">
            <div class="col-md-4">
            <p>¿Desearia usted destacar a algun funcionario por su buen servicio?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta4" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta4" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?
            
            </label>
            <textarea name="justificacion4" class="texto-justificacion form-control texto-justificacion" rows="6" id="comentarios"></textarea>
            </div>
        </section>
        <!--  PREGUNTA 5  -->
        
        <!--  PREGUNTA 6  -->
        <section class="row">
            <div class="col-md-4">
            <p>¿Desearia usted destacar a algun funcionario por su mal servicio?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta5" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta5" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?
            
            </label>
            <textarea name="justificacion5" class="texto-justificacion form-control texto-justificacion" rows="6" id="comentarios"></textarea>
            </div>
        </section>
        <section class="row">
            <div class="col-md-4">
            <p>¿Está usted satisfecho con nuestro servicio?</p>
            </div>
            <div class="col-md-1">
            <label class="radio">Si
            <input type="radio" name="pregunta6" id="pregunta1a" value="SI" required>
            </label>
            </div>
            <div class="col-md-1">
            <label class="radio">No
            <input type="radio" name="pregunta6" id="preguntab" value="NO" required> 
            </label>
            </div>
            <div class="col-md-6">
            <label class="radio">¿por qué?
            
            </label>
            <textarea name="justificacion6" class="texto-justificacion form-control texto-justificacion" rows="6" id="comentarios"></textarea>
            </div>
        </section>
        
        <br />
        <hr />
        <!--  Comentarios  -->
        <section class="row">
            <div class="col-md-12">
            <h3>Sugerencias y recomendaciones:</h3>
            <p></p>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label for="comment">Sugerencias y recomendaciones:</label>
                <textarea name="sugerencias" class="form-control" rows="6" id="comentarios"></textarea>
            </div>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12">
            <button type="submit" name="guardar" class="btn btn-info" id="saveForm" onclick="saveForm">Guardar Encuesta</button>
            <button type="button" class="btn btn-danger" id="clearForm">Limpiar formulario</button>
            </div>
        </section>
    </div>
</form>

