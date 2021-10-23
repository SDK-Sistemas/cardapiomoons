export default {
    data() {
        return {
            locale: {pt_BR: 'Português', us: 'Inglês', es: 'Espanhol'}
        }
    },
    methods: {
        mixin_tag_idioma: function(locale) { return this.locale[locale] },

        /**
         * Gerar o padrão do objeto translation, dentro do Prato ou Categoria, 
         * a partir da lista de locale setada no data
         * @return Array [ 
         *      {locale: 'pt_BR', translation: {name: '', description : ''} }, 
         *      {locale: 'us', translation: {name: '', description : ''} },
         *      {locale: 'es', translation: {name: '', description : ''} },
         *      {....},
         *  */
        mixin_gerador_translation: function(){
            if( this.locale == null ) return [];
            return Object.keys(this.locale).reduce(
                function(start, item){
                    start.push({locale: item, translation: {name: '', description: ''}}); 
                    return start; 
                }, 
                [] // Array Inicial para variavel start
            )
        }
    }
}