<template>
  <span>
    {{ time }}
  </span>
</template>

<script>
export default {

  props: {
    teste: {
      type: Date,
      default: () => new Date()
    }
  },

  data(){
    return {
      time:  DateTime.now()
    }
  },
  
  mounted(){   
    setInterval(() => {
      this.time = this.time.setSeconds( this.time.getSeconds() + 1000 )
    }, 1000);
  }
}
</script>

<style>

</style>