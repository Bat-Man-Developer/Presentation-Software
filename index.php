<?php
    $companyName = "Royal Institute of Technology & Engineering - Tinotel";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?></title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/styles/index.css">
</head>
<body>
    <div class="loading-container">
        <h1 class="main-title"><?php echo $companyName; ?></h1>
        <br><br>
        
        <div class="cube-container">
            <div class="cube">
                <div class="face front">AI</div>
                <div class="face back">Analytics</div>
                <div class="face left">Security</div>
                <div class="face right">Intelligence</div>
                <div class="face top">Innovation</div>
                <div class="face bottom">Excellence</div>
            </div>
        </div>
        
        <br><br>
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
    </div>

    <div class="particles" id="particles"></div>

    <script>
        // Countdown timer
        let timeLeft = 10;
        
        const countdown = setInterval(() => {
            timeLeft--;
            
            if (timeLeft > 0) {

            } else {
                clearInterval(countdown);
                
                // Add fade out effect before redirect
                document.body.style.transition = 'opacity 0.5s ease';
                document.body.style.opacity = '0.7';
                
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 500);
            }
        }, 1000);

        // Create floating particles with improved performance
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const colors = [
                'var(--primary-color)',
                'var(--secondary-color)', 
                'var(--accent-blue)', 
                'var(--accent-orange)', 
                'var(--accent-red)'
            ];
            
            // Responsive particle count
            const screenWidth = window.innerWidth;
            const screenHeight = window.innerHeight;
            const screenArea = screenWidth * screenHeight;
            const baseParticleCount = Math.min(Math.max(Math.floor(screenArea / 25000), 15), 40);
            
            // Reduce particles on small screens or landscape orientation
            const isLandscape = window.innerWidth > window.innerHeight;
            const isSmallScreen = screenWidth <= 480;
            
            let particleCount = baseParticleCount;
            if (isSmallScreen) particleCount = Math.floor(particleCount * 0.6);
            if (isLandscape && window.innerHeight <= 600) particleCount = Math.floor(particleCount * 0.7);
            
            // Clear existing particles
            particlesContainer.innerHTML = '';
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 8 + 10) + 's';
                
                // Vary particle sizes slightly
                const size = Math.random() * 2 + 3;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                particlesContainer.appendChild(particle);
            }
        }

        // Optimized orientation and resize handling
        let resizeTimeout;
        function handleResize() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                createParticles();
            }, 250);
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            
            // Add loading transition effect
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.8s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Event listeners with performance optimization
        window.addEventListener('resize', handleResize, { passive: true });
        window.addEventListener('orientationchange', () => {
            setTimeout(() => {
                handleResize();
            }, 100);
        }, { passive: true });

        // Clean up intervals and add smooth exit transition
        window.addEventListener('beforeunload', () => {
            clearInterval(countdown);
            clearInterval(updateLoadingText);
            clearTimeout(resizeTimeout);
            
            document.body.style.transition = 'opacity 0.3s ease';
            document.body.style.opacity = '0.8';
        });

        // Add keyboard shortcut for immediate redirect (for testing/development)
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                clearInterval(countdown);
                clearInterval(updateLoadingText);
                timeLeft = 0;
                timerElement.textContent = "Redirecting now...";
                
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 200);
            }
        });
    </script>
</body>
</html>