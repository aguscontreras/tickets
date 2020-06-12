<?php include_once "includes/head.php" ?>
<?php include_once "includes/header_nav.php" ?>


<div class="container">
    <main>
        <section class="b-section">

            <h3 class="b-section-title">
                Crear nuevo ticket
            </h3>

            <form action="" class="b-form">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="b-form__e-form-group">
                            <label for="usuario" class="b-form__e-label">Usuario afectado</label>
                            <input type="text" id="usuario" placeholder="Nombre y apellido" class="b-form__e-input">
                            <small class="b-form__e-small b-form__e-small--error">Error</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="b-form__e-form-group">
                            <label for="idremoto" class="b-form__e-label">ID Remoto</label>
                            <input type="text" id="idremoto" placeholder="X XXX XXX XXX" class="b-form__e-input">
                            <small class="b-form__e-small b-form__e-small--error">Error</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="b-form__e-form-group">
                            <label for="clremota" class="b-form__e-label">Clave remota</label>
                            <input type="text" id="clremota" placeholder="X XXX XXX XXX" class="b-form__e-input">
                            <small class="b-form__e-small b-form__e-small--error">Error</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="b-form__e-form-group">
                            <label for="clremota" class="b-form__e-label">Clave remota</label>
                            <select name="clremota" id="clremota" class="b-form__e-input">
                                <option value="null">-</option>
                                <option value="tec01">Agustín Contreras</option>
                                <option value="tec02">Fabricio Cáceres</option>
                                <option value="tec03">Marcos Tejada</option>
                            </select>
                            <small class="b-form__e-small b-form__e-small--error">Error</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="b-form__e-form-group">
                            <label for="descripcion" class="b-form__e-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="20" class="b-form__e-input"></textarea>
                            <small class="b-form__e-small b-form__e-small--counter">Contador</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="b-form__e-form-group">
                            <label for="imagenes" class="b-form__e-label">Agregar imágenes</label>
                            <small class="b-form__e-small b-form__e-small--error">Error</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <button type="submit" class="b-button b-button--primary">Enviar</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="index.php" class="d-block b-link b-button b-button--tertiary">
                            Volver a Tickets
                        </a>
                    </div>
                </div>

            </form>

        </section>

        <section class="b-section">
            <p class="b-p b-p--gray">
                Recuerde que a partir de la creación de su ticket los técnicos disponen de un máximo de 48hs. para informar novedades del caso. Manténgase al tanto de las solicitudes de comentarios para colaborar con los técnicos en el avance de la resolución.
            </p>
        </section>
    </main>
</div>



<?php include_once "includes/footer.php" ?>