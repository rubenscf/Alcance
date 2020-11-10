
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?=$this->lang->line('panel_title')?></h3>


        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("parents/index")?>"><?=$this->lang->line('menu_parents')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_parents')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">

                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

                    <?php
                        if(form_error('name'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="name_id" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_guargian_name")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name_id" name="name" value="<?=set_value('name')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('name'); ?>
                        </span>
                    </div>

					<?php
                        if(form_error('father_dpi'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_dpi" class="col-sm-2 control-label">
                            DPI Padre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_dpi" name="father_dpi" value="<?=set_value('father_dpi')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_dpi'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('father_name'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_name" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_father_name")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_name" name="father_name" value="<?=set_value('father_name')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_name'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_dpi'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_dpi" class="col-sm-2 control-label">
                            DPI Madre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_dpi" name="mother_dpi" value="<?=set_value('mother_dpi')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_dpi'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('father_bday'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_bday" class="col-sm-2 control-label">
                        Fecha de Nacimiento_Padre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_bday" name="father_bday" value="<?=set_value('father_bday')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_bday'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('father_school_level'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_school_level" class="col-sm-2 control-label">
                        Escolaridad del padre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_school_level" name="father_school_level" value="<?=set_value('father_school_level')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_school_level'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('father_religion'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_religion" class="col-sm-2 control-label">
                        Escolaridad del padre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_religion" name="father_religion" value="<?=set_value('father_religion')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_religion'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_bday'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_bday" class="col-sm-2 control-label">
                            Fecha de Nacimiento_Madre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_bday" name="mother_bday" value="<?=set_value('mother_bday')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_bday'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_school_level'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_school_level" class="col-sm-2 control-label">
                        Escolaridad de la madre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_school_level" name="mother_school_level" value="<?=set_value('mother_school_level')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_school_level'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_religion'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_religion" class="col-sm-2 control-label">
                        Religión de la madre
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_religion" name="mother_religion" value="<?=set_value('mother_religion')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_religion'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('income'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="income" class="col-sm-2 control-label">
                        Ingresos
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="income" name="income" value="<?=set_value('income')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('income'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('brother_cant'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="brother_cant" class="col-sm-2 control-label">
                        Cantidad de hermanos
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="brother_cant" name="brother_cant" value="<?=set_value('brother_cant')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('brother_cant'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('brother_names'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="brother_names" class="col-sm-2 control-label">
                        Nombre de los hermanos
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="brother_names" name="brother_names" value="<?=set_value('brother_names')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('brother_names'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('brother_age'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="brother_age" class="col-sm-2 control-label">
                        Edades de los hermanos
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="brother_age" name="brother_age" value="<?=set_value('brother_age')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('brother_age'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('brother_school_level'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="brother_school_level" class="col-sm-2 control-label">
                        Escolaridad de los hermanos
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="brother_school_level" name="brother_school_level" value="<?=set_value('brother_school_level')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('brother_school_level'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_name'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_name" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_mother_name")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?=set_value('mother_name')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_name'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('father_profession'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="father_profession" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_father_profession")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="father_profession" name="father_profession" value="<?=set_value('father_profession')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('father_profession'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('mother_profession'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="mother_profession" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_mother_profession")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mother_profession" name="mother_profession" value="<?=set_value('mother_profession')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('mother_profession'); ?>
                        </span>
                    </div>

             

                    <?php
                        if(form_error('email'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="email" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_email")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('email'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('phone'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="phone" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_phone")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?=set_value('phone')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('phone'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('address'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="address" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_address")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="address" name="address" value="<?=set_value('address')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('address'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('photo'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="photo" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_photo")?>
                        </label>
                        <div class="col-sm-6">
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="fa fa-remove"></span>
                                        <?=$this->lang->line('parents_clear')?>
                                    </button>
                                    <div class="btn btn-success image-preview-input">
                                        <span class="fa fa-repeat"></span>
                                        <span class="image-preview-input-title">
                                        <?=$this->lang->line('parents_file_browse')?></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <span class="col-sm-4">
                            <?php echo form_error('photo'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('username'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="username" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_username")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username')?>" >
                        </div>
                         <span class="col-sm-4 control-label">
                            <?php echo form_error('username'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('password'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="password" class="col-sm-2 control-label">
                            <?=$this->lang->line("parents_password")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" value="<?=set_value('password')?>" >
                        </div>
                         <span class="col-sm-4 control-label">
                            <?php echo form_error('password'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_parents")?>" >
                        </div>
                    </div>

                </form>

            </div> <!-- col-sm-8 -->

        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<script type="text/javascript">
$('#username').keyup(function() {
    $(this).val($(this).val().replace(/\s/g, ''));
});

$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
           $('.content').css('padding-bottom', '100px');
        },
         function () {
           $('.image-preview').popover('hide');
           $('.content').css('padding-bottom', '20px');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("<?=$this->lang->line('parents_file_browse')?>");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200,
            overflow:'hidden'
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("<?=$this->lang->line('parents_file_browse')?>");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            $('.content').css('padding-bottom', '100px');
        }
        reader.readAsDataURL(file);
    });
});

</script>
