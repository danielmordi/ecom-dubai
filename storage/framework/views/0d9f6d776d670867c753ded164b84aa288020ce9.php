<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase">All Categories</h4>
            
            <button type="button" class="btn btn-primary mb-2 btn-sm float-right" data-toggle="modal"
                data-target="#exampleModalCenter">Add ccategory</button>
            
            <div class="modal fade" id="exampleModalCenter" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create new a category</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <form action="/category/add" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div id="categoryMsg"></div>
                                <div class="form-group">
                                    <label for="category" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        value="<?php echo e(old('category')); ?>" placeholder="Eg: Watches" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger light"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" id="addCategory" class="btn btn-sm btn-primary">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <table id="" class="table-counter table table-striped" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>Category Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><?php echo e($category->name); ?></td>
                            <td class="text-right">
                                <form action="<?php echo e(route('category.delete', $category->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="ml-2 btn btn-link text-danger sweet-confirm-category-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/category.blade.php ENDPATH**/ ?>