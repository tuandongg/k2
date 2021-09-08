<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Products</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap.min.css')); ?>">
</head>
<body>

<div class="container">
    <div class="top_19">
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="row" style="margin-top: 50px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Add new product</div>
                <div class="card-body">
                    <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data" id="form">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Product code</label>
                            <input type="text" name="product_code" class="form-control" placeholder="Enter product code" required="required">
                            <span class="text-danger error-text product_name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Product name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Enter product name" required="required">
                            <span class="text-danger error-text product_name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Product price</label>
                            <input type="text" name="product_price" class="form-control" placeholder="Enter product price" required="required">
                            <span class="text-danger error-text product_name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Product image</label>
                            <input type="file" name="product_image" class="form-control" required="required">
                            <span class="text-danger error-text product_image_error"></span>
                        </div>
                        <div class="img-holder"></div>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">All Products</div>
                <div class="card-body" id="AllProducts">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <img src="/storage/files/<?php echo e($product->product_image); ?>" alt="" class="d-flex align-self-start rounded mr-3" height="64">
                            <div class="media-body">
                                <h5 class="mt-0 font-16"><?php echo e($product->product_code); ?></h5>
                                <h5 class="mt-0 font-16"><?php echo e($product->product_name); ?></h5>
                                <h5 class="mt-0 font-16"><?php echo e($product->product_price); ?></h5>
                                <hr>
                            </div>
                            <hr>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



































































</body>
</html>
<?php /**PATH C:\Users\Admin\XAMPPHP\htdocs\fun\resources\views/index.blade.php ENDPATH**/ ?>