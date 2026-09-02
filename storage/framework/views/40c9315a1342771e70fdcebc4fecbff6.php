

<?php $__env->startSection('content'); ?>

<style>
    body {
        background: #080d19;
        color: #ffffff;
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
        color: #ffffff !important;
        margin-bottom: 8px;
    }

    .page-title i {
        color: #ffffff;
    }

    .form-label {
        color: #cbd5e1 !important;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-control {
        background: #0f172a !important;
        border: 1px solid #334155 !important;
        color: #ffffff !important;
        padding: 12px;
        border-radius: 7px;
    }

    .form-control::placeholder {
        color: #94a3b8 !important;
        opacity: 1 !important;
    }

    .form-control:focus {
        background: #0f172a !important;
        color: #ffffff !important;
        border-color: #6366f1 !important;
        box-shadow: 0 0 0 .2rem rgba(99,102,241,.15) !important;
        outline: none;
    }

    textarea.form-control {
        color: #ffffff !important;
        resize: vertical;
        min-height: 125px;
    }

    textarea.form-control::placeholder {
        color: #94a3b8 !important;
        opacity: 1 !important;
    }

    .btn-save {
        background: #6366f1;
        border: none;
        color: #ffffff !important;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .2s ease;
    }

    .btn-save:hover {
        background: #4f46e5;
        color: #ffffff !important;
        transform: translateY(-1px);
    }

    .btn-back {
        background: #334155;
        color: #ffffff !important;
        padding: 11px 20px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: .2s ease;
    }

    .btn-back:hover {
        background: #475569;
        color: #ffffff !important;
        transform: translateY(-1px);
    }

    .text-secondary {
        color: #94a3b8 !important;
    }

    .text-danger {
        font-size: 13px;
        color: #f87171 !important;
    }

    .alert-danger {
        background: rgba(220, 38, 38, .12);
        border: 1px solid rgba(248, 113, 113, .25);
        color: #ffffff;
        border-radius: 8px;
        padding: 12px 16px;
    }

    .alert-danger ul {
        padding-left: 20px;
    }

    .form-control:-webkit-autofill,
    .form-control:-webkit-autofill:hover,
    .form-control:-webkit-autofill:focus {
        -webkit-text-fill-color: #ffffff !important;
        -webkit-box-shadow: 0 0 0px 1000px #0f172a inset !important;
        transition: background-color 5000s ease-in-out 0s;
    }

    @media (max-width: 768px) {

        .form-page {
            margin: 25px 15px;
        }

        .form-card {
            padding: 22px;
        }

        .page-title {
            font-size: 24px;
        }

        .btn-back,
        .btn-save {
            padding: 10px 16px;
        }
    }
</style>

<div class="container form-page">

    <div class="form-card">

        <h1 class="page-title">
            <i class="bi bi-plus-circle me-2"></i>
            Tambah Jenis
        </h1>

        <p class="text-secondary mb-4">
            Tambahkan jenis produk baru.
        </p>

        <?php if($errors->any()): ?>

            <div class="alert alert-danger mb-4">

                <strong>
                    Terjadi kesalahan:
                </strong>

                <ul class="mb-0 mt-2">

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li>
                            <?php echo e($error); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>

        <form action="<?php echo e(route('jenis.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">

                <label for="nama_jenis" class="form-label">
                    Nama Jenis
                </label>

                <input
                    type="text"
                    id="nama_jenis"
                    name="nama_jenis"
                    class="form-control"
                    value="<?php echo e(old('nama_jenis')); ?>"
                    placeholder="Contoh: Makanan Berat"
                    autocomplete="off"
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

                <label for="deskripsi" class="form-label">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    class="form-control"
                    rows="5"
                    placeholder="Masukkan deskripsi jenis..."
                ><?php echo e(old('deskripsi')); ?></textarea>

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

                <button
                    type="submit"
                    class="btn-save"
                >
                    <i class="bi bi-save me-1"></i>
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS5\resources\views/jenis/create.blade.php ENDPATH**/ ?>