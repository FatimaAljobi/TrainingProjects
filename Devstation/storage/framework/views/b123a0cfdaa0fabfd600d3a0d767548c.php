<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Complaints')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <br/><br/>
                    <table>
                    <thead>
                        <tr>
                            <th style="padding-right: 50px;">Comp Num.</th>
                            <th style="padding-right: 50px;">Title</th>
                            <th style="padding-right: 50px;">Department</th>
                            <th style="padding-right: 50px;">Employee Name</th>
                            <th style="padding-right: 50px;">Against Employee </th>
                            <th style="padding-right: 50px;">Text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding-right: 50px;"><?php echo e($complaint->id); ?></td>
                            <td style="padding-right: 50px;"><?php echo e($complaint->title); ?></td>
                            <td style="padding-right: 50px;"><?php echo e($complaint->department->name); ?></td>
                            <td style="padding-right: 50px;"><?php echo e($complaint->empname); ?></td>
                            <td style="padding-right: 50px;"><?php echo e($complaint->compname); ?></td>
                            <td style="padding-right: 50px;"><?php echo e($complaint->comp_text); ?></td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Devstation\resources\views/complaints.blade.php ENDPATH**/ ?>