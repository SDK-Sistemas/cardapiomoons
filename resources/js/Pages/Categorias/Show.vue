<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Categorias
                    </h2>
                </div>
                <div>
                    <BreezeButtonLink class="mx-2" :href="route('adm.categorias.edit', categoria.id)">Editar Categoria</BreezeButtonLink>
                    <BreezeButtonLink class="mx-2" :href="route('adm.categorias.pratos.create', categoria.id)">Novo Prato</BreezeButtonLink>
                    <BreezeButtonLink class="mx-2 bg-red-600" href="#" v-on:click="call_delete()">Deletar</BreezeButtonLink>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <h1 class="my-4 text-lg font-bold bold mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <span>
                   Pratos da Categoria {{categoria.name}}
                </span>
            </h1>
            
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                <div class="border-b border-gray-200 shadow rounded bg-white">

                    <div class="bg-gray-50">
                        <div class="px-6 py-2 text-gray-500 w-full">
                            <span class="font-bold"> Preço e Detalhes. Segure e arraste a linha para mudar a ordem dos pratos.</span>
                            <BreezeButtonLink v-show="order_alterada" 
                                            class="mx-2 bg-green-600 float-right" 
                                            href="#" 
                                            v-on:click="save_order()"
                            >
                                Atualizar a Ordem
                            </BreezeButtonLink>
                        </div>
                    </div>

                    <div class="bg-white">
                        <Container
                            :get-ghost-parent="getGhostParent"
                            :get-child-payload="getChildPayload"
                            @drop="onDrop"
                            @drop-ready="onDropReady"
                            @drop-not-allowed="dropNotAllowed"
                        >
                        
                        <table class="table table-fixed bg-gray-50 w-full">
                            <tr>
                                <th class="px-6 py-2 text-center text-sm text-gray-500">Order</th>
                                <th class="px-6 py-2 text-center text-sm text-gray-500">Click</th>
                                <th class="px-6 py-2 text-center text-sm text-gray-500">Preço</th>
                                <th class="px-6 py-2 text-center text-sm text-gray-500" colspan="9">Detalhes</th>
                            </tr>
                        </table>
                            <Draggable v-for="prato in items" :key="prato.id" >
                                
                                <tr class="draggable-item">
                                    <td class="px-6 py-4 text-sm text-gray-500 text-center font-bold border border-gray-100">
                                        #{{prato.order}}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 text-center font-bold border border-gray-100">
                                        <a :href="route('adm.categorias.pratos.show', [categoria.id, prato.id])">Abrir</a></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 text-center border border-gray-100">{{prato.price}}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 border border-gray-100" colspan="9">
                                        <table class="table-fixed w-full">
                                            <thead>
                                                <tr>
                                                    <th class="w-1/6">Idioma</th>
                                                    <th class="w-2/6">Nome</th>
                                                    <th class="w-3/6">Descrição</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="item in prato.translations" v-bind:key="item.id">
                                                    <td class="p-2 text-center">{{mixin_tag_idioma(item.locale)}} {{item.locale}}</td>
                                                    <td class="p-2 ">{{item.translation.name}}</td>
                                                    <td class="p-2 ">{{item.translation.description}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                               </tr>
                            </Draggable><!-- table -->
                        </Container>

                    </div>
                </div>

            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<style scoped>
    .dndrop-draggable-wrapper { display: table !important; width: 100%; table-layout: fixed; } 
</style>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeCardItem from '@/Components/CardItem'
    import BreezeButtonLink from '@/Components/ButtonLink'
    import { Inertia } from '@inertiajs/inertia'
    import { Container, Draggable } from "vue-dndrop"

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeCardItem,
            BreezeButtonLink,
            Container, 
            Draggable
        },

        props: {
            auth: Object,
            errors: Object,
            flash: Object,
            categoria: Object,
        },

        data() {
            return {
                items: this.categoria.pratos,
                order_alterada: false,
                sorted: false
            };
        },
        
        mounted() {
            if(this.sorted == false){
                this.items = this.sort(this.categoria.pratos)
                this.sorted = false
            }
        },

        methods: {
            sort: function(pratos){
                
                const items = [];

                /** Copy without bind references */
                pratos.sort((a, b) => a.order - b.order)
                    .forEach(item => {
                        items.push(Object.assign({}, item))
                    }); 
                
                return items

            },

            call_delete: function(){

               if(confirm(`Tem certeza que deseja deletar a categoria ${this.categoria.name}? Está ação é irreversível!`) ){
                   Inertia.delete(route('adm.categorias.destroy', this.categoria.id))
               }else{
                   alert("Processo cancelado com sucesso!");
               }
            },
            
            save_order: function(){

               if(confirm(`Tem certeza que deseja alterar ordem dos pratos?`) ){
                    Inertia.post(
                        route('adm.categorias.pratos.sort', this.categoria.id), 
                        {pratos: this.items.map(function(item, index){ return {'id': item.id, 'order': index}; }) },
                        {
                            preserveState: false,
                            preserveScroll: false,
                            onFinish: visit => {
                                Inertia.reload({});
                            }
                        }
                    );
               }else{
                   alert("Processo cancelado com sucesso!");
               }
            },

            /**Drag Drop Functions */
            onDrop(dropResult) {
                
                console.log("drop result ", dropResult);

                this.order_alterada = true;
                this.items = this.applyDrag(this.items, dropResult);

            },
            getGhostParent() {
                return document.body;
            },
            onDropReady(dropResult) {
                console.log("drop ready", dropResult);
            },
            dropNotAllowed({ payload, container }) {
                console.log("drop not allowed");
            },
            getChildPayload(index) {
                return this.items[index];
            },

            applyDrag(arr, dragResult) {
                const { removedIndex, addedIndex, payload } = dragResult;
                if (removedIndex === null && addedIndex === null) return arr;
               
                const result = [...arr];
                let itemToAdd = payload;

                if (removedIndex !== null) {
                    itemToAdd = result.splice((removedIndex-1), 1)[0];
                }

                if (addedIndex !== null) {
                    result.splice((addedIndex-1), 0, itemToAdd);
                }

                return result;
            },
        }
    }
</script>
