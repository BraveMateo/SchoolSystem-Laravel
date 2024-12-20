

    <div class="w-full block mt-8 bg-white">
        <div class="flex flex-wrap sm:flex-no-wrap justify-between">
            <div class="w-full sm:w-1/2 mr-2 mb-6">
                <!-- Log on to codeastro.com for more projects -->
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Name : 
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold"><?php echo e($student->user->name); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Email :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->user->email); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Class :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold"><?php echo e($student->class->class_name); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Roll Number :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->roll_number); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Phone :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->phone); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Gender :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->gender); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Date of Birth :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->dateofbirth); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Current Address :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->current_address); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Permanent Address :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold"><?php echo e($student->permanent_address); ?></span>
                    </div>
                </div>
                <!-- Log on to codeastro.com for more projects -->
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Student's Parent :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold"><?php echo e($student->parent->user->name); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Parent's Email :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold"><?php echo e($student->parent->user->email); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Parent's Phone :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold"><?php echo e($student->parent->phone); ?></span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Parent's Address :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold"><?php echo e($student->parent->current_address); ?></span>
                    </div>
                </div>
    
    
            </div>   
            
            

            <div class="w-full sm:w-1/2 mr-2 mb-6">
                <div class="flex items-center bg-gray-600">
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Code</div>
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Subject</div>
                    <div class="w-1/3 text-right text-white py-2 px-4 font-semibold">Teacher</div>
                </div>
                <?php $__currentLoopData = $student->class->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->subject_code); ?></div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->name); ?></div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->teacher->user->name); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>

            

        </div>

        <div class="w-full px-0 md:px-6 py-4">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">My Attendance Record</h2>
            </div>
            <div class="flex items-center bg-gray-600">
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Date</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Class</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Teacher</div>
                <div class="w-1/4 text-right text-white py-2 px-4 font-semibold">Attendance</div>
            </div>
            <?php $__currentLoopData = $student->attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->attendence_date); ?></div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->class->class_name); ?></div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->teacher->user->name); ?></div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                        <?php if($attendance->attendence_status): ?>
                            <span class="text-xs text-white bg-green-500 px-2 py-1 rounded-custom">P</span>
                        <?php else: ?>
                            <span class="text-xs text-white bg-red-500 px-2 py-1 rounded-custom">A</span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- Log on to codeastro.com for more projects --><?php /**PATH D:\XAMPP\htdocs\SchoolSystem-Laravel\resources\views/dashboard/student.blade.php ENDPATH**/ ?>