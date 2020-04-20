<template>
<div>
<transition name="fade" mode="out-in">
    	<router-view />
    </transition>



	<transition-group name="slide-up" tag="ul" appear>
          <li v-for="contact in contacts" :key="contact">
            {{ contact }}
          </li>
        </transition-group>

</div>
</template>
<style scoped>
/* normal fade */
  .fade-enter {
      opacity: 0;
    }
    
    
    .fade-enter-active,
    .fade-leave-active {
      transition: opacity .5s ease-out;
    }
    
    .fade-leave-to {
      opacity: 0;
    }

/* slide */
    .slide-fade-enter {
      transform: translateX(10px);
      opacity: 0;
    }
    
    .slide-fade-enter-active,
    .slide-fade-leave-active {
      transition: all 0.2s ease;
    }
    
    .slide-fade-leave-to {
      transform: translateX(-10px);
      opacity: 0;
    }


    /* hacer entrar datos y acomodarlos */
        .slide-up-enter {
      transform: translateX(10px);
      opacity: 0;
    }
    
    .slide-up-enter-active {
      transition: all 0.2s ease;
    }
    
    .slide-up-move {
      transition: transform 0.5s ease-out;
    }
</style>

 