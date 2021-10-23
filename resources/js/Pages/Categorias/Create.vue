<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Categorias
                    </h2>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <h1 class="my-4 text-lg font-bold bold mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <span>
                   Nova Categoria
                </span>
            </h1>
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                
                <form @submit.prevent="submit">

                    <ImageUpload v-model="form"/>
                    <FormLocate v-model="form" />
                    
                </form>

            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import FormLocate from '@/Components/FormLocate'
    import { useForm } from '@inertiajs/inertia-vue3'
    import ImageUpload from '@/Components/ImageUpload'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            FormLocate,
            ImageUpload
        },
        props: {
            auth: Object,
            errors: Object
        },
        mounted(){
            this.form.translations = this.mixin_gerador_translation()
        },
        setup () {
            const form = useForm({
                translations: [],
                avatar: null,
            })

            function submit() {
                form.post(route('adm.categorias.store'))
            }

            return { form, submit }
        }
    }
</script>
