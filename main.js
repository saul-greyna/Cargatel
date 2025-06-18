document.querySelectorAll('path').forEach(el => {
    el.addEventListener('mouseenter', e => {
        const cities = e.target.dataset.cities;
        tooltip.innerHTML = `<strong>${e.target.id}</strong><br>${cities}`;
        tooltip.style.display = 'block';
    });
    el.addEventListener('mouseleave', () => {
        tooltip.style.display = 'none';
    });
});
