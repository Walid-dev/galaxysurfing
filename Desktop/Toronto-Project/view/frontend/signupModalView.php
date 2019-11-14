    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content login_modal_content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs border-0 md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="modal_btn nav-link active border-0 pl-3 text-white" data-toggle="tab" href="#panel7" role="tab">
                                Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="modal_btn nav-link border-0 text-white" data-toggle="tab" href="#panel8" role="tab">
                                Créer votre compte</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane p-4 fade in show active" id="panel7" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <form class="form modal_form my-2 my-lg-0" action="index.php" method="post">
                                    <div class="form-group text-center mt-3 text-white">
                                        <h5>Se connecter</h5>
                                        <hr class="col-1">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input id="email2" type="email" class="form-control form-control mr-sm-2 mt-2" name="mailuid" placeholder="Username/E-mail.." required>
                                        <span class="ml-2" id='result2'></span>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control mr-sm-2 mt-2" type="password" name="pwd" placeholder="Password">
                                    </div>
                                    <button id="validate2" class="btn up modal_btn mt-3" type="submit" name="login-submit">Connection</button>
                                </form>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer login_modal_footer">
                                <button type="button" class="up btn modal_btn" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane p-4 fade" id="panel8" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <form class="modal_form" action="index.php" method="post">
                                    <div class="form-group text-center mt-3 text-white">
                                        <h5>Créer votre compte</h5>
                                        <hr class="col-1">
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <input type="text" class="form-control form-control mr-sm-2 mt-2" name="uid" placeholder="Pseudo">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row end.// -->
                                    <div class="form-group mb-0">
                                        <input id="email" type="email" class="form-control form-control mr-sm-2 mt-2" name="mail" placeholder="E-mail">
                                        <span class="ml-2" id='result'></span>
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group">
                                        <input class="form-control form-control mr-sm-2 mt-2" type="password" name="pwd" placeholder="Mot de passe">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group">
                                        <input class="form-control form-control mr-sm-2 mt-2" type="password" name="pwd-repeat" placeholder="Répeter Mot de passe">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group">
                                        <button id="validate" type="submit" class="up btn modal_btn mt-3" name="signup-submit">Créer</button>
                                    </div> <!-- form-group// -->
                                </form>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <button type="button" class="up btn modal_btn" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->


    <a href="" class="up btn log_btn mx-3" data-toggle="modal" data-target="#modalLRForm">Créer un compte / Se connecter</a>