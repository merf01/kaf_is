function init() {
    
    if (page === 'projectsPage') {
        projects.init();
        cart.init(optionsTagsTech);
    }
    // --- Новый код
    if (page === 'tagsTech') {
        tagsTech.init();
        cart.init(optionsTagsTech);
    }
    // --- Новый код

}