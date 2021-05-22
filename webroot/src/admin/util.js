$(document).ready(function () {

    var tinyOptions = {
        selector: '.ck-editor',
        min_height: 400,
        branding: false,
        elementpath: false,
        plugins: 'link image table',
        contextmenu: 'link image table',
        toolbar_mode: 'wrap', /*sliding, wrap*/
        menu: {
            file: { title: 'Arquivo', items: 'newdocument restoredraft | preview | print ' },
            edit: { title: 'Editar', items: 'undo redo | cut copy paste | selectall | searchreplace' },
            view: { title: 'Visualizar', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
            insert: { title: 'Inserir', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
            format: { title: 'Formatar', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
            tools: { title: 'Ferramentas', items: 'spellchecker spellcheckerlanguage | code wordcount' },
            table: { title: 'Tabela', items: 'inserttable | cell row column | tableprops deletetable' },
            help: { title: 'Ajuda', items: 'help' }
        },
    };

    tinymce.init(tinyOptions);

    /*
    ClassicEditor
        .create(document.querySelector('.ck-editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Parágrafo',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Título 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Título 2',
                        class: 'ck-heading_heading2'
                    },
                ]
            }
        })
        .catch(error => {
            console.log(error);
        });
        */
});
