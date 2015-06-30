<?php
/**
 * Projeto Gerenciador de Imóveis
 * 
 * Model comodos
 *
 * @author Wellington Dantas
 * Facebook: http://fb.com/wdantas1
 * 
 * @author Rogério Santos
 */
?>
<div class="col s12">
    <div class="row">
        <div class="col s12">
            <h3>Cômodos</h3>
        </div>
        <div class="col s12">
            <form method="post" action="<?php echo current_url();?>">
                <div class="col s3 input-field">
                    <input placeholder="EX: Banheiro" name="comodo" id="comodo" type="text" class="validate">
                    <label for="comodo">Cômodo</label>
                </div>
                <div class="col s3 input-field">
                    <input type="checkbox" value="1" name="filtro" id="filtro" checked="checked" />
                    <label for="filtro">Filtro de pesquisa</label>
                </div>
                
                <div class="col s12 input-field">
                    <button class="btn btn-large waves-effect waves-light" type="submit">Adicionar Cômodo
                        <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> 