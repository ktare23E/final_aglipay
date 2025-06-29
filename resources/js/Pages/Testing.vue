
<script setup>
import { Link,Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Welcome"></Head>
    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 text-gray-800">

        <!-- Animated cursor -->
        <div class="cursor"></div>

        <!-- Floating particles background -->
        <div class="particles-container fixed top-0 left-0 w-full h-full pointer-events-none z-0">
            <div class="particle absolute rounded-full bg-indigo-200 opacity-20"></div>
            <div class="particle absolute rounded-full bg-purple-200 opacity-20"></div>
            <div class="particle absolute rounded-full bg-pink-200 opacity-20"></div>
        </div>

        <!-- Header with animated gradient -->
        <header class="gradient-bg text-white shadow-lg relative z-10">
            <div class="max-w-6xl mx-auto py-6 px-4 flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="animate-pulse">
                        <i class="fas fa-lightbulb text-3xl text-yellow-300"></i>
                    </div>
                    <h1 class="text-4xl font-bold zoom-in">Aglipay Files</h1>
                </div>

                <nav class="hidden md:block zoom-in">
                    <ul class="flex space-x-8">
                        <li><a href="#home" class="hover:text-indigo-200 transition duration-300 font-medium">Home</a>
                        </li>
                        <li><a href="#about" class="hover:text-indigo-200 transition duration-300 font-medium">About</a>
                        </li>
                        <li>
                            <Link :href="route('login')"
                                class="hover:text-indigo-200 transition duration-300 font-medium">Login</Link>
                        </li>

                    </ul>
                </nav>

                <button class="md:hidden text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </header>

        <main class="max-w-6xl mx-auto py-12 px-4 relative z-10">
            <!-- Hero section -->
            <section id="home" class="mb-20 py-16 slide-up">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0" data-scroll="fadeIn">
                        <h2 class="text-5xl font-bold text-indigo-700 mb-6 leading-tight">
                             Aglipay File Management <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-500">System</span>
                        </h2>
                        <p class="text-xl text-gray-600 mb-8">
                            We create innovative digital solutions that drive business growth and enhance user
                            experiences.
                        </p>
                        <div class="flex space-x-4">
                            <Link href="login" class="btn-primary">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </Link>
                            <button
                                class="border-2 border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-indigo-50 transition-all duration-300">
                                Learn More
                            </button>
                        </div>
                    </div>

                    <div class="md:w-1/2 flex justify-center" data-scroll="slideUp">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                alt="Digital innovation" class="rounded-xl shadow-2xl w-full max-w-md animate-float">
                            <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-lg">
                                <div class="flex items-center">
                                    <div class="bg-green-100 p-3 rounded-full mr-3">
                                        <i class="fas fa-check text-green-500 text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold">100+ Projects</p>
                                        <p class="text-sm text-gray-500">Completed successfully</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About section -->
            <section id="about" class="mb-20 py-16 slide-up">
                <div class="text-center mb-16" data-scroll="fadeIn">
                    <h2 class="text-4xl font-bold text-indigo-700 mb-4">About InnovateX</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        We're a team of passionate designers, developers, and strategists dedicated to creating
                        exceptional digital experiences.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="card p-8 text-center" data-scroll="slideUp">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-indigo-700 mb-4">Innovative Thinking</h3>
                        <p class="text-gray-600">
                            We approach every project with fresh perspectives and creative solutions to deliver unique
                            results.
                        </p>
                    </div>

                    <div class="card p-8 text-center" data-scroll="slideUp">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-indigo-700 mb-4">Technical Excellence</h3>
                        <p class="text-gray-600">
                            Our team stays at the forefront of technology to build robust, scalable solutions.
                        </p>
                    </div>

                    <div class="card p-8 text-center" data-scroll="slideUp">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-indigo-700 mb-4">User-Centric</h3>
                        <p class="text-gray-600">
                            We design with the end-user in mind, creating intuitive and engaging experiences.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Services section -->
            <section id="services" class="mb-20 py-16 slide-up">
                <div class="text-center mb-16" data-scroll="fadeIn">
                    <h2 class="text-4xl font-bold text-indigo-700 mb-4">Our Services</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Comprehensive digital solutions tailored to your business needs.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="card overflow-hidden" data-scroll="slideUp">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-indigo-100 flex items-center justify-center p-6">
                                <i class="fas fa-laptop-code text-6xl text-indigo-600"></i>
                            </div>
                            <div class="md:w-2/3 p-6">
                                <h3 class="text-2xl font-bold text-indigo-700 mb-3">Web Development</h3>
                                <p class="text-gray-600 mb-4">
                                    Custom websites and web applications built with modern technologies for optimal
                                    performance.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Responsive Design</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>SEO Optimized</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>CMS Integration</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden" data-scroll="slideUp">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-purple-100 flex items-center justify-center p-6">
                                <i class="fas fa-mobile-alt text-6xl text-purple-600"></i>
                            </div>
                            <div class="md:w-2/3 p-6">
                                <h3 class="text-2xl font-bold text-indigo-700 mb-3">Mobile Apps</h3>
                                <p class="text-gray-600 mb-4">
                                    Cross-platform mobile applications that engage users and drive business growth.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>iOS & Android</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Native Performance</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Offline Capabilities</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden" data-scroll="slideUp">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-pink-100 flex items-center justify-center p-6">
                                <i class="fas fa-paint-brush text-6xl text-pink-600"></i>
                            </div>
                            <div class="md:w-2/3 p-6">
                                <h3 class="text-2xl font-bold text-indigo-700 mb-3">UI/UX Design</h3>
                                <p class="text-gray-600 mb-4">
                                    Beautiful, intuitive interfaces designed to enhance user engagement and
                                    satisfaction.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>User Research</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Prototyping</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Usability Testing</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden" data-scroll="slideUp">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-blue-100 flex items-center justify-center p-6">
                                <i class="fas fa-chart-line text-6xl text-blue-600"></i>
                            </div>
                            <div class="md:w-2/3 p-6">
                                <h3 class="text-2xl font-bold text-indigo-700 mb-3">Digital Marketing</h3>
                                <p class="text-gray-600 mb-4">
                                    Data-driven strategies to increase your online visibility and customer acquisition.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>SEO & Content</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Social Media</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>PPC Advertising</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio section -->
            <section id="portfolio" class="mb-20 py-16 slide-up">
                <div class="text-center mb-16" data-scroll="fadeIn">
                    <h2 class="text-4xl font-bold text-indigo-700 mb-4">Our Portfolio</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        A showcase of our recent projects and the value we've delivered to our clients.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="portfolio-item relative overflow-hidden rounded-xl shadow-lg group"
                        data-scroll="slideUp">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="E-commerce website"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-2">E-commerce Platform</h3>
                                <p class="text-gray-200">A custom online store with advanced product filtering</p>
                                <button
                                    class="mt-3 text-white border border-white px-4 py-2 rounded hover:bg-white hover:text-indigo-700 transition">
                                    View Case Study
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item relative overflow-hidden rounded-xl shadow-lg group"
                        data-scroll="slideUp">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Mobile app"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-2">Fitness Mobile App</h3>
                                <p class="text-gray-200">Workout tracking with AI-powered recommendations</p>
                                <button
                                    class="mt-3 text-white border border-white px-4 py-2 rounded hover:bg-white hover:text-indigo-700 transition">
                                    View Case Study
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item relative overflow-hidden rounded-xl shadow-lg group"
                        data-scroll="slideUp">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Dashboard UI"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-2">Analytics Dashboard</h3>
                                <p class="text-gray-200">Data visualization for complex business metrics</p>
                                <button
                                    class="mt-3 text-white border border-white px-4 py-2 rounded hover:bg-white hover:text-indigo-700 transition">
                                    View Case Study
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <button class="btn-primary">
                        View All Projects <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="mb-20 py-16 bg-indigo-50 rounded-2xl slide-up">
                <div class="max-w-4xl mx-auto px-4">
                    <div class="text-center mb-12" data-scroll="fadeIn">
                        <h2 class="text-4xl font-bold text-indigo-700 mb-4">Client Testimonials</h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                        <p class="text-xl text-gray-600">
                            Hear what our clients say about working with us
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="card p-8" data-scroll="slideUp">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson"
                                    class="w-16 h-16 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-bold text-lg">Sarah Johnson</h4>
                                    <p class="text-indigo-600">CEO, TechStart Inc.</p>
                                </div>
                            </div>
                            <p class="text-gray-600 italic mb-6">
                                "InnovateX transformed our online presence with a stunning website that perfectly
                                represents our brand. Their team was professional, creative, and delivered beyond our
                                expectations."
                            </p>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>

                        <div class="card p-8" data-scroll="slideUp">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen"
                                    class="w-16 h-16 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-bold text-lg">Michael Chen</h4>
                                    <p class="text-indigo-600">Marketing Director, Global Corp</p>
                                </div>
                            </div>
                            <p class="text-gray-600 italic mb-6">
                                "The mobile app developed by InnovateX has significantly increased our customer
                                engagement. Their attention to detail and user experience focus made all the
                                difference."
                            </p>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact section -->
        </main>

        <!-- Footer -->
        <footer class="gradient-bg text-white py-12 relative z-10">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 flex items-center">
                            <i class="fas fa-lightbulb mr-2 animate-pulse"></i> InnovateX
                        </h3>
                        <p class="text-indigo-100">
                            Transforming ideas into digital reality through innovative solutions and creative thinking.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#home" class="text-indigo-200 hover:text-white transition">Home</a></li>
                            <li><a href="#about" class="text-indigo-200 hover:text-white transition">About</a></li>
                            <li><a href="#services" class="text-indigo-200 hover:text-white transition">Services</a>
                            </li>
                            <li><a href="#portfolio" class="text-indigo-200 hover:text-white transition">Portfolio</a>
                            </li>
                            <li>
                                <Link :href="route('login')" class="text-indigo-200 hover:text-white transition">Login
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-bold mb-4">Services</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-indigo-200 hover:text-white transition">Web Development</a></li>
                            <li><a href="#" class="text-indigo-200 hover:text-white transition">Mobile Apps</a></li>
                            <li><a href="#" class="text-indigo-200 hover:text-white transition">UI/UX Design</a></li>
                            <li><a href="#" class="text-indigo-200 hover:text-white transition">Digital Marketing</a>
                            </li>
                            <li><a href="#" class="text-indigo-200 hover:text-white transition">Consulting</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                        <p class="text-indigo-100 mb-4">
                            Subscribe to our newsletter for the latest updates and insights.
                        </p>
                        <form class="flex">
                            <input type="email" placeholder="Your email"
                                class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                            <button type="submit"
                                class="bg-indigo-800 px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="border-t border-indigo-400 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-indigo-200 mb-4 md:mb-0">
                        &copy; 2023 InnovateX. All rights reserved.
                    </p>

                    <div class="flex space-x-6">
                        <a href="#" class="text-indigo-200 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-indigo-200 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-indigo-200 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-indigo-200 hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back to top button -->
        <button id="backToTop"
            class="fixed bottom-8 right-8 bg-indigo-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 z-20">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    <h1 class="text-center font-bold">Hello World</h1>
</template>


<style>
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Custom animations */
@keyframes float {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-20px);
    }
}

@keyframes pulse {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(60px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes gradientBG {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

/* Animation classes */
.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-pulse {
    animation: pulse 3s ease infinite;
}

.fade-in {
    animation: fadeIn 1.5s ease-in-out;
}

.slide-up {
    animation: slideUp 1.2s ease-out;
}

.zoom-in {
    animation: zoomIn 1s ease-out;
}

.gradient-bg {
    background: linear-gradient(-45deg, #6366f1, #8b5cf6, #ec4899, #f43f5e);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
}

/* Custom components */
.card {
    @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl;
}

.btn-primary {
    @apply bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition-all duration-300 transform hover:-translate-y-1;
}

.feature-icon {
    @apply text-indigo-500 text-4xl mb-4;
}

/* Scroll animations */
[data-scroll] {
    opacity: 0;
    transition: opacity 0.6s, transform 0.6s;
}

[data-scroll="fadeIn"] {
    opacity: 1;
}

[data-scroll="slideUp"] {
    opacity: 1;
    transform: translateY(0);
}
</style>