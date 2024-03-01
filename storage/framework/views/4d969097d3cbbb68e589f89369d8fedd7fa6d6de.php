<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <table class="table table-dark">
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
                        
                        <tr>
                            <th scope="row">
                                <img style="width: 70px" src="<?php echo e(asset('products/image/'.$product->cate_image)); ?>" alt="no img">
                            </th>
                            <th scope="row"><?php echo e($product->id); ?></th>
                            <td scope="row"><?php echo e($product->title_en); ?></td>
                            <td scope="row"><?php echo e($product->description_en); ?></td>
                            <td scope="row"><?php echo e($product->price); ?></td>
                            <td scope="row"><?php echo e($product->quantity); ?></td>
                            <td scope="row"><?php echo e($product->created_at); ?></td>
                            <td scope="row">
                                <a href="<?php echo e(route('product')); ?>" class="btn btn-success">
                                    Back
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\project\resources\views/product/show.blade.php ENDPATH**/ ?>