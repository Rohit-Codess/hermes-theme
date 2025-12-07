<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    
    <!-- Tailwind CSS & FontAwesome -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .bg-primary { background-color: #1e3a8a; }
        .text-primary { color: #1e3a8a; }
        .border-primary { border-color: #1e3a8a; }
        .bg-secondary { background-color: #edf2f7; }
        .hover-primary:hover { background-color: #172554; }
        
        /* Carousel Styles */
        .carousel-container { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; overflow: hidden; }
        .carousel-track { display: flex; height: 100%; transition: transform 0.7s ease-in-out; }
        .carousel-slide { min-width: 100%; height: 100%; object-fit: cover; }
        .hero-overlay { background: linear-gradient(rgba(30, 58, 138, 0.85), rgba(30, 58, 138, 0.7)); }

        /* Sticky Header Fix for WP Admin Bar */
        body.admin-bar nav { top: 32px; }
        @media screen and (max-width: 782px) { body.admin-bar nav { top: 46px; } }
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class('flex flex-col min-h-screen'); ?>>

    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 w-full transition-all duration-300">
        <div class="container mx-auto px-6 md:px-12"> <!-- Increased Padding Here -->
            <div class="flex justify-between items-center h-24"> <!-- Increased Height slightly -->
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="<?php echo home_url(); ?>" class="text-2xl font-serif font-bold text-slate-800 tracking-wide">
                        Hermes <span class="text-primary">TalentRise</span>
                        <span class="block text-xs font-sans font-normal text-gray-500 uppercase tracking-wider">Construction Recruitment</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="<?php echo home_url('/job'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">Jobs</a>
                    <a href="<?php echo home_url('/clients'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">Clients</a>
                    <a href="<?php echo home_url('/candidates'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">Candidates</a>
                    <a href="<?php echo home_url('/services'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">Services</a>
                    <a href="<?php echo home_url('/about'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">About</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="text-gray-600 hover:text-primary transition font-medium text-base">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="<?php echo home_url('/cv-upload'); ?>" class="bg-primary text-white px-8 py-3 rounded shadow hover:bg-blue-900 transition duration-300 text-sm font-semibold tracking-wide uppercase">
                        Upload Your C.V.
                    </a>
                </div>

                 <!-- Mobile Menu Button -->
                 <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 focus:outline-none p-2">
                        <i class="fas fa-bars text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0 shadow-lg">
            <div class="flex flex-col px-6 py-4 space-y-4">
                <a href="<?php echo home_url('/job'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">Jobs</a>
                <a href="<?php echo home_url('/clients'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">Clients</a>
                <a href="<?php echo home_url('/candidates'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">Candidates</a>
                <a href="<?php echo home_url('/services'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">Services</a>
                <a href="<?php echo home_url('/about'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">About</a>
                <a href="<?php echo home_url('/contact'); ?>" class="text-gray-700 hover:text-primary font-medium py-2 border-b border-gray-50">Contact</a>
                <a href="<?php echo home_url('/cv-upload'); ?>" class="bg-primary text-white text-center py-3 rounded font-bold uppercase mt-4">Upload CV</a>
            </div>
        </div>
    </nav>

    <script>
        // Mobile Menu Toggle Logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>