<template>
    <div class="grid gap-2 grid-cols-3">

        <div v-for="(idioma, index) in modelValue.translations" v-bind:key="index" class="my-2">
            <p class="font-bold text-medium">{{ mixin_tag_idioma(idioma.locale) }} - {{ idioma.locale }}</p>
            <BreezeInput @input="$emit('update:modelValue', modelValue)" type="text" v-model="modelValue.translations[index].translation.name" placeholder="Nome" class="w-full"/>
            <div class="block">
                <textarea @input="$emit('update:modelValue', modelValue)" v-model="modelValue.translations[index].translation.description" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" name="description" id="description" placeholder="Descrição" rows="5">
                </textarea>
            </div>
        </div>

    </div>   

    <BreezeButton type="submit"> 
        Salvar
    </BreezeButton>
        
</template>
<script>
    import BreezeInput from '@/Components/Input'
    import BreezeButton from '@/Components/Button'

    export default {
        components: {
            BreezeInput,
            BreezeButton
        },
        
        emits: ['update:modelValue'],

        props: {
            modelValue : {
                type: Object,
                default: {}
            }
        }
    }
</script>