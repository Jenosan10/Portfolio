// This is just a placeholder if you want custom particle configurations
// The actual particles.js initialization is in main.js

// You can add custom particle presets here if needed
const particlePresets = {
    default: {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: "#2a9fd6" },
            shape: { type: "circle" },
            opacity: { value: 0.5, random: true },
            size: { value: 3, random: true },
            line_linked: { enable: true, distance: 150, color: "#3a3a3a", opacity: 0.4, width: 1 },
            move: { enable: true, speed: 2, direction: "none", random: true, straight: false, out_mode: "out" }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" }
            }
        }
    },
    sparse: {
        particles: {
            number: { value: 40, density: { enable: false } },
            // ... other settings
        }
    }
};

// Export if using modules
// export { particlePresets };