<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Categorias / Pratos
                    </h2>
                </div>
                <div>
                    <BreezeButtonLink class="mx-2 bg-red-600" href="#" v-on:click="call_delete()">Deletar</BreezeButtonLink>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <h1 class="my-4 text-lg font-bold bold mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <a :href="route('adm.categorias.show', categoria.id)">
                   {{categoria.name}} - {{prato.name}}
                </a>
            </h1>
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                <form @submit.prevent="submit(categoria.id, prato.id)">
                    
                    <ImageUpload v-model="form" :modelImage="prato.images[0]" />

                    <p class="font-bold text-medium">Preço</p>
                    <BreezeInput type="number" min="0" step="0.01" v-model="form.price" />

                    <FormLocate v-model="form" />

                </form>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeInput from '@/Components/Input'
    import ImageUpload from '@/Components/ImageUpload'
    import FormLocate from '@/Components/FormLocate'
    import { Inertia } from '@inertiajs/inertia'
    import { useForm } from '@inertiajs/inertia-vue3'
    import BreezeButtonLink from '@/Components/ButtonLink'

    export default {
        components: {
            BreezeButtonLink,
            BreezeAuthenticatedLayout,
            BreezeInput,
            ImageUpload,
            FormLocate
        },
        props: {
            auth: Object,
            errors: Object,
            categoria: Object,
            prato: Object
        }, 
        setup () {
            const form = useForm({
                price: 0,
                translations: [],
                avatar: null,
                _method: 'PUT'
            })

            function submit(categoria_id, prato_id) {
                Inertia.post(route('adm.categorias.pratos.update', [categoria_id, prato_id]), form)
            }

            return { form, submit }
        },
        mounted(){
            this.form.translations = this.prato.translations
            this.form.price = parseFloat(this.prato.price.replace(',', '.'))
        },
        methods: {
            call_delete: function(){

               if(confirm(`Tem certeza que deseja deletar o prato ${this.prato.name}? Está ação é irreversível!`) ){
                   Inertia.delete(route('adm.categorias.pratos.destroy', [this.categoria.id, this.prato.id]))
               }else{
                   alert("Processo cancelado com sucesso!");
               }
            }
        }
    }
</script>
