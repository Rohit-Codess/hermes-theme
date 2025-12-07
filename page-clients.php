<?php 
/* Template Name: Clients Page */
get_header(); 
?>

<div class="bg-primary py-16 text-center text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <h1 class="text-3xl md:text-5xl font-bold relative z-10">Our Clients</h1>
    <p class="text-blue-200 mt-4 relative z-10">Partnering with India's Infrastructure Leaders</p>
</div>

<div class="container mx-auto px-6 md:px-12 py-16">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <!-- Mock Logos -->
        <div class="p-8 border border-gray-100 rounded shadow-sm hover:shadow-md transition grayscale hover:grayscale-0">
            <i class="fas fa-building text-4xl text-gray-400 mb-4"></i>
            <h3 class="font-bold text-gray-700">DLF</h3>
        </div>
        <div class="p-8 border border-gray-100 rounded shadow-sm hover:shadow-md transition grayscale hover:grayscale-0">
            <i class="fas fa-city text-4xl text-gray-400 mb-4"></i>
            <h3 class="font-bold text-gray-700">L&T</h3>
        </div>
        <div class="p-8 border border-gray-100 rounded shadow-sm hover:shadow-md transition grayscale hover:grayscale-0">
            <i class="fas fa-road text-4xl text-gray-400 mb-4"></i>
            <h3 class="font-bold text-gray-700">Tata Projects</h3>
        </div>
        <div class="p-8 border border-gray-100 rounded shadow-sm hover:shadow-md transition grayscale hover:grayscale-0">
            <i class="fas fa-industry text-4xl text-gray-400 mb-4"></i>
            <h3 class="font-bold text-gray-700">Godrej</h3>
        </div>
    </div>

    <div class="mt-16 bg-blue-50 p-8 rounded-lg">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-primary mb-4 text-center">Hire Top Construction Talent Today</h2>
            <p class="text-gray-600 mb-6 text-center max-w-2xl mx-auto">We understand the urgency of construction projects. Our database of vetted professionals is ready to deploy across India.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded text-center">
                    <i class="fas fa-building text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Residential Projects</h4>
                    <p class="text-sm text-gray-600">High-rise apartments, luxury villas, gated communities & affordable housing schemes</p>
                </div>
                <div class="bg-white p-6 rounded text-center">
                    <i class="fas fa-road text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Infrastructure</h4>
                    <p class="text-sm text-gray-600">Metro rail, highways, bridges, airports & smart city developments</p>
                </div>
                <div class="bg-white p-6 rounded text-center">
                    <i class="fas fa-store text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Commercial</h4>
                    <p class="text-sm text-gray-600">Office complexes, shopping malls, hotels & IT parks</p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="<?php echo home_url('/contact'); ?>" class="bg-primary text-white px-8 py-3 rounded font-bold hover:bg-blue-900 transition">Contact Our Team</a>
            </div>
        </div>
    </div>

    <!-- Client Types We Work With -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Types of Construction Companies We Partner With</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Tailored recruitment solutions for every segment of the construction industry</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-landmark text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Real Estate Developers</h3>
                    <p class="text-gray-600 text-sm mb-4">Large-scale residential and commercial developers building townships, high-rises, and mixed-use projects.</p>
                    <div class="text-sm text-gray-500">
                        <p class="mb-1"><strong>Common Roles:</strong></p>
                        <p>Project Managers, Site Engineers, QS, Sales & Marketing teams</p>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tools text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">EPC Contractors</h3>
                    <p class="text-gray-600 text-sm mb-4">Engineering, Procurement, and Construction firms handling large infrastructure and industrial projects.</p>
                    <div class="text-sm text-gray-500">
                        <p class="mb-1"><strong>Common Roles:</strong></p>
                        <p>Civil Engineers, MEP specialists, Contract Managers, Procurement teams</p>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-pencil-ruler text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Design & Consultancy Firms</h3>
                    <p class="text-gray-600 text-sm mb-4">Architectural firms, structural consultants, and project management consultancies.</p>
                    <div class="text-sm text-gray-500">
                        <p class="mb-1"><strong>Common Roles:</strong></p>
                        <p>Architects, Structural Engineers, BIM Modelers, Planning Engineers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Portfolio -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Major Projects We've Supported</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our candidates have contributed to some of India's most prestigious construction projects</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 p-3 rounded">
                            <i class="fas fa-subway text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Mumbai Metro Line 3 (Aqua Line)</h4>
                            <p class="text-sm text-gray-600 mb-3">Supplied 50+ civil engineers and tunneling specialists for this ₹23,000 crore underground metro project.</p>
                            <div class="flex gap-4 text-xs text-gray-500">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Mumbai</span>
                                <span><i class="fas fa-users mr-1"></i>50+ Placements</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 p-3 rounded">
                            <i class="fas fa-city text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">DLF Cyber City Expansion</h4>
                            <p class="text-sm text-gray-600 mb-3">Provided project managers, MEP engineers, and QS professionals for this 5 million sq ft commercial development.</p>
                            <div class="flex gap-4 text-xs text-gray-500">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Gurgaon</span>
                                <span><i class="fas fa-users mr-1"></i>30+ Placements</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 p-3 rounded">
                            <i class="fas fa-road text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Mumbai-Pune Expressway Widening</h4>
                            <p class="text-sm text-gray-600 mb-3">Recruited highway engineers, surveyors, and contract managers for this NHAI infrastructure upgrade project.</p>
                            <div class="flex gap-4 text-xs text-gray-500">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Maharashtra</span>
                                <span><i class="fas fa-users mr-1"></i>40+ Placements</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 p-3 rounded">
                            <i class="fas fa-building text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Prestige Lakeside Habitat</h4>
                            <p class="text-sm text-gray-600 mb-3">Staffed site engineers, interior designers, and landscaping specialists for this 102-acre luxury residential township.</p>
                            <div class="flex gap-4 text-xs text-gray-500">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Bangalore</span>
                                <span><i class="fas fa-users mr-1"></i>25+ Placements</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hiring Process Section -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Construction Recruitment Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A streamlined approach designed specifically for construction industry timelines</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">1</div>
                    <div class="mt-4">
                        <i class="fas fa-clipboard-list text-3xl text-primary mb-3"></i>
                        <h4 class="font-bold mb-2">Requirement Analysis</h4>
                        <p class="text-sm text-gray-600">We understand your project scope, timeline, technical requirements, and team culture.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">2</div>
                    <div class="mt-4">
                        <i class="fas fa-search text-3xl text-primary mb-3"></i>
                        <h4 class="font-bold mb-2">Candidate Sourcing</h4>
                        <p class="text-sm text-gray-600">Database search plus active headhunting from live construction sites and competitor projects.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">3</div>
                    <div class="mt-4">
                        <i class="fas fa-user-check text-3xl text-primary mb-3"></i>
                        <h4 class="font-bold mb-2">Screening & Vetting</h4>
                        <p class="text-sm text-gray-600">Technical assessment, certification verification, reference checks, and project portfolio review.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">4</div>
                    <div class="mt-4">
                        <i class="fas fa-handshake text-3xl text-primary mb-3"></i>
                        <h4 class="font-bold mb-2">Interview & Onboarding</h4>
                        <p class="text-sm text-gray-600">We coordinate interviews, negotiate offers, and support smooth onboarding to your project site.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <div class="bg-white inline-block px-8 py-4 rounded-lg shadow">
                    <p class="text-gray-600 mb-2"><strong>Average Time-to-Hire:</strong></p>
                    <p class="text-3xl font-bold text-primary">14-21 Days</p>
                    <p class="text-sm text-gray-500 mt-1">From requirement to candidate joining</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>