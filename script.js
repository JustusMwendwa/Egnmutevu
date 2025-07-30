// Mobile Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const navUl = document.querySelector('nav ul');

menuToggle.addEventListener('click', () => {
    navUl.classList.toggle('show');
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
        });
        navUl.classList.remove('show'); // Close mobile menu after click
    });
});

// Slideshow functionality
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function moveSlide(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");
            
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            
            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active", "prev");
                slides[i].style.opacity = "0";
            }
            
            // Mark previous slide
            let prevIndex = slideIndex - 2;
            if (prevIndex < 0) prevIndex = slides.length - 1;
            slides[prevIndex].classList.add("prev");
            
            // Show current slide
            slides[slideIndex-1].classList.add("active");
            slides[slideIndex-1].style.opacity = "1";
            
            // Update dots
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }
            dots[slideIndex-1].classList.add("active");
        }
        
        // Auto-advance slides every 5 seconds
        setInterval(() => moveSlide(1), 5000);
        // Scroll fade-in animation
document.addEventListener("DOMContentLoaded", function () {
  const blocks = document.querySelectorAll(".timeline-block");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    {
      threshold: 0.1
    }
  );

  blocks.forEach(block => observer.observe(block));

  // Filter logic
  const filterButtons = document.querySelectorAll(".filter-btn");
  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;
      blocks.forEach(block => {
        if (filter === "all" || block.dataset.level === filter) {
          block.style.display = "block";
        } else {
          block.style.display = "none";
        }
      });

      // Update active class
      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const blocks = document.querySelectorAll(".timeline-block");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    { threshold: 0.1 }
  );

  blocks.forEach(block => observer.observe(block));

  // Filter logic
  const filterButtons = document.querySelectorAll(".filter-btn");
  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;
      blocks.forEach(block => {
        if (filter === "all" || block.dataset.level === filter) {
          block.style.display = "grid";
        } else {
          block.style.display = "none";
        }
      });

      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");
    });
  });
});

  // Show button on scroll
  window.onscroll = function () {
    const btn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  // Scroll to top function
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }


  let currentSlide = 0;
  const slides = document.querySelectorAll('.agenda-slide');
  const slider = document.getElementById('slider');

  function showSlide(index) {
    const slideWidth = slides[0].offsetWidth;
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Optional: swipe support for mobile
  let startX = 0;

  slider.addEventListener('touchstart', e => startX = e.touches[0].clientX);
  slider.addEventListener('touchend', e => {
    let endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) nextSlide();
    else if (endX - startX > 50) prevSlide();
  });