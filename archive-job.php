<?php get_header(); ?>

    <!-- HERO SECTION (Matches your screenshot) -->
    <div class="bg-blue-900 py-20 relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-8 text-center">Search Construction Jobs</h1>
            
            <!-- MAIN SEARCH BAR (White Box) -->
            <form action="<?php echo home_url('/job'); ?>" method="GET" class="bg-white p-2 rounded shadow-lg max-w-5xl mx-auto flex flex-col md:flex-row gap-2 items-center">
                
                <!-- Sector Dropdown -->
                <div class="w-full md:w-1/3 relative border-b md:border-b-0 md:border-r border-gray-200">
                    <i class="fas fa-hard-hat absolute left-4 top-4 text-gray-400 z-10"></i>
                    <select name="sector" class="w-full pl-10 pr-4 py-3 bg-white rounded focus:outline-none appearance-none cursor-pointer text-gray-700">
                        <option value="">All Sectors</option>
                        <option value="Construction" <?php selected( $_GET['sector'], 'Construction' ); ?>>Construction</option>
                        <option value="Residential" <?php selected( $_GET['sector'], 'Residential' ); ?>>Residential</option>
                        <option value="Civil" <?php selected( $_GET['sector'], 'Civil' ); ?>>Civil Engineering</option>
                        <option value="MEP" <?php selected( $_GET['sector'], 'MEP' ); ?>>MEP Services</option>
                    </select>
                    <i class="fas fa-chevron-down absolute right-4 top-4 text-gray-400 pointer-events-none"></i>
                </div>

                <!-- Location Input -->
                <div class="w-full md:w-1/3 relative">
                    <i class="fas fa-map-marker-alt absolute left-4 top-4 text-gray-400"></i>
                    <input type="text" name="location" value="<?php echo isset($_GET['location']) ? esc_attr($_GET['location']) : ''; ?>" placeholder="Location (e.g. Mumbai)" class="w-full pl-10 pr-4 py-3 bg-white rounded focus:outline-none text-gray-700">
                </div>

                <!-- Search Button -->
                <div class="w-full md:w-1/4">
                    <button type="submit" class="w-full bg-blue-900 text-white font-bold py-3 rounded hover:bg-blue-800 transition uppercase tracking-wide">
                        SEARCH
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- CONTENT AREA -->
    <div class="container mx-auto px-6 md:px-12 py-12 flex-grow">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- SIDEBAR FILTERS -->
            <aside class="w-full lg:w-1/4 space-y-8">
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Sector</h3>
                    
                    <!-- Checkbox Form -->
                    <form action="<?php echo home_url('/job'); ?>" method="GET">
                        <!-- Keep current location if set -->
                        <?php if(!empty($_GET['location'])): ?>
                            <input type="hidden" name="location" value="<?php echo esc_attr($_GET['location']); ?>">
                        <?php endif; ?>

                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer hover:text-blue-900">
                                <input type="radio" name="sector" value="Construction" class="mr-3 h-4 w-4" <?php checked( $_GET['sector'], 'Construction' ); ?> onchange="this.form.submit()">
                                <span class="text-gray-600">Construction</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-blue-900">
                                <input type="radio" name="sector" value="Residential" class="mr-3 h-4 w-4" <?php checked( $_GET['sector'], 'Residential' ); ?> onchange="this.form.submit()">
                                <span class="text-gray-600">Residential</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-blue-900">
                                <input type="radio" name="sector" value="Civil" class="mr-3 h-4 w-4" <?php checked( $_GET['sector'], 'Civil' ); ?> onchange="this.form.submit()">
                                <span class="text-gray-600">Civil Engineering</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-blue-900">
                                <input type="radio" name="sector" value="MEP" class="mr-3 h-4 w-4" <?php checked( $_GET['sector'], 'MEP' ); ?> onchange="this.form.submit()">
                                <span class="text-gray-600">MEP Services</span>
                            </label>
                            
                            <label class="flex items-center cursor-pointer hover:text-blue-900 border-t pt-2 mt-2">
                                <input type="radio" name="sector" value="" class="mr-3 h-4 w-4" onchange="this.form.submit()">
                                <span class="text-gray-500 italic">Clear Filters</span>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="bg-blue-900 text-white p-6 rounded-lg shadow text-center">
                    <h4 class="font-bold mb-2">Recruitment Hotline</h4>
                    <p class="text-blue-200 text-sm mb-4">Call us directly</p>
                    <div class="border border-white px-4 py-2 rounded text-sm font-semibold">+91 98765 43210</div>
                </div>
            </aside>

            <!-- JOB RESULTS FEED -->
            <main class="w-full lg:w-3/4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Latest Opportunities</h2>
                    <span class="text-sm text-gray-500">Showing <?php echo $wp_query->found_posts; ?> jobs</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                        <!-- Job Card -->
                        <div class="bg-white p-6 rounded border border-gray-100 shadow-sm hover:shadow-md flex flex-col relative overflow-hidden transition transform hover:-translate-y-1 h-full">
                            <div class="absolute top-0 left-0 w-1 h-full bg-transparent hover:bg-blue-800 transition"></div>
                            
                            <h3 class="text-lg font-bold text-blue-900 mb-2 h-14 line-clamp-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            
                            <div class="text-sm text-gray-500 mb-3">
                                <i class="fas fa-map-marker-alt mr-1 text-gray-400"></i> 
                                <?php echo get_field('location'); ?>
                            </div>

                            <div class="mt-auto">
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="text-xs font-bold text-yellow-600 bg-yellow-50 px-2 py-1 rounded">
                                        <i class="fas fa-star mr-1"></i> <?php echo get_field('job_type'); ?>
                                    </span>
                                </div>

                                <div class="text-sm text-gray-700 font-bold mb-4">
                                    <i class="fas fa-coins text-gray-400 mr-1"></i> <?php echo get_field('salary'); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="block w-full text-center border border-blue-900 text-blue-900 font-semibold py-2 rounded hover:bg-blue-900 hover:text-white transition text-sm">
                                    View Details
                                </a>
                            </div>
                        </div>

                    <?php endwhile; else : ?>
                        <div class="col-span-2 text-center py-12 bg-white rounded border border-dashed border-gray-300">
                            <i class="fas fa-search text-4xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl text-gray-600 font-medium">No jobs found</h3>
                            <p class="text-gray-500">Try adjusting your search criteria.</p>
                            <a href="<?php echo home_url('/job'); ?>" class="text-blue-600 font-bold mt-2 inline-block hover:underline">Clear all filters</a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <?php 
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Previous', 'textdomain' ),
                        'next_text' => __( 'Next', 'textdomain' ),
                    ) ); 
                    ?>
                </div>
            </main>
        </div>
    </div>

<?php get_footer(); ?>