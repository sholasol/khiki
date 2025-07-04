// Main JavaScript for Khiki Limited Property Services Website

document.addEventListener("DOMContentLoaded", () => {
  // Initialize all components
  initializeNavigation()
  initializePropertySearch()
  initializeContactForm()
  initializeAnimations()
  initializeScrollEffects()
  initializePropertyCards()
  initializeCounters()

  // Initialize tooltips and popovers
  initializeBootstrapComponents()
})

// Navigation functionality
function initializeNavigation() {
  const navbar = document.querySelector(".navbar")
  const navLinks = document.querySelectorAll(".nav-link")

  // Add scroll effect to navbar
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-scrolled")
    } else {
      navbar.classList.remove("navbar-scrolled")
    }
  })

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })
}

// Property search and filtering
function initializePropertySearch() {
  const searchForm = document.getElementById("propertySearchForm")
  const searchInput = document.getElementById("search")
  const typeSelect = document.getElementById("type")
  const locationSelect = document.getElementById("location")
  const propertyItems = document.querySelectorAll(".property-item")
  const propertyCount = document.getElementById("propertyCount")
  const noResults = document.getElementById("noResults")

  if (!searchForm) return

  // Search functionality
  function filterProperties() {
    const searchTerm = searchInput.value.toLowerCase()
    const selectedType = typeSelect.value
    const selectedLocation = locationSelect.value
    let visibleCount = 0

    propertyItems.forEach((item) => {
      const title = item.querySelector(".card-title").textContent.toLowerCase()
      const location = item.querySelector(".text-muted").textContent.toLowerCase()
      const type = item.dataset.type
      const locationData = item.dataset.location

      const matchesSearch = title.includes(searchTerm) || location.includes(searchTerm)
      const matchesType = !selectedType || type === selectedType
      const matchesLocation = !selectedLocation || locationData === selectedLocation

      if (matchesSearch && matchesType && matchesLocation) {
        item.style.display = "block"
        item.classList.add("fade-in")
        visibleCount++
      } else {
        item.style.display = "none"
        item.classList.remove("fade-in")
      }
    })

    // Update property count
    if (propertyCount) {
      propertyCount.textContent = visibleCount
    }

    // Show/hide no results message
    if (noResults) {
      if (visibleCount === 0) {
        noResults.style.display = "block"
      } else {
        noResults.style.display = "none"
      }
    }
  }

  // Event listeners
  searchForm.addEventListener("submit", (e) => {
    e.preventDefault()
    filterProperties()
  })

  searchInput.addEventListener("input", filterProperties)
  typeSelect.addEventListener("change", filterProperties)
  locationSelect.addEventListener("change", filterProperties)
}

// Clear filters function
function clearFilters() {
  const searchInput = document.getElementById("search")
  const typeSelect = document.getElementById("type")
  const locationSelect = document.getElementById("location")

  if (searchInput) searchInput.value = ""
  if (typeSelect) typeSelect.value = ""
  if (locationSelect) locationSelect.value = ""

  // Show all properties
  document.querySelectorAll(".property-item").forEach((item) => {
    item.style.display = "block"
    item.classList.add("fade-in")
  })

  // Update count
  const propertyCount = document.getElementById("propertyCount")
  if (propertyCount) {
    propertyCount.textContent = document.querySelectorAll(".property-item").length
  }

  // Hide no results message
  const noResults = document.getElementById("noResults")
  if (noResults) {
    noResults.style.display = "none"
  }
}

// Contact form functionality
function initializeContactForm() {
  const contactForm = document.getElementById("contactForm")
  const successMessage = document.getElementById("successMessage")

  if (!contactForm) return

  contactForm.addEventListener("submit", (e) => {
    e.preventDefault()

    // Validate form
    if (!contactForm.checkValidity()) {
      e.stopPropagation()
      contactForm.classList.add("was-validated")
      return
    }

    // Show loading state
    const submitBtn = contactForm.querySelector('button[type="submit"]')
    const originalText = submitBtn.innerHTML
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...'
    submitBtn.disabled = true

    // Simulate form submission
    setTimeout(() => {
      // Show success message
      if (successMessage) {
        successMessage.style.display = "block"
        successMessage.classList.add("show")

        // Scroll to success message
        successMessage.scrollIntoView({
          behavior: "smooth",
          block: "center",
        })
      }

      // Reset form
      contactForm.reset()
      contactForm.classList.remove("was-validated")

      // Reset button
      submitBtn.innerHTML = originalText
      submitBtn.disabled = false

      // Hide success message after 5 seconds
      setTimeout(() => {
        if (successMessage) {
          successMessage.classList.remove("show")
          setTimeout(() => {
            successMessage.style.display = "none"
          }, 150)
        }
      }, 5000)
    }, 2000)
  })
}

// Property card interactions
function initializePropertyCards() {
  // Heart button functionality
  document.querySelectorAll(".heart-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault()
      const icon = this.querySelector("i")

      if (icon.classList.contains("far")) {
        icon.classList.remove("far")
        icon.classList.add("fas")
        this.classList.add("liked")
        showNotification("Property added to favorites!", "success")
      } else {
        icon.classList.remove("fas")
        icon.classList.add("far")
        this.classList.remove("liked")
        showNotification("Property removed from favorites!", "info")
      }
    })
  })

  // View button functionality
  document.querySelectorAll(".view-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault()
      const propertyCard = this.closest(".property-card")
      const propertyTitle = propertyCard.querySelector(".card-title").textContent

      // Create modal or redirect to property detail page
      showPropertyModal(propertyTitle)
    })
  })
}

