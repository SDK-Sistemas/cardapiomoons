<template>
  <div class="rounded bg-gray-100 my-4 border">

    <div class="flex items-center px-4 py-2 border-b">

      <!-- Info appdelivery -->
      <h1 v-if="pedido.documento" class="text-lg font-bold flex-grow">
        #{{ pedido.documento.substring(pedido.documento.length - 4) }} - {{ pedido.nomecliente }}
      </h1>
      <!-- /Info appdelivery -->

      <!-- Info ifood -->
      <template v-if="pedido.referenciaifood" >
        <i class="flex items-center rounded-full w-14 h-6 p-1 mr-2 shadow" style="background: #F8001B;">
          <img src="/img/ifood.png" alt="" class="filter invert">
        </i>
        <h1 class="text-lg font-bold flex-grow">
          #{{ pedido.referenciacurtaifood }} - {{pedido.nomecliente}}
        </h1>
      </template>
      <!-- /Info ifood -->

      <span class="font-medium text-sm flex-none">
        {{ pedido.horaabertura }}
      </span>
    </div>

    <div class="my-4 px-4 py-2">
      <span class="block my-1" >
        {{ pedido.endereco }}, {{ pedido.endereconumero}} - {{ pedido.enderecobairro }}
      </span>
      <span class="block">
        <strong>Taxa de entrega:</strong> R$ {{ pedido.valorentrega }}
      </span>
      <span class="block">
         <strong>Total:</strong> R$ {{ pedido.valortotal }}
      </span>
      <span class="block" v-if="pedido.referenciaifood">
        <strong>Forma de pagamento:</strong> {{ pedido.formapagamentoifood }}
      </span>
      <span class="block" v-if="pedido.valorcombinado != pedido.valortotal">
        <strong>Valor combinado:</strong> R$ {{ pedido.valorcombinado }}
        <span v-if="pedido.valortroco">( Troco: R$ {{ pedido.valortroco }})</span>
      </span>
      <span class="block" v-if="pedido.identregador">
       <strong>Entregador:</strong> {{ pedido.entregador }}
      </span>
      <span class="block" v-if="!pedido.cupomcancelado && !pedido.horaentregue">
        <i class="bi bi-clock-history"></i> {{ tempoEmAberto }}
      </span>
    </div>

    <!-- Botões do card na coluna Cozinha -->
    <div class="flex justify-end bg-gray-200 gap-x-4 px-4 py-2" v-if="!pedido.horaementrega && !pedido.horaentregue && !pedido.cupomcancelado">
      <breeze-button @click="cancelar()" class="bg-red-500">
        <i class="bi bi-trash"></i>
      </breeze-button>
      <breeze-button @click="sendToPrint()">
        <i class="bi bi-printer"></i>
      </breeze-button>
      <breeze-button @click="setEntregue()" title="Setar pedido como retirado.">
        <i class="bi bi-bag-check"></i>
      </breeze-button>
      <breeze-button @click="setEntregadorIfood()" v-if="pedido.referenciaifood">
        Entregador pelo iFood
      </breeze-button>
      <breeze-button @click="setEntregador()">
        <i class="bi-arrow-right"></i>
      </breeze-button>
    </div>
    <!-- /Botões do card na coluna Cozinha -->

    <!-- Botões do card na coluna Em entrega -->
    <div class="flex justify-end bg-gray-200 gap-x-2 px-4 py-2" v-if="pedido.horaementrega && !pedido.horaentregue && !pedido.cupomcancelado">
      <breeze-button @click="cancelar()"  class="bg-red-500">
        <i class="bi bi-trash"></i>
      </breeze-button>
      <breeze-button @click="sendToPrint()">
        <i class="bi bi-printer"></i>
      </breeze-button>
      <breeze-button @click="setEntregador()" v-if="pedido.identregador">
        <i class="bi-pen mr-2"></i>
        Editar entregador
      </breeze-button>
      <breeze-button @click="setEntregue()">
        <i class="bi-arrow-right"></i>
      </breeze-button>
    </div>
    <!-- /Botões do card na coluna Em entrega -->

    <!-- Botões do card na coluna Entregue -->
    <div class="flex justify-end bg-gray-200 gap-x-2 px-4 py-2" v-if="pedido.horaentregue && !pedido.cupomcancelado">
      <breeze-button @click="sendToPrint()">
        <i class="bi bi-printer"></i>
      </breeze-button>
    </div>
    <!-- /Botões do card na coluna Entregue -->

    <!-- Botões do card na coluna Cancelado -->
    <div class="flex justify-end bg-gray-200 gap-x-2 px-4 py-2" v-if="pedido.cupomcancelado">
      <!-- <breeze-button @click="restaurar()">
        <i class="bi-arrow-left"></i>
      </breeze-button> -->
    </div>
    <!-- /Botões do card na coluna Cancelado -->

  </div>

</template>

