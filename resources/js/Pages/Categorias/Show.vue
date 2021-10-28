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
                <table class="table-fixed border-b border-gray-200 shadow rounded bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500 w-1/12"></th>
                            <th class="px-6 py-2 text-xs text-gray-500 w-1/12">Preço</th>
                            <th class="px-6 py-2 text-xs text-gray-500 w-10/12">Detalhes</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr v-for="prato in categoria.pratos" v-bind:key="prato.id" >
                            <td class="px-6 py-4 text-sm text-gray-500 text-center font-bold border border-gray-100" scope="row">
                                <a :href="route('adm.categorias.pratos.show', [categoria.id, prato.id])">Abrir</a></td>
                            <td class="px-6 py-4 text-sm text-gray-500 text-center border border-gray-100">{{prato.price}}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 border border-gray-100">
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
                    </tbody>
                </table>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeCardItem from '@/Components/CardItem'
    import BreezeButtonLink from '@/Components/ButtonLink'
    import { Inertia } from '@inertiajs/inertia'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeCardItem,
            BreezeButtonLink
        },

        props: {
            auth: Object,
            errors: Object,
            flash: Object,
            categoria: Object,
        },
        methods: {
            call_delete: function(){

               if(confirm(`Tem certeza que deseja deletar a categoria ${this.categoria.name}? Está ação é irreversível!`) ){
                   Inertia.delete(route('adm.categorias.destroy', this.categoria.id))
               }else{
                   alert("Processo cancelado com sucesso!");
               }
            }
        }
    }
</script>
