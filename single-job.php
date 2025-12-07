<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- Job Title Header -->
    <div class="bg-white border-b border-gray-200 py-12">
        <div class="container mx-auto px-6 md:px-12">
            <span class="bg-blue-100 text-primary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">
                <?php echo get_field('job_type'); ?>
            </span>
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h1>
            <div class="flex flex-wrap gap-6 text-gray-600 text-sm">
                <span class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-primary"></i> <?php echo get_field('location'); ?></span>
                <span class="flex items-center"><i class="fas fa-hard-hat mr-2 text-primary"></i> <?php echo get_field('sector'); ?></span>
                <span class="flex items-center"><i class="fas fa-rupee-sign mr-2 text-primary"></i> <?php echo get_field('salary'); ?></span>
                <span class="flex items-center"><i class="far fa-clock mr-2 text-primary"></i> Posted <?php echo get_the_date(); ?></span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Main Content (Description) -->
            <div class="w-full lg:w-2/3">
                
                <!-- Only show description box if content exists -->
                <div class="prose max-w-none text-gray-700 leading-relaxed mb-12">
                    <h3 class="text-xl font-bold text-gray-900 mb-4 border-b pb-2">Job Description</h3>
                    
                    <!-- This pulls the text you write in the main WordPress Editor -->
                    <?php the_content(); ?>
                    
                </div>

                <!-- Apply Section -->
                <div class="bg-blue-50 p-8 rounded-lg border border-blue-100">
                    <h3 class="text-xl font-bold text-primary mb-4">Interested in this role?</h3>
                    <p class="text-gray-600 mb-6">To apply for this position, please send us your CV quoting reference <strong><?php the_title(); ?></strong>.</p>
                    <div class="flex flex-col md:flex-row gap-4">
                        
                        <!-- The Link passes the Job ID to the CV Page -->
                        <a href="<?php echo home_url('/cv-upload'); ?>?applied_job=<?php echo urlencode(get_the_title()); ?>" class="bg-primary text-white px-8 py-3 rounded font-bold hover:bg-blue-900 transition text-center shadow-md">
                            Apply Now
                        </a>
                        
                        <a href="mailto:info@hermestalentrise.in?subject=Application for <?php the_title(); ?>" class="border-2 border-primary text-primary px-8 py-3 rounded font-bold hover:bg-primary hover:text-white transition text-center">
                            Email Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 sticky top-24">
                    <h3 class="font-bold text-gray-900 mb-6 border-b pb-2">Key Details</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Salary</p>
                            <p class="font-semibold text-gray-800"><?php echo get_field('salary'); ?></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Location</p>
                            <p class="font-semibold text-gray-800"><?php echo get_field('location'); ?></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Sector</p>
                            <p class="font-semibold text-gray-800"><?php echo get_field('sector'); ?></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Job Type</p>
                            <p class="font-semibold text-gray-800"><?php echo get_field('job_type'); ?></p>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="text-sm text-gray-500 mb-4">Share this opportunity:</p>
                        <div class="flex gap-2">
                            <a href="#" class="w-8 h-8 bg-blue-600 text-white rounded flex items-center justify-center hover:opacity-80 transition"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="w-8 h-8 bg-blue-400 text-white rounded flex items-center justify-center hover:opacity-80 transition"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:opacity-80 transition"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>