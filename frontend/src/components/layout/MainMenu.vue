<script>
import RitsButton from '@/components/RitsButton.vue';
export default {
    name:'main-menu',
    components: {
        RitsButton
    }
}
</script>
<template>
    <nav>
        <div>
            <img src="../../assets/img/rits-logo.png" />
        </div>
        <div>
            <div class="menu-link">A RITS</div>
            <div class="menu-link">NOSSOS VALORES</div>
            <rits-button :text="'Vagas abertas'"/>
        </div>
    </nav>
</template>
<style scoped>

nav{
    display:flex; 
    justify-content:space-between; 
    align-items:baseline; 
    width:100%; 
    margin:0px 20px;
}

nav > div:nth-child(2){
    display:flex; 
    justify-content:space-between; 
    align-items:baseline; 
    width:40%;
}

nav > div:nth-child(2) > .menu-link{
  font-family: "TT Norms";
  font-size: 14px;
  line-height: 17px;
  /* identical to box height */

  letter-spacing: 0.025em;
  text-transform: uppercase;
}

</style>