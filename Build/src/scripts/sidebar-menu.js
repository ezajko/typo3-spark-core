// ETF UNSA - Sidebar Menu Script
// Author: Ernedin Zajko <ezajko@root.ba>
// License: GPL-2.0-or-later

document.addEventListener('DOMContentLoaded', () => {
    // Find the active link
    const activeLink = document.querySelector('.nav-tree .nav-link.active');

    if (activeLink) {
        // Traverse up to find all parent collapse elements
        let parentCollapse = activeLink.closest('.collapse');

        while (parentCollapse) {
            // Find the toggle link associated with this collapse
            // The toggle link is usually the previous sibling of the collapse element's parent li,
            // but in this structure, the collapse is inside the li, and the toggle is the previous sibling of the collapse.
            const toggleLink = parentCollapse.previousElementSibling;

            if (toggleLink && toggleLink.classList.contains('nav-link')) {
                toggleLink.classList.add('parent-active');
                // Ensure the parent is expanded
                parentCollapse.classList.add('show');
                toggleLink.setAttribute('aria-expanded', 'true');
            }

            // Move up to the next level
            parentCollapse = parentCollapse.parentElement.closest('.collapse');
        }
    }
});
