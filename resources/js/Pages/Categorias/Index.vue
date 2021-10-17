<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        <span>Categorias</span> 
                    </h2>
                </div>
                <div>
                    <BreezeButtonLink :href="route('adm.categorias.create')">Nova Categoria</BreezeButtonLink>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <div class="grid grid-cols-3 gap-4 mx-auto max-w-7xl">
                <breeze-card-categoria 
                    v-for="categoria in categorias" 
                    v-bind:key="categoria.id" 
                    :categoria="categoria" 
                    :url="route('adm.categorias.show', categoria.id)"
                >
                    <span>{{categoria.description}}</span>
                </breeze-card-categoria>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeCardCategoria from '@/Components/CardCategoria'
    import BreezeButtonLink from '@/Components/ButtonLink'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeCardCategoria,
            BreezeButtonLink
        },

        props: {
            auth: Object,
            errors: Object,
            categorias: Object,
        }
    }
</script>
