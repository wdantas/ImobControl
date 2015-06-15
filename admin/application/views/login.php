<section>
    <div class="row no-margin-bottom ">
        <div class="col s12 m4 offset-m4 center z-depth-2 loginbox">
            <div class="row center">
                <img src="<?php echo base_url("assets/imagens/9525_logomarca.png");?>" />
            </div>
            <form action="<?php echo base_url("login/autenticar");?>" method="post" class="loginform">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="senha" id="senha" type="password" class="validate">
                        <label for="senha">Senha</label>
                    </div>
                </div>
                
                <button class="btn waves-effect waves-light" type="submit">Entrar no sistema
                    <i class="mdi-content-send right"></i>
                </button>
            </form>
        </div>        
    </div>
    
    <div class="row center">&copy;2015 NOMESISTEMA - Todos os direitos reservados</div>
</section>