 <?php $__env->startSection('content'); ?>
<section class="forms">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('file.Add Biller')); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php echo Form::open(['route' => 'biller.store', 'method' => 'post', 'files' => true]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.name')); ?> *</strong> </label>
                                    <input type="text" name="name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Image')); ?></label>
                                    <input type="file" name="image" class="form-control">
                                    <?php if($errors->has('image')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">   
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Company Name')); ?> *</label>
                                    <input type="text" name="company_name" required class="form-control">
                                    <?php if($errors->has('company_name')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('company_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.VAT Number')); ?></label>
                                    <input type="text" name="vat_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Email')); ?> *</label>
                                    <input type="email" name="email" placeholder="example@example.com" required class="form-control">
                                    <?php if($errors->has('email')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Phone Number')); ?> *</label>
                                    <input type="text" name="phone_number" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Address')); ?> *</label>
                                    <input type="text" name="address" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.City')); ?> *</label>
                                    <input type="text" name="city" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Resoluci??n - Min.Hacienda</label>
                                    <input type="text" name="resolucion" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No de Autorizaci??n</label>
                                    <input type="text" name="n_autorizacion" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha de autorizaci??n</label>
                                    <input type="text" name="fecha_autorizacion" class="fecha_registro form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Serie Autorizada</label>
                                    <input type="text" name="serie_autorizada" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Inicio de serie</label>
                                    <input type="number" name="serie_inicio" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fin de la serie</label>
                                    <input type="number" name="serie_final" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Correlativo actual</label>
                                    <input type="number" name="correlativo_actual" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #biller-create-menu").addClass("active");

    $(".fecha_registro").val($.datepicker.formatDate('yy-mm-dd', new Date()));

    var expired_date = $('.fecha_registro');
    expired_date.datepicker({
     format: "yyyy-mm-dd",
     
     autoclose: true,
        
     });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>