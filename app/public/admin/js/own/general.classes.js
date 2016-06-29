/*
* Clase con funcionalidad para cargar contenido dinamicamente en el modal
*/

(function() {
    self.LoadModal = function(containerBase, titleEdit, btn) {
        this.containerBase = containerBase;
        this.titleEdit = titleEdit;
        this.btn = btn;
        this.url = "";
    }

    self.LoadModal.prototype = {
        prepareView: function() {
            this.containerBase.html('<h2 class="text-center">Cargando ....</h2>');
            this.titleEdit.text(this.btn.data('title'));
            this.url = this.btn.data('url');
            this.loadView();
        },
        loadView: function() {
            this.containerBase.load('/home/' + this.url);
        }
    }
})();
