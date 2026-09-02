

<?php $__env->startSection('content'); ?>

<style>
    body {
        background: #080d19;
        color: white;
    }

    .form-page {
        max-width: 750px;
        margin: 40px auto;
    }

    .form-card {
        background: #111827;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,.25);
    }

    .page-title {
        font-size: 28px;
        font-weight: 800;
    }

    .form-label {
        color: #cbd5e1;
        font-weight: 600;
    }

    .form-control {
        background: #0f172a;
        border: 1px solid #334155;
        color: white;
        padding: 12px;
    }

    .form-control:focus {
        background: #0f172a;
        color: white;
        border-color: #6366f1;
        box-shadow: 0 0 0 .2rem rgba(99,102,241,.15);
    }

    .btn-save {
        background: #6366f1;
        border: none;
        color: white;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 8px;
    }

    .btn-back {
        background: #334155;
        color: white;
        padding: 11px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .text-danger {
        font-size: 13px;
    }
</style>

<div class="container form-page">

    <div class="form-card">

        <h1 class="page-title mb-2">
            <i class="bi bi-pencil-square me-2"></i>
            Edit Jenis
        </h1>

        <p class="text-secondary mb-4">
            Ubah informasi jenis produk.
        </p>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('jenis.update', $jenis->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">

                <label class="form-label">
                    Nama Jenis
                </label>

                
                <input
                    type="text"
                    name="nama_jenis"
                    class="form-control"
                    value="<?php echo e(old('nama_jenis', $jenis->nama_jenis)); ?>"
                    required
                >

                <?php $__errorArgs = ['nama_jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger mt-1">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="5"
                ><?php echo e(old('deskripsi', $jenis->deskripsi)); ?></textarea>

                <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger mt-1">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div class="d-flex gap-2">

                <a href="<?php echo e(route('jenis.index')); ?>" class="btn-back">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="submit" class="btn-save">
                    <i class="bi bi-save me-1"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS5\resources\views/jenis/edit.blade.php ENDPATH**/ ?>