<script>
  import BreezeButton from '@/Components/Button'
  import { Inertia } from '@inertiajs/inertia'

  export default {
    components: {
      BreezeButton,
    },

    props: ['pedido'],

    data(){
      return {
        dialog: false,
      }
    },

    computed: {
      tempoEmAberto: function(){
        return new Date(this.pedido.timer * 1000).toISOString().substr(11, 8)
      }
    },
    
    methods:{

      setEntregador(){

        Swal.fire({
          title: 'Selecione o entregador',
          input: 'select',
          confirmButtonColor: 'rgba(31, 41, 55)',
          denyButtonColor: 'rgba(150, 150, 150)',
          showCancelButton: true,
          showDenyButton: true,
          confirmButtonText: 'Selecionar',
          cancelButtonText: 'Cancelar',
          denyButtonText: 'Selecionar e Imprimir',
          returnInputValueOnDeny: true, 
          inputOptions: this.$page.props.entregadores.reduce(function(previus, current){ return Object.assign(previus, current); }, {}),
          inputPlaceholder: 'Selecione um entregador para esse pedido.'
        })
        .then((result) => {
          
          if( (result.isConfirmed || result.isDenied) && !result.value)
          {
            return Swal.fire('É necessário escolher um entregador.', '', 'warning').then(( result ) => {
              return this.setEntregador()
            })
          }

          if ( (result.isConfirmed || result.isDenied) )
          {
            axios.post( route('entregador', this.pedido.id ), { entregador: result.value })
              .then( (response) => {
                Swal.fire('Sucesso!', '', 'success')
              })
              .catch(function(error){ 
                if( error.response ){ 
                  Swal.fire(error.response.data.msg, '', 'error'); 
                }
              })
          }
          
          if(  result.isDenied )
          {
            axios.get(`http://localhost:7852/contamesas/${this.pedido.id}`)
          }

        });
      },
      sendToPrint(){
        axios.get(`http://localhost:7852/contamesas/${this.pedido.id}`)
      },
      setEntregadorIfood(){
        Swal.fire({
          title: 'Entregador pelo iFood?',
          text: 'Utilizador o entregador do APP para este pedido?',
          confirmButtonColor: 'rgba(31, 41, 55)',
          denyButtonColor: 'rgba(150, 150, 150)',
          showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Confirmar',
          denyButtonText: 'Confirmar e Imprimir',
          cancelButtonText: 'Cancelar',
        })
        .then((result) => {

          if ( (result.isConfirmed || result.isDenied) )
          {
            axios.post( route('entregador', this.pedido.id ), { entregador: 0 })
              .then( (response) => {
                Swal.fire('Sucesso!', '', 'success')
              })
              .catch(function(error){ 
                if( error.response ){ 
                  Swal.fire(error.response.data.msg, '', 'error'); 
                }
              })
          }

          if(  result.isDenied )
          {
            axios.get(`http://localhost:7852/contamesas/${this.pedido.id}`)
          }

        });
      },
      setEntregue(){
        Swal.fire({
          title: 'Marcar pedido como entregue?',
          confirmButtonColor: 'rgba(31, 41, 55)',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          showLoaderOnConfirm: true,
        })
        .then((result) => {

          if (result.isConfirmed) {
            axios.post( route('entregue', this.pedido.id ))
            .then(function(response){ 
                Swal.fire('Sucesso!', '', 'success');
            })
            .catch(function(error){ if( error.response ){ Swal.fire(error.response.data.msg, '', 'error'); }})
          }
          
        });
      },
      cancelar(){
        Swal.fire({
          title: 'Cancelar o Pedido?',
          confirmButtonColor: 'rgba(31, 41, 55)',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          showLoaderOnConfirm: true,
        })
        .then((result) => {

          if (result.isConfirmed) {
            axios.delete( route('cancelar', this.pedido.id ))
            .then(function(response){ 
                Swal.fire('Sucesso!', '', 'success');
            })
            .catch(function(error){ if( error.response ){ Swal.fire(error.response.data.msg, '', 'error'); }})
          }
          
        });
      },
      restaurar(){
        Swal.fire({
          title: 'Restaurar Pedido?',
          confirmButtonColor: 'rgba(31, 41, 55)',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          showLoaderOnConfirm: true,
        })
        .then((result) => {

          if (result.isConfirmed) {
            axios.post( route('restaurar', this.pedido.id ))
            .then(function(response){ 
                Swal.fire('Sucesso!', '', 'success');
            })
            .catch(function(error){ if( error.response ){ Swal.fire(error.response.data.msg, '', 'error'); }})
          }
          
        });
      },
      setRetirado(){
        Swal.fire({
          title: 'Marcar pedido como retirado?',
          confirmButtonColor: 'rgba(31, 41, 55)',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          showLoaderOnConfirm: true,
        })
        .then((result) => {

          if (result.isConfirmed) {
            axios.post( route('cancelar', this.pedido.id ))
            .then(function(response){ 
                Swal.fire('Sucesso!', '', 'success');
            })
            .catch(function(error){ if( error.response ){ Swal.fire(error.response.data.msg, '', 'error'); }})
          }
          
        });
      },

    },

    mounted(){
       window.setInterval( () => this.pedido.timer += 1, 1000 )
    }
  }
</script>

<style>

</style>