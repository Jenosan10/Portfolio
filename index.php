<?php include 'includes/header.php'; ?>

<body class="dark-industrial">
    <div id="particles-js"></div>
    
    <header class="premium-header">
        <div class="container">
            <div class="logo">
                <div class="red-dot"></div>
                <h1>JENOSAN</h1>
                <span class="tagline">SOFTWARE ENGINEER | CYBER SECURITY</span>
            </div>
            
            <nav class="premium-nav">
                <ul>
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="projects.php">PROJECTS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
                <div class="nav-accent"></div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero-section">
            <div class="hero-content">
                <div class="hero-text">
                    <h2>BUILDING SECURE DIGITAL SOLUTIONS</h2>
                    <p class="typewriter" data-text="Laravel Expert | POS Systems | Web Applications | Cyber Security"></p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary btn-glow">HIRE ME</a>
                        <a href="projects.php" class="btn btn-secondary">VIEW WORK</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hexagon-container">
                        <div class="hexagon">
                            <img src="assets/img/profile.jpg" alt="Jenosan Profile">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="skills-section">
            <h3 class="section-title"><span>TECHNICAL SKILLS</span></h3>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h4>Laravel Development</h4>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="95%"></div>
                    </div>
                </div>
                
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fas fa-cash-register"></i>
                    </div>
                    <h4>POS Systems</h4>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="90%"></div>
                    </div>
                </div>
                
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Cyber Security</h4>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="85%"></div>
                    </div>
                </div>
                
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4>Database Design</h4>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="88%"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-projects">
            <h3 class="section-title"><span>FEATURED WORK</span></h3>
            <div class="projects-grid">
                <?php
                $projects = [
                    [
                        'title' => 'Retail POS System',
                        'desc' => 'Complete point of sale solution with inventory management',
                        'tags' => ['Laravel', 'Vue.js', 'MySQL'],
                        'image' => 'pos-system.jpg',
                        'category' => 'pos'
                    ],
                    [
                        'title' => 'E-Commerce Platform',
                        'desc' => 'Custom e-commerce solution with payment integration',
                        'tags' => ['Laravel', 'React', 'Stripe'],
                        'image' => 'ecommerce.jpg',
                        'category' => 'laravel'
                    ],
                    [
                        'title' => 'Security Audit Tool',
                        'desc' => 'Web application vulnerability scanner',
                        'tags' => ['Python', 'Cyber Security', 'Pentesting'],
                        'image' => 'security-tool.jpg',
                        'category' => 'security'
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
                            <a href="#" class="project-link">View Details →</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <div class="text-center">
                <a href="projects.php" class="btn btn-outline">VIEW ALL PROJECTS</a>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>