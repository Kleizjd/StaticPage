<div class="py-5 text-center">
        <h2>Encuesta</h2>
        <p class="lead">Abajo encontrara una serie de preguntas que nos permitira sacar una conclusion ,<br>sabiendo como tomas y tienes una persepcion de lo que eres capaz.</p>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
            <h4 class="mb-3">Buena Suerte </h4>
            <form action="" id="form_Survey" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="correo" value="<?= $_SESSION['correo_login']; ?>">
                <div class="mb-3">
                    <label for="numberOne">1. ¿Cuál es la diferencia entre vivir y existir?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberOne" name="numberOne" placeholder="¿Cuál es la diferencia entre vivir y existir?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberTwo">2. ¿Qué es lo que más detestas de una persona? ¿Por que?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberTwo" name="numberTwo" placeholder="¿Qué es lo que más detestas de una persona? ¿Por que?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberThree">3. ¿Qué harías de otra manera si supieras que nadie te juzgará?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberThree" name="numberThree" placeholder="¿Qué harías de otra manera si supieras que nadie te juzgará?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberFour">4. ¿Cuál es la promesa más importante que te has hecho?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberFour" name="numberFour" placeholder="¿Cuál es la promesa más importante que te has hecho?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberFive">5. ¿Cómo podemos tener relaciones saludables?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberFive" name="numberFive" placeholder="¿Cómo podemos tener relaciones saludables?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberSix">6 ¿Cuál es el significado de la vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberSix" name="numberSix" placeholder="¿Cuál es el significado de la vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberSeven">7 ¿Cómo mides la vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberSeven" name="numberSeven" placeholder="¿Cómo mides la vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberEight">8 ¿Estás en control de tu vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberEight" name="numberEight" placeholder="¿Estás en control de tu vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberNine">9 ¿Por qué a veces te comportas así?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberNine" name="numberNine" placeholder="¿Por qué a veces te comportas así?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberTen">10 ¿Cómo puedes cambiar tu vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberTen" name="numberTen" placeholder="¿Cómo puedes cambiar tu vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar respuestas</button>
            </form>
        </div>
    </div>