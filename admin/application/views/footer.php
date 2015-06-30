        <script src="<?php echo base_url('assets/js/angular/angular.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/imobcontrol.module.js');?>"></script>
        <script src="<?php echo base_url('assets/js/imobcontrol.controller.js');?>"></script>
       
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/materialize.min.js"); ?>"></script>
        <script>
            $(document).ready(function(){
                $(".dropdown-imoveis, .dropdown-clientes").dropdown();
                $(".button-collapse").sideNav();
                $('select').material_select();
            });
        </script>
    </body>
</html>