// Show property modal (placeholder)
function showPropertyModal(propertyTitle) {
  // This would typically show a modal with property details
  // For now, we'll just show a notification
  showNotification(`Viewing details for: ${propertyTitle}`, "info")
}

// Counter animations
function initializeCounters() {
  const counters = document.querySelectorAll("[data-count]")
  const observerOptions = {
    threshold: 0.5,
    rootMargin: "0px 0px -100px 0px",
  }

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target)
        counterObserver.unobserve(entry.target)
      }
    })
  }, observerOptions)

  counters.forEach((counter) => {
    counterObserver.observe(counter)
  })
}

function animateCounter(element) {
  const target = Number.parseInt(element.getAttribute("data-count"))
  const duration = 2000
  const step = target / (duration / 16)
  let current = 0

  const timer = setInterval(() => {
    current += step
    if (current >= target) {
      current = target
      clearInterval(timer)
    }
    element.textContent = Math.floor(current) + (element.textContent.includes("+") ? "+" : "")
  }, 16)
}

// Scroll effects
function initializeScrollEffects() {
  // Scroll to top button
  const scrollToTopBtn = createScrollToTopButton()

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
      scrollToTopBtn.classList.add("show")
    } else {
      scrollToTopBtn.classList.remove("show")
    }
  })

  // Parallax effect for hero section
  const heroSection = document.querySelector(".hero-section")
  if (heroSection) {
    window.addEventListener("scroll", () => {
      const scrolled = window.pageYOffset
      const rate = scrolled * -0.5
      heroSection.style.transform = `translateY(${rate}px)`
    })
  }
}

function createScrollToTopButton() {
  const btn = document.createElement("button")
  btn.className = "scroll-to-top btn btn-success"
  btn.innerHTML = '<i class="fas fa-arrow-up"></i>'
  btn.setAttribute("aria-label", "Scroll to top")

  btn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    })
  })

  document.body.appendChild(btn)
  return btn
}

// Animation on scroll
function initializeAnimations() {
  const animatedElements = document.querySelectorAll(".card, .service-card, .testimonial-card, .value-card, .team-card")

  const animationObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fade-in")
          animationObserver.unobserve(entry.target)
        }
      })
    },
    {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px",
    },
  )

  animatedElements.forEach((element) => {
    animationObserver.observe(element)
  })
}

// Bootstrap components initialization
function initializeBootstrapComponents() {
  // Initialize tooltips
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.map((tooltipTriggerEl) => new window.bootstrap.Tooltip(tooltipTriggerEl))

  // Initialize popovers
  const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  popoverTriggerList.map((popoverTriggerEl) => new window.bootstrap.Popover(popoverTriggerEl))

  // Auto-dismiss alerts
  const alerts = document.querySelectorAll(".alert:not(.alert-permanent)")
  alerts.forEach((alert) => {
    setTimeout(() => {
      const bsAlert = new window.bootstrap.Alert(alert)
      if (bsAlert) {
        bsAlert.close()
      }
    }, 5000)
  })
}

// Utility functions
function showNotification(message, type = "success") {
  const notification = document.createElement("div")
  notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`
  notification.style.cssText = "top: 20px; right: 20px; z-index: 9999; min-width: 300px;"
  notification.innerHTML = `
        <i class="fas fa-${getIconForType(type)} me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `

  document.body.appendChild(notification)

  setTimeout(() => {
    const bsAlert = new window.bootstrap.Alert(notification)
    bsAlert.close()
  }, 5000)
}

function getIconForType(type) {
  const icons = {
    success: "check-circle",
    info: "info-circle",
    warning: "exclamation-triangle",
    danger: "exclamation-circle",
  }
  return icons[type] || "info-circle"
}

function formatCurrency(amount) {
  return new Intl.NumberFormat("en-GB", {
    style: "currency",
    currency: "GBP",
  }).format(amount)
}

function formatDate(date) {
  return new Intl.DateTimeFormat("en-GB", {
    year: "numeric",
    month: "long",
    day: "numeric",
  }).format(new Date(date))
}

// Loading state management
function setLoadingState(element, loading = true) {
  if (loading) {
    element.disabled = true
    element.classList.add("loading")
    const originalText = element.textContent
    element.setAttribute("data-original-text", originalText)
    element.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...'
  } else {
    element.disabled = false
    element.classList.remove("loading")
    element.textContent = element.getAttribute("data-original-text")
  }
}

// Form validation helpers
function validateEmail(email) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return re.test(email)
}

function validatePhone(phone) {
  const re = /^[+]?[1-9][\d]{0,15}$/
  return re.test(phone.replace(/\s/g, ""))
}

// Local storage helpers
function saveToLocalStorage(key, value) {
  try {
    localStorage.setItem(key, JSON.stringify(value))
  } catch (e) {
    console.error("Error saving to localStorage:", e)
  }
}

function getFromLocalStorage(key) {
  try {
    const item = localStorage.getItem(key)
    return item ? JSON.parse(item) : null
  } catch (e) {
    console.error("Error reading from localStorage:", e)
    return null
  }
}

// Error handling
window.addEventListener("error", (e) => {
  console.error("JavaScript error:", e.error)
  // You could send this to an error tracking service
})

// Performance monitoring
window.addEventListener("load", () => {
  // Log page load time
  const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart
  console.log("Page load time:", loadTime + "ms")
})
