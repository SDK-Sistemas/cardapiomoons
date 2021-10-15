<template>
  <div class="w-1/3 bg-white p-4 rounded shadow">

    <div class="flex align-items-center">
      <span class="flex-grow font-bold">{{ titulo }}</span>
      
      <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white text-bold bg-gray-800 rounded-full">
        {{ quantidade }}
      </span>
      
    </div>

    <transition-group name="list" tag="div">
      <card-pedido v-for="pedido in filteredList" :key="pedido.id" :pedido="pedido">
      </card-pedido>
    </transition-group>

  </div>
</template>

<script>

  import CardPedido from '@/Components/CardPedido'

  export default {
    components: {
      CardPedido
    },

    props: ['pedidos', 'titulo'],

    data(){
      return{
        filter: null
      }
    },

    computed: {
      quantidade: function(){
        return Object.keys(this.pedidos).length
      },
      filteredList: function(){
        return this.filter
          ? this.pedidos.filter( (item) => {

            let filter = this.filter.toLowerCase();

            return item.nomecliente.toLowerCase().startsWith(filter) 
            || item.documento.toLowerCase().startsWith(filter) 
            || item.referenciaifood.toLowerCase().startsWith(filter) 
            || item.referenciacurtaifood.toLowerCase().startsWith(filter) 
          })
          : this.pedidos
      }
    },

    mounted() { 
      this.eventBus.on("filtrar-pedidos", filter => {
        this.filter = filter;
      });
    }

  }
</script>

<style scoped>
  .list-enter-active,
  .list-leave-active,
  .list-move {
    transition: 500ms cubic-bezier(0.59, 0.12, 0.34, 0.95);
    transition-property: opacity, transform;
  }

  .list-enter {
    opacity: 0;
    transform: translateX(50px) scaleY(0.5);
  }

  .list-enter-to {
    opacity: 1;
    transform: translateX(0) scaleY(1);
  }

  .list-leave-active {
    position: absolute;
  }

  .list-leave-to {
    opacity: 0;
    transform: scaleY(0);
    transform-origin: center top;
  }
</style>