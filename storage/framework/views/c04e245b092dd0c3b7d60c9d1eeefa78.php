<div class="flex flex-col w-full">
    <?php
        $randomFieldId = \Illuminate\Support\Str::uuid();
        $messageBag = isset($errorBags) ? $errors->{$errorBags} : $errors;
    ?>
    
    <?php if(isset($label)): ?>
        <label class="font-normal mb-2 text-on-surface-600" for="input_<?php echo e(($name ?? '_') . $randomFieldId); ?>"><?php echo e($label); ?></label>
    <?php endif; ?>

    <input
        id="input_<?php echo e(($name ?? '_') . $randomFieldId); ?>"
        <?php echo e($attributes->merge([
            'class' =>
                'border text-on-surface-600 border-on-surface-300 px-4 py-4 bg-surface ' .
                ($messageBag->has($name ?? null) ? ' border-red-500' : ''),
        ])); ?>

        type="<?php echo e($type ?? 'text'); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>"
        <?php if(isset($model)): ?> wire:model="<?php echo e($model); ?>" <?php endif; ?>
        <?php if(isset($name)): ?> name="<?php echo e($name); ?>" autocomplete="<?php echo e($name); ?>" <?php endif; ?>
        <?php if(isset($readonly)): ?> readonly <?php endif; ?>
        <?php if(isset($value)): ?> value="<?php echo e($value); ?>" <?php endif; ?> 
        autofocus
    />

    <?php $__errorArgs = [$name ?? '', $errorBags ?? null];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-sm block sm:inline text-red-500 mt-2"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH D:\xampp\htdocs\bookshop\resources\views/components/text-input.blade.php ENDPATH**/ ?>