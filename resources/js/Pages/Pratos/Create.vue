<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Categorias / Pratos
                    </h2>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <h1 class="my-4 text-lg font-bold bold mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <span>
                   {{ categoria.name }} - Novo Prato
                </span>
            </h1>
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                
                <form @submit.prevent="submit(categoria.id)">
                    
                    <ImageUpload v-model="form"/>

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
    import { useForm } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeInput,
            ImageUpload,
            FormLocate
        },

        props: {
            auth: Object,
            errors: Object,
            categoria: Object
        },
        mounted(){
            this.form.translations = this.mixin_gerador_translation()
        },
        setup () {
            const form = useForm({
                price: 0,
                translations: [],
                avatar: null,
            })

            function submit(id) {
                form.post(route('adm.categorias.pratos.store', id))
            }

            return { form, submit }
        }
    }
</script>
