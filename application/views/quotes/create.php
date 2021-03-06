<!DOCTYPE html>
<html>
	<head>
		<?= $meta ?>
	    <title>AppCI | Quote Create</title>
	    <?= $favicon ?>

	    <!-- Google Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">

		<?= $css ?>

		<!-- modernizr JS -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js" ></script>
	</head>
	<body>
		<?= $sidebar ?>
		<div class="all-content-wrapper">
			<?= $container_fluid_header ?>
			<div class="header-advance-area">
				<?= $header_top_area ?>
				<?= $mobile_menu ?>
				<div class="breadcome-area">
	                <div class="container-fluid">
	                    <div class="row">
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                            <div class="breadcome-list">
	                                <div class="row">
	                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                        <ul class="breadcome-menu">
	                                            <li><a href="<?php echo base_url('users/home'); ?>">Home</a> <span class="bread-slash">/</span>
	                                            </li>
	                                            <li><a href="<?php echo base_url('quotes/index'); ?>">Quotes</a> <span class="bread-slash">/</span>
	                                            </li>
	                                            <li><span class="bread-blod">Create</span>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
			<div class="section-admin container-fluid">
				<div class="row admin">
					<div class="col-md-12">
	                    <div class="row">
	                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
	                            	<div id="error"></div>
	                            	<h2>Nueva Cita</h2>
	                            	<br/>
	                            	<?php
										echo form_open('quotes/validate',array('method' => 'post', 'id' => 'loginForm'));
									?>
									<?= $quote_create ?>
									<div class="form-group col-lg-12" id="container_password">
									    <?php
											echo form_label('Contraseña', 'password');
											echo form_password(array('type' => 'password', 'name' => 'password', 'placeholder' => '**********', 'class' => 'form-control example1', 'id' => 'password1', 'value' => set_value('password')));
										?>
										<div id="password">
											<span class="text-danger" style="display: none;"></span>
										</div>
										<div class="pwstrength_viewport_progress" style="margin-top: 1em"></div>
										<?php
											echo form_label('Confirmar Contraseña', 'confirm_password');
											echo form_password(array('type' => 'password', 'name' => 'confirm_password', 'placeholder' => '**********', 'class' => 'form-control', 'value' => set_value('confirm_password')));
										?>
										<div id="confirm_password">
											<span class="text-danger" style="display: none;"></span>
										</div>
									</div>
									<div class="form-group col-lg-12" id="id_user">
										<?php
											echo form_label('Usuario', 'id_user');
											echo '<div class="chosen-select-single mg-b-20">';
											echo 
												form_dropdown('id_user', 
													$users_active,
													'1', 
													array(
														'class' => 'chosen-select',
														'tabindex' => '-1'
													)
												);
											echo '</div>';
										?>
										<span class="text-danger" style="display: none;"></span>
									</div>
									<div class="text-center">
										<?php
											echo form_submit('submit', 'Registrar', array('class' => 'btn btn-success loginbtn'));
										?>
									</div>
									<?php
										echo form_close();
									?>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	                    </div>
	                </div>
				</div>
			</div>
			<br/>
			<?= $footer ?>
		</div>
		<div id="WarningModalhdbgcl" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-3"></div>
                    <div class="modal-body" style="text-align: left;">
                    	<div class="preloader-wrapper">
						    <div class="preloader">
						        <img src="<?php echo base_url();?>assets/img/preloader.gif" alt="NILA">
						    </div>
						</div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
		<?= $script ?>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/quotes/create.js"></script>
	</body>
</html>