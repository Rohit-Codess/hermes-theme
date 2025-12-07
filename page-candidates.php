<?php 
/* Template Name: Candidates Info Page */
get_header(); 
?>

<div class="bg-primary py-16 text-center text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <h1 class="text-3xl md:text-5xl font-bold relative z-10">For Candidates</h1>
    <p class="text-blue-200 mt-4 relative z-10">Your Career, Our Priority</p>
</div>

<div class="container mx-auto px-6 md:px-12 py-16">
    <div class="max-w-3xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Register with Us?</h2>
        <p class="text-gray-600 mb-4">We work with the biggest names in Indian construction—from Larsen & Toubro to DLF, from Tata Projects to Godrej Properties. Registering with Hermes TalentRise gives you access to unadvertised roles and exclusive projects.</p>
        <p class="text-gray-600">Whether you're a fresh graduate seeking your first site posting or an experienced professional targeting project management roles, we have opportunities across all experience levels and construction specializations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="p-6 border rounded hover:shadow-lg transition">
            <i class="fas fa-file-alt text-3xl text-primary mb-4"></i>
            <h3 class="font-bold mb-2">CV Review & Optimization</h3>
            <p class="text-sm text-gray-500 mb-3">Our consultants will review your CV and suggest improvements tailored for Indian construction recruiters.</p>
            <p class="text-xs text-gray-400">We help highlight your project experience, technical certifications (AutoCAD, Revit, OSHA), and quantifiable achievements.</p>
        </div>
        <div class="p-6 border rounded hover:shadow-lg transition">
            <i class="fas fa-bell text-3xl text-primary mb-4"></i>
            <h3 class="font-bold mb-2">Smart Job Alerts</h3>
            <p class="text-sm text-gray-500 mb-3">Get notified immediately when roles match your skills, preferred location, and salary expectations.</p>
            <p class="text-xs text-gray-400">Filter by project type (residential/commercial/infrastructure), contract duration, and specific construction phases.</p>
        </div>
        <div class="p-6 border rounded hover:shadow-lg transition">
            <i class="fas fa-chalkboard-teacher text-3xl text-primary mb-4"></i>
            <h3 class="font-bold mb-2">Interview Preparation</h3>
            <p class="text-sm text-gray-500 mb-3">We prepare you for technical interviews with top construction firms and developers.</p>
            <p class="text-xs text-gray-400">Guidance on discussing past projects, handling technical questions, and negotiating construction industry salaries.</p>
        </div>
    </div>

    <div class="text-center">
        <a href="<?php echo home_url('/cv-upload'); ?>" class="bg-primary text-white px-10 py-4 rounded shadow-lg font-bold hover:bg-blue-900 transition text-lg">
            Upload Your CV Now
        </a>
    </div>
</div>

<?php get_footer(); ?>