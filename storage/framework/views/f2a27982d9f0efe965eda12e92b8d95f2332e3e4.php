<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">buat tunjangan pegawai </div>
                <div class="panel-body">

                     <?php echo Form::open(['url' => 'tunjangan_pegawai']); ?>

                    <div class="form-group">
                        <?php echo Form::label('kode tunjangan id', 'kode tunjangan id'); ?>

                        <?php echo Form::text('kode_tunjangan_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('pegawai id', 'pegawai id'); ?>

                        <?php echo Form::text('pegawai_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    
                    <div class="form-group">
                        <?php echo Form::submit('SAVE', ['class' => 'btn btn-primary form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>