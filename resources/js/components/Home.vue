<template>
    <div class="container">
        {{timerCount}}
    </div>
</template>

<script>
     export default {

data() {
    return {
        timerCount: 60,

    }
},

watch: {

    timerCount: {
        handler(value) {

            for(i = 60; i <= 0; i--){
                setTimeout(()=>{
                    this.timerCount --;
                }, 1000);
                return `${i}, / ,${this.timerCount}`;
            }



        },
        immediate: true // This ensures the watcher is triggered upon creation
    }

}
}
</script>
