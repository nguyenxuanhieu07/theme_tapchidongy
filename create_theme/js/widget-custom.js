var select_multiple = {
    init: function () { 
        var multiselect = document.querySelector('x-multiselect');
        multiselect.addEventListener('change', function() {
        console.log('Selected items:', this.selectedItems());
        });
       
    }
};


jQuery(function($){
    select_multiple.init();
    // home_search.init();
    // google_form.init();
});