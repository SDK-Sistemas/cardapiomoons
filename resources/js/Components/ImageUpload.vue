<template>
    <div>
      <div v-if="modelImage != null" class="max-w-sm rounded overflow-hidden shadow-lg bg-white my-4">
          <p class="text-medium font-bold p-4">Foto Atual</p>
          <img class="w-full" :src="`${route('home_cardapio')}/storage/${modelImage.path}`">
      </div>

      <input type="file" @input="modelValue.avatar = $event.target.files[0]; $emit('update:modelValue', modelValue)" name="avatar" placeholder="TROCAR FOTO"/>
      
      <progress v-if="modelValue.progress" :value="modelValue.progress.percentage" max="100">
      {{ modelValue.progress.percentage }}%
      </progress>

    </div>
</template>
<script>
    export default {       
        emits: ['update:modelValue'],

        props: {
            modelValue : {
                type: Object,
                default: {}
            },
            modelImage : {
                type: Object,
                default: null
            }
        }
    }
</script>