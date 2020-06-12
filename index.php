    <?php include_once "includes/head.php" ?>
    <?php include_once "includes/header_nav.php" ?>

    <div class="container">
        <main>

            <section class="b-section">
                <div class="row">
                    <div class="col">
                        <div class="b-new-container">
                            <a href="amticket.php" class="b-link b-new-link">
                                <span class="material-icons b-new-link__e-icon">
                                    add
                                </span>
                                <span class="b-new-link__e-text">Crear nuevo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-section">

                <h3 class="b-section-title">
                    Tickets por estado
                </h3>

                <div class="row">

                    <div class="col-lg">
                        <a href="#" class="b-link b-state-sel">
                            <span class="b-state-sel__e-text">
                                Iniciado
                            </span>
                            <span class="b-state-sel__e-number">
                                5
                            </span>
                        </a>
                    </div>

                    <div class="col-lg">
                        <a href="#" class="b-link b-state-sel">
                            <span class="b-state-sel__e-text">
                                En proceso
                            </span>
                            <span class="b-state-sel__e-number">
                                3
                            </span>
                        </a>
                    </div>

                    <div class="col-lg">
                        <a href="#" class="b-link b-state-sel">
                            <span class="b-state-sel__e-text">
                                En pausa
                            </span>
                            <span class="b-state-sel__e-number">
                                1
                            </span>
                        </a>
                    </div>

                    <div class="col-lg">
                        <a href="#" class="b-link b-state-sel b-state-sel--active">
                            <span class="b-state-sel__e-text">
                                Implementado
                            </span>
                            <span class="b-state-sel__e-number">
                                4
                            </span>
                        </a>
                    </div>

                    <div class="col-lg">
                        <a href="#" class="b-link b-state-sel">
                            <span class="b-state-sel__e-text">
                                Cerrado
                            </span>
                            <span class="b-state-sel__e-number">
                                13
                            </span>
                        </a>
                    </div>

                </div>
            </section>

            <section class="b-section">

                <div class="b-section-title-container--is-options">

                    <h3 class="b-section-title b-section-title--with-options">
                        Tickets totales
                    </h3>

                    <div class="b-section-options-container">

                        <div class="b-button-table-container b-p-relative">

                            <button class="b-button-table">
                                <span class="material-icons b-button-table__e-button-icon">
                                    filter_list
                                </span>
                                <span class="b-button-table__e-button-text">Filtrar</span>
                            </button>

                            <div class="b-dropdown b-dropdown--right">
                                <div class="b-dropdown__e-container b-dropdown__e-container--is-padding">

                                    <form action="" class="b-form b-filter-table">

                                        <div class="b-form-group">
                                            <label for="table-filter-id" class="b-form__e-label">ID #</label>
                                            <input type="text" class="b-form__e-input" id="table-filter-id">
                                        </div>

                                        <div class="b-form-group">
                                            <label for="table-filter-date" class="b-form__e-label">Fecha</label>
                                            <input type="date" class="b-form__e-input" id="table-filter-date">
                                        </div>

                                        <div class="b-form-group">
                                            <label for="table-filter-tecnico" class="b-form__e-label">Técnico</label>
                                            <select name="" id="table-filter-tecnico" class="b-form__e-input">
                                                <option value="0">-</option>
                                                <option value="1">Agustín Contreras</option>
                                                <option value="2">Fabricio Cáceres</option>
                                                <option value="">Marcos Tejada</option>
                                            </select>
                                        </div>

                                        <button class="b-button b-button--secondary">
                                            Limpiar
                                        </button>

                                        <button class="b-button b-button--primary">
                                            Aplicar
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="b-button-table-container b-p-relative">

                            <button class="b-button-table">
                                <span class="material-icons b-button-table__e-button-icon">
                                    sort
                                </span>
                                <span class="b-button-table__e-button-text">Ordenar</span>
                            </button>

                            <div class="b-dropdown b-dropdown--right">
                                <div class="b-dropdown__e-container">
                                    <ul class="b-ul b-dropdown-list">
                                        <li class="b-li b-dropdown-list__e-item">
                                            <a href="#" class="b-link b-dropdown-list__e-link b-dropdown-list__e-link--is-icons">
                                                <span class="b-dropdown-list__e-text">
                                                    Fecha
                                                </span>
                                                <span class="material-icons b-dropdown-list__e-icon">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </li>
                                        <li class="b-li b-dropdown-list__e-item">
                                            <a href="#" class="b-link b-dropdown-list__e-link b-dropdown-list__e-link--is-icons">
                                                <span class="b-dropdown-list__e-text">
                                                    Estado
                                                </span>
                                                <span class="material-icons b-dropdown-list__e-icon">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </li>
                                        <li class="b-li b-dropdown-list__e-item">
                                            <a href="#" class="b-link b-dropdown-list__e-link b-dropdown-list__e-link--is-icons">
                                                <span class="b-dropdown-list__e-text">
                                                    Técnico
                                                </span>
                                                <span class="material-icons b-dropdown-list__e-icon">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .b-dropdown -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="b-table-container">
                            <table class="b-table">
                                <thead class="b-table__e-thead">
                                    <tr class="b-table__e-tr b-table__e-tr--no-hover-effect">
                                        <th class="b-table__e-th b-table__e-th--small">ID #</th>
                                        <th class="b-table__e-th b-table__e-th--medium">Fecha</th>
                                        <th class="b-table__e-th b-table__e-th--medium">Estado</th>
                                        <th class="b-table__e-th b-table__e-th--large">Cuenta</th>
                                        <th class="b-table__e-th b-table__e-th--large">Supervisor</th>
                                        <th class="b-table__e-th b-table__e-th--large">Técnico</th>
                                    </tr>
                                </thead>
                                <tbody class="b-table__e-tbody">
                                    <tr class="b-table__e-tr">
                                        <td class="b-table__e-td">12869</td>
                                        <td class="b-table__e-td">24-05-2020</td>
                                        <td class="b-table__e-td">Iniciado</td>
                                        <td class="b-table__e-td">Hospital Ciudad de Córdoba</td>
                                        <td class="b-table__e-td">Jerónimo Martín Escobar</td>
                                        <td class="b-table__e-td">Fabricio Cáceres</td>
                                    </tr>
                                    <tr class="b-table__e-tr">
                                        <td class="b-table__e-td">12869</td>
                                        <td class="b-table__e-td">24-05-2020</td>
                                        <td class="b-table__e-td">Iniciado</td>
                                        <td class="b-table__e-td">Hospital Ciudad de Córdoba</td>
                                        <td class="b-table__e-td">Jerónimo Martín Escobar</td>
                                        <td class="b-table__e-td">Fabricio Cáceres</td>
                                    </tr>
                                    <tr class="b-table__e-tr">
                                        <td class="b-table__e-td">12869</td>
                                        <td class="b-table__e-td">24-05-2020</td>
                                        <td class="b-table__e-td">Implementado</td>
                                        <td class="b-table__e-td">Hospital Ciudad de Córdoba</td>
                                        <td class="b-table__e-td">Jerónimo Martín Escobar</td>
                                        <td class="b-table__e-td">Fabricio Cáceres</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="b-table__e-bottom-container">
                            <p class="b-table__e-info">
                                Mostrando 1 - 3 de 3 tickets
                            </p>
                            <ul class="b-ul b-table-paginator">

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link">
                                        <span class="material-icons b-table-paginator__e-icon">
                                            first_page
                                        </span>
                                    </a>
                                </li>

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link">
                                        <span class="material-icons b-table-paginator__e-icon">
                                            chevron_left
                                        </span>
                                    </a>
                                </li>

                                <!-- inicio nros -->

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link b-table-paginator__e-link--active">
                                        <span class="b-table-paginator__e-number">
                                            1
                                        </span>
                                    </a>
                                </li>

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link">
                                        <span class="b-table-paginator__e-number">
                                            2
                                        </span>
                                    </a>
                                </li>

                                <!-- fin nros -->

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link">
                                        <span class="material-icons b-table-paginator__e-icon">
                                            chevron_right
                                        </span>
                                    </a>
                                </li>

                                <li class="b-table-paginator__e-item">
                                    <a href="#" class="b-link b-table-paginator__e-link">
                                        <span class="material-icons b-table-paginator__e-icon">
                                            last_page
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .b-table-paginator -->
                        </div>
                        <!-- .b-table__e-bottom-container -->
                    </div>
                </div>
                <!-- .row -->
            </section>

        </main>
    </div>
    <!-- .container -->

    </body>

    </html>