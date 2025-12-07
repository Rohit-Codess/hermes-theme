<?php get_header(); ?>

    <!-- Hero Section with Slider -->
    <!-- Mobile: h-auto min-h-[500px], Desktop: Fixed 600px -->
    <header class="relative py-12 md:py-24 overflow-hidden h-[550px] md:h-[600px]">
        <div class="carousel-container">
            <div class="carousel-track" id="sliderTrack">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop" class="carousel-slide" alt="Construction Site India">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2031&auto=format&fit=crop" class="carousel-slide" alt="Architecture">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop" class="carousel-slide" alt="Engineers">
            </div>
        </div>

        <div class="absolute inset-0 hero-overlay z-10"></div>

        <div class="container mx-auto px-6 md:px-12 h-full relative z-20 flex items-center">
            <div class="max-w-3xl text-white">
                <span class="inline-block bg-blue-500 bg-opacity-30 text-blue-100 px-3 py-1 rounded-full text-xs md:text-sm font-semibold mb-4 border border-blue-400">
                    Trusted by India's Top Developers
                </span>
                <!-- Smaller text on mobile (text-3xl), larger on desktop (text-6xl) -->
                <h1 class="text-3xl md:text-6xl font-bold mb-4 md:mb-6 leading-tight">
                    Building India's Future,<br>One Professional at a Time.
                </h1>
                <p class="text-base md:text-xl text-blue-100 mb-8 font-light max-w-xl">
                    Specialist recruitment for Construction, Civil Engineering, and Residential Development across Mumbai, Delhi, and Bangalore.
                </p>
                <!-- Stack buttons on mobile (flex-col), side-by-side on desktop (md:flex-row) -->
                <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                    <a href="<?php echo home_url('/job'); ?>" class="bg-white text-primary px-8 py-3 md:py-4 rounded font-bold hover:bg-gray-100 transition shadow-lg text-center w-full md:w-auto">
                        Find a Job
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-3 md:py-4 rounded font-bold hover:bg-white hover:text-primary transition text-center w-full md:w-auto">
                        Hire Talent
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="w-full lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-100 rounded-full z-0"></div>
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932&auto=format&fit=crop" class="relative z-10 rounded-lg shadow-2xl w-full" alt="Meeting">
                    <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded shadow-lg z-20 hidden md:block">
                        <p class="text-3xl font-bold">15+</p>
                        <p class="text-sm">Years of Excellence</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-6 font-serif">India's Leading Construction Recruitment Agency</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        At HermesTalentRise, we don't just fill vacancies; we build partnerships. Our specialized consultants understand the nuances of the Indian infrastructure market—from high-rise residential towers to metro rail projects, from highway construction to smart city developments.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Whether you're a civil engineer seeking your next career move, a developer searching for experienced project managers, or a skilled tradesperson looking for consistent work—we connect the right people with the right opportunities across India's booming construction sector.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="bg-blue-50 p-3 rounded text-primary mr-4"><i class="fas fa-hard-hat text-xl"></i></div>
                            <div><h4 class="font-bold text-slate-800">Permanent Roles</h4><p class="text-sm text-gray-500">Engineers, architects, QS & site managers for long-term growth</p></div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-50 p-3 rounded text-primary mr-4"><i class="fas fa-stopwatch text-xl"></i></div>
                            <div><h4 class="font-bold text-slate-800">Project Based</h4><p class="text-sm text-gray-500">Temporary contractors for specific construction phases & deadlines</p></div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-50 p-3 rounded text-primary mr-4"><i class="fas fa-users-cog text-xl"></i></div>
                            <div><h4 class="font-bold text-slate-800">Skilled Labour</h4><p class="text-sm text-gray-500">Carpenters, electricians, plumbers & construction workers</p></div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-50 p-3 rounded text-primary mr-4"><i class="fas fa-clipboard-check text-xl"></i></div>
                            <div><h4 class="font-bold text-slate-800">Compliance & Safety</h4><p class="text-sm text-gray-500">HSE officers & quality control specialists</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Sectors We Serve -->
    <section class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Construction Sectors We Specialize In</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">From foundations to finishing, we provide specialized talent across all major construction disciplines</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-building text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Residential Construction</h3>
                    <p class="text-gray-600 text-sm mb-4">High-rise apartments, luxury villas, gated communities, and affordable housing projects across India.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Project Managers & Site Engineers</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Structural & Civil Engineers</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Interior Designers & Architects</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Quantity Surveyors & Cost Estimators</li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-road text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Infrastructure & Civil Works</h3>
                    <p class="text-gray-600 text-sm mb-4">Metro rail, highways, bridges, airports, and large-scale government infrastructure projects.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Highway Engineers & Surveyors</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Geotechnical & Soil Engineers</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Bridge Design Specialists</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Contract Managers & Planning Engineers</li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-store text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Commercial & Industrial</h3>
                    <p class="text-gray-600 text-sm mb-4">Office complexes, shopping malls, hotels, warehouses, and manufacturing facilities.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>MEP Engineers & HVAC Specialists</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Facade Engineers & Consultants</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>Fire & Safety Officers</li>
                        <li><i class="fas fa-chevron-right text-primary text-xs mr-2"></i>BIM Coordinators & Modelers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 md:py-20 bg-primary text-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Construction Companies Trust Us</h2>
                <p class="text-blue-100 max-w-2xl mx-auto">We understand the unique challenges of India's construction industry</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Quick Turnaround</h3>
                    <p class="text-blue-100 text-sm">We understand project deadlines. Most positions filled within 2-3 weeks.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Verified Credentials</h3>
                    <p class="text-blue-100 text-sm">All candidates undergo background checks and certification verification.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marked-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Pan-India Coverage</h3>
                    <p class="text-blue-100 text-sm">Active recruitment network in Mumbai, Delhi, Bangalore, Hyderabad, Pune, and Chennai.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Replacement Guarantee</h3>
                    <p class="text-blue-100 text-sm">If a candidate doesn't work out in 90 days, we find a replacement at no extra cost.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Metrics Section -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Track Record in Construction Recruitment</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Numbers that reflect our commitment to excellence</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2">5000+</div>
                    <div class="text-gray-600 font-medium">Professionals Placed</div>
                    <div class="text-xs text-gray-500 mt-2">Across all construction sectors</div>
                </div>
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2">200+</div>
                    <div class="text-gray-600 font-medium">Active Clients</div>
                    <div class="text-xs text-gray-500 mt-2">Leading developers & contractors</div>
                </div>
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2">92%</div>
                    <div class="text-gray-600 font-medium">Success Rate</div>
                    <div class="text-xs text-gray-500 mt-2">Candidates completing projects</div>
                </div>
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2">15+</div>
                    <div class="text-gray-600 font-medium">Years Experience</div>
                    <div class="text-xs text-gray-500 mt-2">In construction recruitment</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Slider Logic
        const track = document.getElementById('sliderTrack');
        if(track) {
            const slides = document.querySelectorAll('.carousel-slide');
            let currentSlide = 0;
            const totalSlides = slides.length;
            setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                track.style.transform = `translateX(-${currentSlide * 100}%)`;
            }, 3000);
        }
    </script>

<?php get_footer(); ?>