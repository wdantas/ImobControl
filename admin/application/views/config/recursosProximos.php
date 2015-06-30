<div class="col s12">
    <div class="row">
        <div class="col s12">
            <h3>Recursos Próximos</h3>
        </div>
        <div class="col s12">
            <form method="post" action="<?php echo current_url();?>">
                <div class="col s3 input-field">
                    <input placeholder="EX: Supermercado" name="estabelecimento" id="estabelecimento" type="text" class="validate">
                    <label for="estabelecimento">Estabelecimento</label>
                </div>
                <div class="col s3 input-field">
                    <input type="checkbox" value="1" name="filtro" id="filtro" checked="checked" />
                    <label for="filtro">Filtro de pesquisa</label>
                </div>
                
                <div class="col s12 input-field">
                    <button class="btn btn-large waves-effect waves-light" type="submit">Adicionar Recurso
                        <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> 