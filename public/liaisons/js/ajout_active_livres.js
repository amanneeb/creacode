const options = document.querySelectorAll('.liste-livres__tri-option');

options.forEach(function(option) {
    option.addEventListener('click', function() {
        options.forEach(function(opt) {
            opt.classList.remove('active');
        });
        this.classList.add('active');
    });
});
