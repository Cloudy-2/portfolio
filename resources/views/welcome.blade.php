<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Cloyd P. Labininay - Information Technology Student specializing in Laravel, React, and Web Development">
    <meta name="keywords" content="Web Developer, Laravel, React, Full Stack Developer, IT Student">
    <meta name="author" content="Cloyd P. Labininay">
    <title>Cloyd P. Labininay | Web Developer Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#home" class="nav-logo">CP</a>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#certifications" class="nav-link">Certifications</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero section">
        <div class="hero-content">
            <p class="hero-greeting">Hi there! I'm</p>
            <h1 class="hero-title">Cloyd P. Labininay</h1>
            <p class="hero-subtitle">Information Technology Student | Web Developer | Laravel & React Enthusiast</p>
            <div class="hero-cta">
                <a href="#contact" class="btn btn-primary">Get In Touch</a>
                <a href="#projects" class="btn btn-outline">View My Work</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">About Me</h2>
            <div class="grid grid-2" style="align-items: center;">
                <div class="animate-on-scroll">
                    <img src="/profile.jpg" alt="Cloyd P. Labininay" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
                </div>
                <div class="animate-on-scroll">
                    <h3 class="text-gradient">Professional Summary</h3>
                    <p>Information Technology student with practical exposure to web application development using <strong>Laravel</strong> and <strong>React</strong>, backend development with <strong>Python</strong>, and database management with <strong>MySQL</strong>.</p>
                    <p>Strongly interested in developing web applications, while remaining highly open to working on diverse IT-related projects. Possesses foundational knowledge in Networking 1 and 2, including crimping, fiber optic cable wiring, and basic network setup.</p>
                    <p>Experienced in computer management, computer assembly and disassembly, and basic computer configuration. Demonstrates adaptability, technical curiosity, and a willingness to continuously learn across multiple areas of information technology.</p>
                    
                    <div class="mt-3">
                        <p><strong>Location:</strong> Purok 9, Upper Dayawan, Villanueva, Misamis Oriental, 9002</p>
                        <p><strong>Email:</strong> <a href="mailto:labininaycloyd5@gmail.com">labininaycloyd5@gmail.com</a></p>
                        <p><strong>Phone:</strong> +639554330963</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Education</h2>
            <div class="timeline">
                <!-- Current Education -->
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="card card-glass">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: var(--spacing-sm);">
                                <h3>Bachelor of Science in Information Technology</h3>
                                <span class="skill-tag" style="background: var(--color-success);">2022 - Present</span>
                            </div>
                            <p style="color: var(--color-primary); font-weight: 600;">Tagoloan Community College</p>
                            <p style="color: var(--text-muted);">Del Pilar St, Tagoloan, Misamis Oriental</p>
                        </div>
                    </div>
                </div>

                <!-- Senior High School -->
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="card card-glass">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: var(--spacing-sm);">
                                <h3>Information and Communication Technology (ICT)</h3>
                                <span class="skill-tag">2020 - 2022</span>
                            </div>
                            <p style="color: var(--color-primary); font-weight: 600;">SITC-St. Ignatius Technical College, Inc.</p>
                            <p style="color: var(--text-muted);">Capt. Raymundo Sabio St., Tagoloan, Philippines, 9001</p>
                        </div>
                    </div>
                </div>

                <!-- High School -->
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="card card-glass">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: var(--spacing-sm);">
                                <h3>Villanueva National High School</h3>
                                <span class="skill-tag">2016 - 2020</span>
                            </div>
                            <p style="color: var(--text-muted);">Looc, Villanueva, Philippines, 9002</p>
                        </div>
                    </div>
                </div>

                <!-- Elementary -->
                <div class="timeline-item animate-on-scroll">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="card card-glass">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: var(--spacing-sm);">
                                <h3>Dayawan Elementary School</h3>
                                <span class="skill-tag">2010 - 2016</span>
                            </div>
                            <p style="color: var(--text-muted);">Upper Dayawan, Villanueva, Misamis Oriental, 9002</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Skills & Expertise</h2>
            
            <div class="grid grid-3">
                <!-- Web Development -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">🌐 Web Development</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">Full-stack Development</span>
                        <span class="skill-tag">Frontend Development</span>
                        <span class="skill-tag">Backend Development</span>
                        <span class="skill-tag">Responsive Web Design</span>
                    </div>
                </div>

                <!-- Frameworks & Technologies -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">⚡ Frameworks & Tech</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">Laravel Framework</span>
                        <span class="skill-tag">React.js</span>
                        <span class="skill-tag">Node.js & Express</span>
                        <span class="skill-tag">Rasa NLP</span>
                    </div>
                </div>

                <!-- Languages -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">💻 Programming</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">PHP Development</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">HTML5 & CSS3</span>
                    </div>
                </div>

                <!-- Styling -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">🎨 UI/UX Design</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">Tailwind CSS</span>
                        <span class="skill-tag">WordPress</span>
                        <span class="skill-tag">Responsive Design</span>
                    </div>
                </div>

                <!-- Database -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">🗄️ Database</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Database Management</span>
                        <span class="skill-tag">Database Design</span>
                    </div>
                </div>

                <!-- Additional Skills -->
                <div class="card card-glass animate-on-scroll">
                    <h3 style="margin-bottom: var(--spacing-md);">🔧 Other Skills</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">REST API Development</span>
                        <span class="skill-tag">CRUD Systems</span>
                        <span class="skill-tag">Authentication</span>
                        <span class="skill-tag">Authorization Systems</span>
                    </div>
                </div>
            </div>

            <div class="mt-3 animate-on-scroll">
                <div class="card card-glass">
                    <h3 style="margin-bottom: var(--spacing-md);">🌐 Networking & Hardware</h3>
                    <p style="margin-bottom: var(--spacing-sm);">Foundational knowledge in Networking 1 and 2:</p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span class="skill-tag">Network Crimping</span>
                        <span class="skill-tag">Fiber Optic Cable Wiring</span>
                        <span class="skill-tag">Basic Network Setup</span>
                        <span class="skill-tag">Computer Assembly</span>
                        <span class="skill-tag">Computer Disassembly</span>
                        <span class="skill-tag">Computer Configuration</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Academic Projects</h2>
            
            <div class="animate-on-scroll">
                <div class="card card-glass">
                    <div class="grid grid-2" style="align-items: start; gap: var(--spacing-xl);">
                        <div>
                            <h3 class="text-gradient" style="font-size: 2rem; margin-bottom: var(--spacing-md);">LumiCHAT</h3>
                            <p style="font-size: 1.1rem; color: var(--color-accent); font-weight: 600; margin-bottom: var(--spacing-md);">Expert-Based Mental Health Support Chatbot – System Analyst</p>
                            
                            <p style="margin-bottom: var(--spacing-md);">Developed a web-based mental health chatbot using <strong>Laravel</strong>, <strong>React.js</strong>, <strong>Rasa NLP</strong>, and <strong>MySQL</strong>.</p>
                            
                            <h4 style="margin-top: var(--spacing-lg); margin-bottom: var(--spacing-sm);">Key Features:</h4>
                            <ul style="list-style: none; padding-left: 0;">
                                <li style="padding: var(--spacing-xs) 0; color: var(--text-secondary);">✓ Implemented intent recognition for user mental health queries</li>
                                <li style="padding: var(--spacing-xs) 0; color: var(--text-secondary);">✓ Risk-level detection system</li>
                                <li style="padding: var(--spacing-xs) 0; color: var(--text-secondary);">✓ Automated counselor referral with appointment scheduling</li>
                                <li style="padding: var(--spacing-xs) 0; color: var(--text-secondary);">✓ Real-time conversational AI for mental health support</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 style="margin-bottom: var(--spacing-sm);">Technologies Used:</h4>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: var(--spacing-lg);">
                                <span class="skill-tag" style="background: var(--color-primary);">Laravel</span>
                                <span class="skill-tag" style="background: var(--color-primary);">React.js</span>
                                <span class="skill-tag" style="background: var(--color-primary);">Rasa NLP</span>
                                <span class="skill-tag" style="background: var(--color-primary);">MySQL</span>
                            </div>
                            
                            <div style="text-align: center;">
                                <a href="https://lumichat.site/" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                                    <span>🌐 View Live Demo</span>
                                </a>
                            </div>
                            
                            <div style="background: var(--bg-secondary); padding: var(--spacing-md); border-radius: var(--radius-md); border: 2px solid rgba(99, 102, 241, 0.3); margin-top: var(--spacing-lg);">
                                <img src="/lumichat-screenshot.png" alt="LumiCHAT Login Interface" style="width: 100%; border-radius: var(--radius-sm); box-shadow: var(--shadow-md);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Certifications & Webinars</h2>
            
            <div class="grid grid-3">
                <div class="card card-glass animate-on-scroll">
                    <div style="text-align: center; margin-bottom: var(--spacing-md);">
                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-md); font-size: 1.5rem;">
                            📋
                        </div>
                    </div>
                    <h3 style="text-align: center; font-size: 1.2rem; margin-bottom: var(--spacing-sm);">ICT Project Management</h3>
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.9rem;">Professional certification in IT project management methodologies</p>
                </div>

                <div class="card card-glass animate-on-scroll">
                    <div style="text-align: center; margin-bottom: var(--spacing-md);">
                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-md); font-size: 1.5rem;">
                            💬
                        </div>
                    </div>
                    <h3 style="text-align: center; font-size: 1.2rem; margin-bottom: var(--spacing-sm);">CyberTalks: Gabay Para sa Digital na Kampanyahan sa Halalan 2025</h3>
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.9rem;">Digital campaign strategies and cybersecurity</p>
                </div>

                <div class="card card-glass animate-on-scroll">
                    <div style="text-align: center; margin-bottom: var(--spacing-md);">
                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-md); font-size: 1.5rem;">
                            🔒
                        </div>
                    </div>
                    <h3 style="text-align: center; font-size: 1.2rem; margin-bottom: var(--spacing-sm);">CYBERSTORYAHANAY PRESENTS: SAFER INTERNET WEEK WITH DICT AKLAN</h3>
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.9rem;">Internet safety and cybersecurity awareness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Get In Touch</h2>
            
            <div class="grid grid-2" style="max-width: 900px; margin: 0 auto;">
                <div class="animate-on-scroll">
                    <h3 class="text-gradient">Let's Connect</h3>
                    <p style="margin-bottom: var(--spacing-lg);">I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.</p>
                    
                    <div style="display: flex; flex-direction: column; gap: var(--spacing-md);">
                        <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                            <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                📧
                            </div>
                            <div>
                                <p style="margin: 0; font-weight: 600;">Email</p>
                                <a href="mailto:labininaycloyd5@gmail.com" style="color: var(--text-secondary);">labininaycloyd5@gmail.com</a>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                            <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                📱
                            </div>
                            <div>
                                <p style="margin: 0; font-weight: 600;">Phone</p>
                                <a href="tel:+639554330963" style="color: var(--text-secondary);">+639554330963</a>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                            <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                📍
                            </div>
                            <div>
                                <p style="margin: 0; font-weight: 600;">Location</p>
                                <p style="margin: 0; color: var(--text-secondary);">Villanueva, Misamis Oriental, 9002</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="animate-on-scroll">
                    <form id="contact-form" class="card card-glass">
                        <div class="form-group">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: var(--bg-secondary); padding: var(--spacing-xl) 0; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.1);">
        <div class="container">
            <p style="color: var(--text-muted); margin-bottom: var(--spacing-sm);">© 2026 Cloyd P. Labininay. All rights reserved.</p>
            <p style="color: var(--text-muted); font-size: 0.9rem;">Built with Laravel & Modern Web Technologies</p>
        </div>
    </footer>
</body>
</html>
