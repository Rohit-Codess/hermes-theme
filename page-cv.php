<?php 
/* Template Name: CV Upload */
get_header(); 
?>

    <header class="relative bg-blue-900 h-64 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-700 opacity-90 z-10"></div>
        <div class="absolute inset-0 z-0 opacity-30 bg-[url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center"></div>
        <div class="relative z-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-3" id="page-headline">Send us your C.V.</h1>
        </div>
    </header>

    <div class="container mx-auto px-4 py-16 flex-grow">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="w-full lg:w-2/3">
                
                <!-- Summary Box (Hidden by default, shown by JS) -->
                <div id="job-summary-box" class="hidden bg-blue-50 p-6 rounded-lg border border-blue-100 mb-8">
                    <h3 class="text-xl font-bold text-primary mb-2">You are applying for:</h3>
                    <p class="text-2xl font-bold text-gray-800" id="display-job-title">Loading...</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                    <h2 class="text-2xl font-serif text-gray-800 mb-6 border-b pb-4">Submit Your Profile</h2>
                    
                    <!-- FORM SHORTCODE -->
                    <div class="cf7-custom-style">
                        <?php echo do_shortcode('[contact-form-7 id="0087d63" title="CV Upload Form"]'); ?>
                    </div>
                </div>
            </div>
            
            <div class="w-full lg:w-1/3 space-y-8">
                <div class="bg-blue-50 p-6 rounded border border-blue-100 text-center">
                    <h4 class="font-bold text-primary mb-2">Need Assistance?</h4>
                    <p class="text-sm text-gray-600 mb-4">Call our recruitment team directly.</p>
                    <a href="tel:+919876543210" class="text-lg font-bold text-gray-800 hover:text-primary">+91 98765 43210</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC (This fixes the mismatch) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Get the Job Title from the URL parameter 'applied_job'
            // The single-job.php is sending '?applied_job=Title', so we must read exactly that.
            const params = new URLSearchParams(window.location.search);
            const rawTitle = params.get('applied_job');
            
            // Decode URI component to handle spaces (e.g. "Senior+Manager" -> "Senior Manager")
            const jobTitle = rawTitle ? decodeURIComponent(rawTitle.replace(/\+/g, ' ')) : null;

            // 2. Select the form field (name="job-title")
            const formField = document.querySelector('input[name="job-title"]');
            
            // Select visual elements
            const headline = document.getElementById('page-headline');
            const summaryBox = document.getElementById('job-summary-box');
            const displayTitle = document.getElementById('display-job-title');

            if (jobTitle) {
                // A. Fill the Form Field
                if(formField) {
                    formField.value = jobTitle;
                    formField.setAttribute('readonly', true); // Lock it
                }
                
                // B. Update Visuals on the page
                if(headline) headline.textContent = "Apply for " + jobTitle;
                if(summaryBox) summaryBox.classList.remove('hidden');
                if(displayTitle) displayTitle.textContent = jobTitle;
                
            } else {
                // C. Default state (General Application)
                if(formField) formField.value = "General Application";
            }
        });
    </script>

<?php get_footer(); ?>