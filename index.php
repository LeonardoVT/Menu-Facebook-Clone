<!DOCTYPE html>
    <html>
        <head>

            <meta charset="utf-8" />
            <title>Login Facebook</title>

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>

            <header>
                <div class="center">
                    <div class="logo">
                        <img src="img2.png">
                    </div><!--logo-->
                    
                    <form method="post" class="form-login">

                        <div class="form-element">
                            <p>E-mail ou telefone</p>
                            <input type="email" />
                        </div><!--form-element-->

                        <div class="form-element">
                            <p>Senha</p>
                            <input type="password" />
                        </div><!--form-element-->

                        <div class="form-element">
                            <input type="submit" name="acao" value="Enviar" />
                        </div><!--form-element-->

                    </form><!--form-login-->
                    <div class="clear"></div>
                </div><!--center-->
            </header>

            <section class="main">
                <div class="center">
                    <div class="img-pessoas">
                        <img src="img1.png" />
                    </div><!--img-pessoas-->

                    <div class="abrir-conta">
                        <h2>Abra sua conta</h2>
                        <h3>É gratuito e sempre será.</h3>

                        <form class="criar-conta">
                            <div class="w50">
                                <input placeholder="Nome" type="text">
                            </div><!--w50-->
                            <div class="w50">
                                <input placeholder="Sobrenome" type="text">
                            </div><!--w50-->

                            <div class="w100">
                                <input placeholder="E-mail" type="email">
                            </div><!--w100-->

                            <div class="w100">
                                <input placeholder="Senha" type="password">
                            </div><!--w100-->

                            <div class="w100">
                                <h2>Data de Nascimento:</h2>
                                <select name="nascimento-dia" class="nascimento">
                                    <?php
                                        for($i = 0; $i <= 31; $i++){
                                    ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="nascimento-mes" class="nascimento">
                                    <option value="0">Junho</option>
                                </select>
                                <select name="nascimento-ano" class="nascimento">
                                    <?php
                                        for($i = 1960; $i <= 2018; $i++){
                                    ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div><!--w100-->

                            <div class="clear"></div>

                            <div class="w100">
                                <div class="input-radio">
                                    <input type="radio" name="sexo" value="masculino">
                                    <h2>Masculino</h2>
                                </div><!--input-radio-->
                                <div class="input-radio">
                                    <input type="radio" name="sexo" value="feminino">
                                    <h2>Feminino</h2>
                                </div><!--input-radio-->
                                <div class="clear"></div>
                            </div><!--w100-->


                            <div class="w100">
                                <input type="submit" name="acao" value="Cadastre-se">
                            </div><!--w100-->

                            <div class="clear"></div>
                        </form><!--criar-conta-->

                    </div><!--abrir-conta-->

                    <div class="clear"></div>
                </div><!--center-->
            </section><!--main-->

            <section class="linguas">
                <div class="center">
                    <a class="selected-lingua" href="">Português (BR)</a>
                    <a  href="">English (US)</a>
                    <a  href="">Espanol</a>
                    <a  href="">Français (France)</a>
                    <a  href="">Italiano</a>
                    <a  href="">Deutsch</a>
                    <a  href="">Chinese</a>
                    <a  href="">Japanese</a>
                    <a  href="">Taiwan</a>
                </div><!--center-->
                <div style="border: 0; padding-top: 10px;" class="center">
                    <a  href="">Cadastre-se</a>
                    <a  href="">Entrar</a>
                    <a  href="">Messenger</a>
                    <a  href="">Facebook Lite</a>
                    <a  href="">Celular</a>
                    <a  href="">Encontrar amigos</a>
                    <a  href="">Pessoas</a>
                    <a  href="">Páginas</a>
                    <a  href="">Locais</a>
                    <a  href="">Jogos</a>
                    <a  href="">Locais</a>
                    <a  href="">Marketplace</a>
                    <a  href="">Videos</a>
                    <a  href="">Grupos</a>
                </div><!--center-->
                <div style="border: 0; padding-top: 2px;" class="center">
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                </div><!--center-->
                <div style="border: 0; padding-top: 2px;" class="center">
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                    <a  href="">Lorem Ipsum</a>
                </div><!--center-->
            </section><!--linguas-->

        </body>
    </html>