<?php include 'includes/header.php'; ?>

<body class="dark-industrial">
    <div id="particles-js"></div>
    
    <?php include 'includes/header.php'; ?>

    <main class="container">
        <section class="projects-section">
            <h3 class="section-title"><span>MY PROJECTS</span></h3>
            
            <div class="projects-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="laravel">Laravel</button>
                <button class="filter-btn" data-filter="pos">POS Systems</button>
                <button class="filter-btn" data-filter="security">Security</button>
            </div>
            
            <div class="projects-grid">
                <?php
                // Sample PHP code to fetch all projects
                $projects = [
                    [
                        'title' => 'Retail POS System',
                        'desc' => 'Complete point of sale solution with inventory management',
                        'tags' => ['Laravel', 'Vue.js', 'MySQL'],
                        'image' => 'pos-system.jpg',
                        'category' => 'pos',
                        'link' => '#'
                    ],
                    [
                        'title' => 'E-Commerce Platform',
                        'desc' => 'Custom e-commerce solution with payment integration',
                        'tags' => ['Laravel', 'React', 'Stripe'],
                        'image' => 'ecommerce.jpg',
                        'category' => 'laravel',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Security Audit Tool',
                        'desc' => 'Web application vulnerability scanner',
                        'tags' => ['Python', 'Cyber Security', 'Pentesting'],
                        'image' => 'security-tool.jpg',
                        'category' => 'security',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Restaurant Management',
                        'desc' => 'POS system with table management for restaurants',
                        'tags' => ['Laravel', 'Livewire', 'MySQL'],
                        'image' => 'restaurant-pos.jpg',
                        'category' => 'pos',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Inventory System',
                        'desc' => 'Advanced inventory tracking with barcode support',
                        'tags' => ['Laravel', 'Vue.js', 'REST API'],
                        'image' => 'inventory-system.jpg',
                        'category' => 'laravel',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Firewall Analyzer',
                        'desc' => 'Network security monitoring tool',
                        'tags' => ['Python', 'Cyber Security', 'Networking'],
                        'image' => 'firewall-analyzer.jpg',
                        'category' => 'security',
                        'link' => '#'
                    ]
                ];
                
                foreach ($projects as $project) {
                    echo '<div class="project-card" data-category="'.$project['category'].'">
                        <div class="project-image">
                            <img src="assets/img/projects/'.$project['image'].'" alt="'.$project['title'].'">
                            <div class="project-overlay">
                                <div class="project-tags">'.implode(' • ', $project['tags']).'</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h4>'.$project['title'].'</h4>
                            <p>'.$project['desc'].'</p>
                            <a href="'.$project['link'].'" class="project-link">View Details →</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>
        
        <section class="testimonials-section">
            <h3 class="section-title"><span>CLIENT TESTIMONIALS</span></h3>
            
            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Jenosan developed our custom POS system that revolutionized our retail operations. The system is robust, user-friendly, and has significantly improved our efficiency."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="assets/img/clients/client1.jpg" alt="Client Name">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <span>CEO, Retail Solutions Inc.</span>
                        </div>
                    </div>
                </div>
                
                <!-- Additional testimonials would go here -->
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>