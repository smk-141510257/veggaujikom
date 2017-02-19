<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">jabatan</div>
                <div class="panel-body">

                     <?php echo Form::open(['url' => 'jabatan']); ?>

                    <div class="form-group">
                        <?php echo Form::label('kode jabatan', 'kode jabatan'); ?>

                        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Nama jabatan', 'Nama jabatan'); ?>

                        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('besaran uang', 'besaran uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

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