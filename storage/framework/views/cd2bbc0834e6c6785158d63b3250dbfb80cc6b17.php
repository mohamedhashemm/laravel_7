<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h2 class="alert alert-primary text-center mt-3 w-50 m-auto"><?php echo e(__('language.PRODUCTS')); ?></h2>
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4><?php echo e(__('language.PRODUCTS')); ?> <span class="badge badge-danger"><?php echo e($mohamed->count()); ?></span>
                        </h4>
                        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success"><?php echo e(__('language.ADD_NEW_PRODUCT')); ?></a>
                    </div>
                    

                    
                    <?php if(session('success_product')): ?>
                        <h4 class="alert alert-success text-center mt-2"><?php echo e(session('success_product')); ?></h4>
                    <?php endif; ?>
                    
                    <?php if(session('warning_product')): ?>
                        <h4 class="alert alert-warning text-center mt-2"><?php echo e(session('warning_product')); ?></h4>
                    <?php endif; ?>
                    
                    <?php if(session('danger_product')): ?>
                        <h4 class="alert alert-danger text-center mt-2"><?php echo e(session('danger_product')); ?></h4>
                    <?php endif; ?>

                    <table class="table table-dark">
                        <?php if($mohamed->count() > 0): ?>
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">ID</th>
                                    <th scope="col"><?php echo e(__('language.TITLE')); ?></th>
                                    <th scope="col"><?php echo e(__('language.DESCRIPTION')); ?></th>
                                    <th scope="col"><?php echo e(__('language.PRICE')); ?></th>
                                    <th scope="col"><?php echo e(__('language.QUANTITY')); ?></th>
                                    <th scope="col"><?php echo e(__('language.CREATED')); ?></th>
                                    <th scope="col"><?php echo e(__('language.OPERATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $__currentLoopData = $mohamed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">
                                            <img style="width: 90px;padding-top: 4%"
                                                src="<?php echo e(asset('products/image/' . $x->cate_image)); ?>" alt="no img">
                                        </th>
                                        <th scope="row" style="padding-top: 3%"><?php echo e($x->id); ?></th>
                                        <td scope="row" style="padding-top: 3%"><?php echo e($x->title); ?></td>
                                        <td scope="row" style="padding-top: 3%"><?php echo e($x->description); ?></td>
                                        <td scope="row" style="padding-top: 3%"><?php echo e($x->price); ?></td>
                                        <td scope="row" style="padding-top: 3%"><?php echo e($x->quantity); ?></td>
                                        <td scope="row" style="padding-top: 3%"><?php echo e($x->created_at); ?></td>
                                        <td scope="row" style="padding-top: 2%">
                                            <a href="<?php echo e(route('product.show', $x->id)); ?>" class="btn btn-success mb-1">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.edit', $x->id)); ?>" class="btn btn-warning mb-1 ">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.delete', $x->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <h2 class="alert alert-info text-center m-3 mx-auto w-75"> <?php echo e(__('language.NODATA')); ?></h2>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\project\resources\views/product.blade.php ENDPATH**/ ?>