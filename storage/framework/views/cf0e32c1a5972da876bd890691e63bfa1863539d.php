<div>
    <?php if(session()->has('message')): ?>
        <div class="aler alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <form class="review-form" wire:submit.prevent="store">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input class="input" wire:model="subject" type="text" placeholder="Subject">
            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <textarea class="input" wire:model="review" placeholder="Your Review"></textarea>
            <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <div class="input-rating">
            <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <strong class="text-uppercase">Your Rating: </strong>

                <div class="stars">
                    <input  type="radio" id="star5" wire:model="rate" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>

                </div>
            </div>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <input type="submit" class="btn btn-success" value="Save">
        <?php else: ?>
        <a href="/login" class="primary-btn">For submit your review login!</a>
        <?php endif; ?>

    </form>




  



</div>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/livewire/review.blade.php ENDPATH**/ ?>